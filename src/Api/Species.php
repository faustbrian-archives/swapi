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
use BrianFaust\Swapi\Models\Species;

class Species extends AbstractApi
{
    public function all()
    {
        return $this->get('species');
    }

    public function details($id)
    {
        return $this->get("species/$id");
    }

    public function schema()
    {
        return $this->get('species/schema');
    }
}
