<?php

namespace CCC\StarRatingBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use CCC\StarRatingBundle\DependencyInjection\Compiler\TwigFormPass;

class CCCStarRatingBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new TwigFormPass());
    }
}
