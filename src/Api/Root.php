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

class Root extends AbstractApi
{
    public function details()
    {
        return $this->get(null);
    }
}
