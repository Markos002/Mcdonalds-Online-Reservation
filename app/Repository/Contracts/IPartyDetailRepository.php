<?php

namespace App\Repository\Contracts;

interface IPartyDetailRepository
{

    public function create(array $data);
    public function find($id);

    public function findByGuestId($id);
    public function update(int $id, array $data);
    public function delete(int $id);

    public function getAvailablTimeSlot(string $date);

    public function getReservationStatusOverView();
    public function getSalesIncomeByYear($year);
    public function getMonthlyReservationTrends($year);

    public function findGuestReservationIfNotPending($guestId);

    public function getReservationRecordHistory();
}