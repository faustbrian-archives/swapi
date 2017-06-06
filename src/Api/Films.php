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

class Films extends AbstractApi
{
    public function all()
    {
        $response = $this->get('films');

        return $this->getMapper()->raw($response['results']);
    }

    public function details($id)
    {
        return $this->get("films/$id");
    }

    public function schema()
    {
        return $this->get('films/schema');
    }
}
