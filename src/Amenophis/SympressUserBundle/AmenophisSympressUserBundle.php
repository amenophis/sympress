<?php

namespace Amenophis\SympressUserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AmenophisSympressUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
