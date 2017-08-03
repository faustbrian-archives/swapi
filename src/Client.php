<?php

declare(strict_types=1);

/*
 * This file is part of SWAPI PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Swapi;

use BrianFaust\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\Swapi\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('http://swapi.co/api/');

        $class = "BrianFaust\\Swapi\\API\\{$name}";

        return new $class($client);
    }
}
