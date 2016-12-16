<?php

namespace Grc\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GrcUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
