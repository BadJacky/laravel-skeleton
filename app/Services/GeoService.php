<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use InvalidArgumentException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Throwable;

class GeoService
{
    private string $uri = 'https://geoapi.heartrails.com/api';

    private array $methods = ['getAreas', 'getPrefectures', 'getCities', 'getTowns', 'getStations', 'searchByPostal', 'searchByGeoLocation', 'suggest'];

    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function fetch($query, $format = 'json')
    {
        $uri = $this->uri.'/'.$format;

        if (! in_array($query['method'], $this->methods)) {
            throw new InvalidArgumentException(trans('messages.failed.method_not_match', [
                'method' => $query['method'],
            ]));
        }

        if (! in_array(strtolower($format), ['json', 'xml'])) {
            throw new InvalidArgumentException(trans('messages.failed.response_format_not_match', compact('format')));
        }

        try {
            $response = Http::get($uri, array_filter($query));

            return $format === 'json' ? $response->json() : response($response->body())->header('Content-Type', 'text/xml');
        } catch (Throwable $th) {
            throw new HttpException($th->getCode(), $th->getMessage());
        }
    }
}
