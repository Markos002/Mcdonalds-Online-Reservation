<?php 

namespace App\Repository\Contracts;

interface IGuestRepository
{

    public function create(array $data);
    public function find(int $id);
    public function update(int $id, array $data);
    public function delete($id);

    public function getPendingPayments();
    public function getOnGoingParties();
    public function getRecords();

    public function findGuestReservationForEdit($guestId);

    public function getMyReservationHistory($id);

    public function getMyReservationDetails($guest_id);

    public function findByGuestId($guest_id);

}