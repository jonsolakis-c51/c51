<?php

namespace Tests\Integration;

use App\Models\Offer;
use Tests\TestCase;

/**
 * Class GetOffersTest
 * @package Tests\Integration
 */
class GetOffersTest extends TestCase
{

    /** @test */
    public function get_offers_success()
    {
        $this->get('/');

        $totalOffers = Offer::query()->count();

        $this->assertResponseOk();
        $this->assertCount($totalOffers, $this->response['offers']);

    }
}
