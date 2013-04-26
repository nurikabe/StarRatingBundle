<?php

namespace CCC\StarRatingBundle\Tests;

use Symfony\Component\Form\AbstractType;
use CCC\StarRatingBundle\Form\StarRatingType;

class StarRatingTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testAncestry()
    {
        $type = new StarRatingType();
	$this->assertEquals('choice', $type->getParent());
    }
}
