<?php

namespace GV\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class GVUserBundle extends Bundle
{
    public function getParent() {
        return 'FOSUserBundle';
    }
}
