<?php

namespace CCC\StarRatingBundle\Form;

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
