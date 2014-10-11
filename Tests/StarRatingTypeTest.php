<?php

namespace CCC\StarRatingBundle\Tests;

use CCC\StarRatingBundle\Form\Type\StarRatingType;

class StarRatingTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testAncestry()
    {
        $type = new StarRatingType();
        $this->assertEquals('choice', $type->getParent());
    }
}
