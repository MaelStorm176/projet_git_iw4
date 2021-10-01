<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Movies;
use App\Transformers\MoviesToDto;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class TimeController extends Controller
{
    private $movieRepository;

    public function __construct()
    {
        $date = new DateTime();
        $this->date = $date->getTimestamp();
    }

    public function __invoke()
    {
        /*var_dump($this->movieRepository->all());
        die();*/
        return new JsonResponse([
            'time' => $this->date,
        ]);
    }
}
