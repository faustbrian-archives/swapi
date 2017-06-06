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

class Vehicles extends AbstractApi
{
    public function all()
    {
        return $this->get('vehicles');
    }

    public function details($id)
    {
        return $this->get("vehicles/$id");
    }

    public function schema()
    {
        return $this->get('vehicles/schema');
    }
}
