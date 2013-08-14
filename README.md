# [Bully Starter Theme](http://www.bullycreative.co/)

Bully Starter Theme is a starting WordPress theme for developers based on the [Roots theme (v6.4.0)](http://www.rootstheme.com/), HTML5 Boilerplate and [Bootstrap v2.3.2](http://getbootstrap.com/2.3.2/).

* Roots Theme: [http://www.rootstheme.com/](http://www.rootstheme.com/) - [v6.4.0](https://github.com/retlehs/roots/tree/941c92126c57de6c53822ab0ed9980578b934e61)
* Twitter Bootstrap: [http://getbootstrap.com/](http://getbootstrap.com/) - [v2.3.2](http://getbootstrap.com/2.3.2/)

## Installation

* Download and install as a theme to your Wordpress Environment.

## Configuration

Edit `lib/config.php` to enable or disable support for various theme functions
and to define constants that are used throughout the theme.

Edit `lib/init.php` to setup custom navigation menus and post thumbnail sizes.

LESS additions will need to be made to the [app.less](assets/less/app.less) file.

JS additions will need to be made to the [main.js](assets/js/main.js) file.

New vendor JS files can be added to the /assets/js/vendor/ folder and added to the [scripts.php](lib/scripts.php).

Custom Functions can be added to the [custom.php](lib/custom.php).

## Mobile Detection

In addition to media queries, use of [Mobile Detect](https://github.com/serbanghita/Mobile-Detect) is recommended.
Just download the latest Mobile_Detect.php to the /lib/ folder and add the following lines to the top of the [functions.php](functions.php) file:

```php
require_once locate_template('/lib/Mobile_Detect.php');   // Mobile Detection

$detect = new Mobile_Detect();	// Init device detection
```

Example usage:

```php
global $detect;

if($detect->isMobile() { [...] }
```

## Documentation

For the Roots Theme Documentation take a look at the [documentation table of contents](roots_doc/TOC.md).

## Features

* [LESS.js](http://lesscss.org/) - v1.4.1
* [Holder.js](http://imsky.github.io/holder/)
* [Retina.js](http://retinajs.com/)
* HTML5 Boilerplate’s markup
* Bootstrap from Twitter - v2.3.2
* [Theme wrapper](roots_doc/wrapper.md)
* Root relative URLs
* Clean URLs (no more `/wp-content/`)
* All static theme assets are rewritten to the website root (`/assets/css/`,
`/assets/img/`, and `/assets/js/`)
* Cleaner HTML output of navigation menus
* Cleaner output of `wp_head` and enqueued scripts/styles
* Posts use the [hNews](http://microformats.org/wiki/hnews) microformat
* [Multilingual ready](http://www.rootstheme.com/wpml/) (Brazilian Portuguese,
Bulgarian, Catalan, Danish, Dutch, English, Finnish, French, German, Hungarian,
Indonesian, Italian, Korean, Macedonian, Norwegian, Polish, Russian, Simplified
Chinese, Spanish, Swedish, Traditional Chinese, Turkish, Vietnamese)

## Moving from Development to Production Notes

Bully Starter Theme has been initialized to use less.js for quick development. 
Before site launch make sure of the following:

* Compile app.less file to app.css, and place into the /assets/css/ folder.
* Uncomment app.css line in the [scripts.php](lib/scripts.php) file.
* Comment development code in [scripts.php](lib/scripts.php) file, e.g. the holder.js lines.
* Remove LESS.js entries in [head.php](templates/head.php).
