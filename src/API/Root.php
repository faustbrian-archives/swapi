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

class Root extends AbstractAPI
{
    /**
     * @return \BrianFaust\Http\HttpResponse
     */
    public function details(): HttpResponse
    {
        return $this->client->get('/');
    }
}
