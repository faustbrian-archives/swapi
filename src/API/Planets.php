<?php

/*
 * This file is part of SWAPI PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Swapi\API;

use BrianFaust\Http\HttpResponse;

class Planets extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(): HttpResponse
    {
        return $this->client->get('planets');
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("planets/{$id}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function schema(): HttpResponse
    {
        return $this->client->get('planets/schema');
    }
}
