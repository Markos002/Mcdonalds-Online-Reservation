<?php

namespace App\Services;
use App\Repository\Contracts\IPartyDetailRepository;
use App\Services\Contracts\ITimeSlotAvailability;
use Carbon\Carbon;

class TimeSlotAvailability implements ITimeSlotAvailability
{

    public function __construct(
        protected IPartyDetailRepository $partyDetailRepository
    ){}

    public function timeSlotAvailable(string $date): array
    {
        // Get all bookings for the date
        $bookings = $this->partyDetailRepository->getAvailablTimeSlot($date);
        
        // Generate all possible time slots
        $allSlots = $this->generateAllTimeSlots();
        
        // Get blocked time slots based on bookings
        $blockedSlots = $this->getBlockedTimeSlots($bookings);
        
        // Return available slots (all slots minus blocked slots)
        return array_values(array_diff($allSlots, $blockedSlots));
    }

    /**
     * Generate all possible 30-minute time slots for the day
     * Morning: 9:00 AM - 12:00 PM
     * Afternoon/Night: 1:00 PM - 12:00 AM
     * 
     * @return array All time slots
     */
    private function generateAllTimeSlots(): array
    {
        $slots = [];
        
        // Morning slots: 9:00 AM to 12:00 PM
        $current = Carbon::createFromTime(9, 0);
        $morningEnd = Carbon::createFromTime(12, 0);
        
        while ($current <= $morningEnd) {
            $slots[] = $current->format('g:i A');
            $current->addMinutes(30);
        }
        
        // Afternoon/Night slots: 1:00 PM to 12:00 AM (midnight)
        $current = Carbon::createFromTime(13, 0); // 1:00 PM
        $nightEnd = Carbon::createFromTime(23, 30); // 11:30 PM (last slot before midnight)
        
        while ($current <= $nightEnd) {
            $slots[] = $current->format('g:i A');
            $current->addMinutes(30);
        }
        
        // Add midnight slot
        $slots[] = '12:00 AM';
        
        return $slots;
    }

   
    private function getBlockedTimeSlots($bookings): array
    {
        $blockedSlots = [];
        
        foreach ($bookings as $booking) {
            $checkIn = $this->parseTime($booking->check_in_time);
            $checkOut = $this->parseTime($booking->check_out_time);
            $extendHours = $booking->time_extend ?? 0;
            
            // Calculate actual end time with extension
            $actualEndTime = $checkOut->copy()->addHours($extendHours);
            
            // Add 1-hour gap after booking ends
            $nextAvailableTime = $actualEndTime->copy()->addHour();
            
            // Handle morning closing time (12:00 PM)
            if ($checkIn->hour < 12 && $actualEndTime->hour >= 12) {
                // If booking extends past morning session, block until 1:00 PM
                $nextAvailableTime = Carbon::createFromTime(13, 0); // 1:00 PM
            }
            
            // Block all slots from check-in to next available time
            $current = $checkIn->copy();
            while ($current < $nextAvailableTime) {
                $timeSlot = $current->format('g:i A');
                if (!in_array($timeSlot, $blockedSlots)) {
                    $blockedSlots[] = $timeSlot;
                }
                $current->addMinutes(30);
            }
            
            // If booking ends close to morning closing (11:00 AM or later in morning)
            // and would need gap into afternoon, block remaining morning slots
            if ($checkIn->hour < 12 && $actualEndTime->hour >= 11) {
                $morningEnd = Carbon::createFromTime(12, 0);
                $current = $actualEndTime->copy();
                while ($current <= $morningEnd) {
                    $timeSlot = $current->format('g:i A');
                    if (!in_array($timeSlot, $blockedSlots)) {
                        $blockedSlots[] = $timeSlot;
                    }
                    $current->addMinutes(30);
                }
            }
        }
        
        return $blockedSlots;
    }

    /**
     * Parse time string to Carbon instance
     * 
     * @param string $time Time string (e.g., "9:00 AM")
     * @return Carbon
     */
    private function parseTime(string $time): Carbon
    {
        return Carbon::createFromFormat('g:i A', $time);
    }
}