CCCStarRatingBundle
===================

Form type and Twig filter for FyneWorks' super fine jQuery [Star Rating Plugin](https://github.com/Fyneworks-jQuery/star-rating).

Installation
------------

### Add the package to your dependencies

``` js
{
    "require": {
        "ccc/star-rating-bundle": "dev-master"
        ...
    }
}
```

### Register the bundle in your kernel

``` php
public function registerBundles()
{
    $bundles = array(
        // ...
        new CCC\StarRatingBundle\StarRatingBundle(),
        // ...
    );
```

### Update your packages

``` bash
$ php composer.phar update ccc/starrating-bundle
```

Usage
-----

This bundle contains a new FormType `star_rating`:

    $builder->add('rating', 'star_rating', array(
        'choices' => array(1 => 'ichi', 2  => 'ni', 3 => 'san', 4=> 'shi', 5 => 'go'),
        'expanded' => true,  // radio or checkbox...
        'multiple' => false  // ...but not checkbox
    ));

`star_rating` extends `choice` and will render expanded `choice` fields as a Star Rating field.

A Twig filter is also available that will render a static Star Rating widget given a numeric input:

    {{ entity.rating|star_rating }}

