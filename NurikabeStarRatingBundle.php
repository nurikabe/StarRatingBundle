<?php

namespace Nurikabe\StarRatingBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Nurikabe\StarRatingBundle\DependencyInjection\Compiler\TwigFormPass;

class NurikabeStarRatingBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new TwigFormPass());
    }
}
