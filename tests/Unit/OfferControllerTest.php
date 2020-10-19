<?php

namespace Tests\Unit;

use App\Http\Controllers\OfferController;
use App\Models\Offer;
use App\Repositories\OfferRepository;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Mockery;
use tests\TestCase;

/**
 * Class OfferControllerTest
 * @package Tests\Unit
 */
class OfferControllerTest extends TestCase
{

    /** @test */
    public function test_invoke_method_success()
    {
        $offer = Offer::find(1);

        $mock = Mockery::mock(OfferRepository::class)
            ->shouldReceive('getAll')
            ->andReturns($offer);

        $offerController = new OfferController($mock->getMock());

        $view = $offerController(new Request());

        $this->assertInstanceOf(View::class, $view);

    }
}
