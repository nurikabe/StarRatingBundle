<?php

namespace Nurikabe\StarRatingBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Auto add the Twig form template to the list of resources
 */
class TwigFormPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasParameter('twig.form.resources')) {
            return;
        }

        $container->setParameter('twig.form.resources', array_merge(
            array('NurikabeStarRatingBundle:Form:fields.html.twig'),
            $container->getParameter('twig.form.resources')
        ));
    }
}
