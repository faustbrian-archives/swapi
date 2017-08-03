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

namespace BrianFaust\Swapi\API;

use BrianFaust\Http\HttpResponse;

class People extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function all(): HttpResponse
    {
        return $this->client->get('people');
    }

    /**
     * @param int $id
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("people/{$id}");
    }

    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function schema(): HttpResponse
    {
        return $this->client->get('people/schema');
    }
}
