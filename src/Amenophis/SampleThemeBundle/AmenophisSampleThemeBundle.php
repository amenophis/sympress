<?php

namespace Amenophis\SampleThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AmenophisSampleThemeBundle extends Bundle
{
    public function getParent()
    {
        return "AmenophisSympressThemeBundle";
    }
}
