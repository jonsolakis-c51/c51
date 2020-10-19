<?php

namespace App\Repositories;

use App\Models\Offer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class OfferRepository
 * @package App\Repositories
 */
class OfferRepository implements OfferRepositoryInterface
{
    /** @var Offer  */
    private $offer;

    /**
     * OfferRepository constructor.
     * @param Offer $offer
     */
    public function __construct(Offer $offer)
    {
        $this->offer = $offer;
    }

    /**
     * @param null $orderBy
     * @return Builder[]|Collection
     */
    public function getAll($orderBy = null)
    {
        $query = $this->offer->newQuery();

        if ($orderBy) {
            $query->orderBy($orderBy);
        }

        return $query->get();
    }

    /**
     * @param $offerId
     * @param $name
     * @param $imageUrl
     * @param $cashBack
     */
    public function add($offerId, $name, $imageUrl, $cashBack)
    {
        $offer = new $this->offer([
            'offer_id' => $offerId,
            'name' => $name,
            'image_url' => $imageUrl,
            'cash_back' => $cashBack
        ]);

        $offer->save();
    }

}
