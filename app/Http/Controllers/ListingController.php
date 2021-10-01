<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Transformers\MoviesToDto;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ListingController extends Controller
{
    private $movieRepository;

    public function __construct(Movies $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    public function __invoke()
    {
        /*var_dump($this->movieRepository->all());
        die();*/
        return new JsonResponse([
            'status' => 'success',
            'collection' => $this->movieRepository->all()->map([MoviesToDto::class, 'provideTransformer']),
        ]);
    }
}
