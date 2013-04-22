<?php

namespace CCC\StarRatingBundle\Extension;

class StarRatingTwigExtension extends \Twig_Extension
{
    public function getFilters() {
        $filters = array(
            'star_rating' => new \Twig_Filter_Method($this, 'starRatingFilter', array('is_safe'=>array('html'))),
        );
        return $filters;
    }

    public function getName()
    {
        return 'ccc_star_rating';
    }

    /**
     * Output read-only stars
     */
    public static function starRatingFilter($rating)
    {
        $starWidget = '';  // do not change this css
        for ($i = 1; $i <= $rating; $i++) {
            $starWidget .= '<div class="star-rating star-rating-hover star-rating-readonly"><a>*</a></div>';
        }
        return $starWidget;
    }
}