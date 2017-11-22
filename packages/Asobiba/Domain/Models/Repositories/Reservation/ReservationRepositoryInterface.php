<?php

namespace Asobiba\Domain\Models\Repositories\Reservation;

use Asobiba\Domain\Models\Reservation\Reservation;
use Asobiba\Domain\Models\Reservation\ReservationId;
use Asobiba\Domain\Models\User\CustomerId;
use Illuminate\Http\Request;

interface ReservationRepositoryInterface
{
    public function nextIdentity();

    public function new(Request $req);

    public function persist(Reservation $reservation);
}
