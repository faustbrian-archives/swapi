<?php

/*
 * This file is part of SWAPI PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Swapi\Api;

use BrianFaust\Unified\AbstractApi;

class Planets extends AbstractApi
{
    public function all()
    {
        return $this->get('planets');
    }

    public function details($id)
    {
        return $this->get("planets/$id");
    }

    public function schema()
    {
        return $this->get('planets/schema');
    }
}
