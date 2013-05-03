<?php

namespace Alterway\Bundle\HalRestBundle\ApiResource;

use Nocarrier\Hal;

class ProxyResource extends Hal
{

    public function setData(array $array)
    {
        $this->data = $array;
        return $this;
    }

    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

}