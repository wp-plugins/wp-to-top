===WP To Top===
Contributors: asvin balloo
Donate link: http://htmlblog.net
Tags: post, posts, scroll, top, jquery, wp to top, scroll to top, widget, icon, font awesome, icon, vertical scroll, smooth scroll, to top
Requires at least: 2
Tested up to: 4.1.1
Stable tag: 2.0

This plugin will add a "back to top/ scroll to top" icon automatically to your blog. 

== Description ==

This plugin will add a "Back to top" icon automatically to your blog. It features a smooth scrolling effect and customizable options such as the color, position and scroll duration, sprinkled with some cool CSS3 effect.

By [Asvin Balloo](http://htmlblog.net/).

Supported features:

* Smooth scrolling animation
* Customizable options via the admin panel
* Works on almost all browsers
* No need to add any markup to your theme

== Installation ==

1. Extract wptotop.zip in the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Go to **Settings** and then **WP To Top** to configure the plugin.

== Screenshots ==
1. Configuration page
2. WP To Top

== Frequently Asked Questions ==

= I have activated the plugin but nothing appears... =

Make sure you have the following code in your theme's footer.php :
`<?php wp_footer(); ?>`

If not, go to Design >> Theme Editor >> Select "footer.php" from right hand list >>  and paste `<?php wp_footer(); ?>` just before the '</body >' tag.


= I found a bug... =

Do it via my blog - http://htmlblog.net/ - enjoy!

== Changelog ==

= 2.0 =
 - Full reboot. Now uses jQuery and the Settings API
 - Follows WordPress PHP coding standards
 - New options added
 - Font Awesome used
 - Added CSS3 hover effect for the icon using [hover.css](http://ianlunn.github.io/Hover/)
 - [Scroll inspiration](http://codyhouse.co/gem/back-to-top/)

= 1.0 (5 Mar 2009) =
 - Initial Release