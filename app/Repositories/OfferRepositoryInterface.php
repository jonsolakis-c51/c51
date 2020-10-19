<?php

namespace App\Repositories;


interface OfferRepositoryInterface
{
    public function add($offerId, $name, $imageUrl, $cashBack);

    public function getAll($sortBy);
}
