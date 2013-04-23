CCCStarRatingBundle
===================

Form type and Twig filter for FyneWorks' super fine jQuery [Star Rating Plugin](https://github.com/Fyneworks-jQuery/star-rating).

Installation
------------

### Add the package to your dependencies

``` json
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

### Install the Star Rating Plugin

There are many ways to skin this cat, though if you'd like to manage the Star Rating Plugin via Composer this can be
done by adding a new external repository to `composer.json`:

``` json
"repositories": [
    {
        "type": "package",
        "package": {
            "name": "fyneworks/star-rating",
            "version": "dev-master",
            "source": {
                "type": "git",
                "url": "https://github.com/Fyneworks-jQuery/star-rating.git",
                "reference": "master"
            }
        }
    },
    ...
}
```

### Update your packages

``` bash
$ php composer.phar update ccc/star-rating-bundle
```

Usage
-----

Load the Star Rating plugin in your layout.  For example, if you are using Assetic and you have installed Star Rating
via Composer as per above:

``` twig
{% stylesheets '%kernel.root_dir%/../vendor/fyneworks/star-rating/jquery.rating.css' %}
    <link rel="stylesheet" href="{{ asset_url }}" />
{% endstylesheets %}
{% javascripts '%kernel.root_dir%/../vendor/fyneworks/star-rating/jquery.rating.js' %}
    <script type="text/javascript" src="{{ asset_url }}"></script>
{% endjavascripts %}
```

Of course, remember to dump your assets if `use_controller` is off:

``` bash
$ app/console assetic:dump
```

This bundle contains a new FormType `star_rating` field type:

``` php
$builder->add('rating', 'star_rating', array(
    'choices' => array(1 => 'ichi', 2  => 'ni', 3 => 'san', 4=> 'shi', 5 => 'go'),
    'expanded' => true,  // radio or checkbox...
    'multiple' => false  // ...but not checkbox
));
```

`star_rating` extends `choice` and will render expanded `choice` fields as a Star Rating field.

Original `choice` field:

![before](Resources/public/before.png)

As a `star_rating` field:

![after](Resources/public/after.png)

A Twig filter is also available that will render a static Star Rating widget given a numeric input:

``` twig
{{ entity.rating|star_rating }}
```

