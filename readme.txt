=== Plugin Name ===
Contributors: iamfriendly
Tags: sliders, widget, shortcode, responsive, responsiveslides
Requires at least: 3.0
Tested up to: 3.4.1
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A widget and shortcode to easily implement the amazing ResponsiveSlides jQuery Slider. All of the hard work by @viljamis

== Description ==

@viljamis made an amazing jQuery slideshow plugin called ResponsiveSlides. you can find it at http://responsive-slides.viljamis.com/.
From a responsive-web-design point of view it's a fantastic, light-weight, easy-to-implement image slider (well, it's a fader not technically a slider) that "just works". I've turned up and just WordPress-ified it a bit.

In future versions the shortcode will enable you to use the gallery shortcode

== Installation ==

1. Upload the plugin to your plugins directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Enjoy!

== Frequently Asked Questions ==

= How do I use the shortcode? =

The shortcode is [ responsiveslides ] and it has quite a few parameters (the same one as the jQuery plugin.). You will need to have already uploaded your images (into your media library for example) and you'll need to know the URL of those images (this will change in the future, I promise). So, as an example:

[ responsiveslides image_1="http://lorempixel.com/600/300" image_2="http://lorempixel.com/600/300/sports" auto="true" pager="true" / ]

(without the spaces)

You can have up to 10 images at the moment. The other params the shortcdoe takes (and their defaults) are:

'auto' => 'false',
'speed'	=> '700',
'timeout' => '4000',
'pager' => 'false',
'nav' => 'true',
'random' => 'false',
'pause' => 'false',
'prevText' => 'Previous',
'nextText' => 'Next',
'maxwidth' => '',
'namespace' => 'shortcode_rslides'

= What about the widget? =

Drag the widget into a sidebar and select the posts category you wish to use and the number of images to show. It uses the 'featured image' of your post.

== Changelog ==

= 0.1 =
First Public Version