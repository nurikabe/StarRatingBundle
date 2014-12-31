<?php

namespace Nurikabe\StarRatingBundle\Tests;

use Nurikabe\StarRatingBundle\Form\Type\StarRatingType;

class StarRatingTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testAncestry()
    {
        $type = new StarRatingType();
        $this->assertEquals('choice', $type->getParent());
    }
}
