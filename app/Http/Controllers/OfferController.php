<?php

namespace App\Http\Controllers;

use App\Repositories\OfferRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Laravel\Lumen\Application;

/**
 * Class OfferController
 * @package App\Http\Controllers
 */
class OfferController extends Controller
{
    /** @var OfferRepositoryInterface */
    private $offerRepository;

    /**
     * OfferController constructor.
     * @param OfferRepositoryInterface $offerRepository
     */
    public function __construct(OfferRepositoryInterface $offerRepository)
    {
        $this->offerRepository = $offerRepository;
    }

    /**
     * @param Request $request
     * @return View|Application
     */
    public function __invoke(Request $request)
    {
        $orderBy = $request->input("order_by");

        return View('offers', [
            'offers' => $this->offerRepository->getAll($orderBy)
        ]);
    }
}
