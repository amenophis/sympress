<?php

namespace Amenophis\Sympress\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AmenophisSympressUserBundle extends Bundle
{
    public function getParent()
    {
        return "FOSUserBundle";
    }
}
