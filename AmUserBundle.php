<?php

namespace Am\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AmUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
