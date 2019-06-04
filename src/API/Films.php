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

namespace Plients\Swapi\API;

use Plients\Http\HttpResponse;

class Films extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function all(): HttpResponse
    {
        return $this->client->get('films');
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("films/{$id}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function schema(): HttpResponse
    {
        return $this->client->get('films/schema');
    }
}
