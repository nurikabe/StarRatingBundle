<?php

namespace Nurikabe\StarRatingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;

class StarRatingType extends AbstractType
{
    public function getName()
    {
        return 'star_rating';
    }

    public function getParent()
    {
        return 'choice';
    }
}
