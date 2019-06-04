<?php

declare(strict_types=1);

/*
 * This file is part of SWAPI PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Swapi;

use Plients\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \Plients\Swapi\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('http://swapi.co/api/');

        $class = "Plients\\Swapi\\API\\{$name}";

        return new $class($client);
    }
}
