=== Plugin Name ===
Contributors: hgn
Donate link: http://googleblog.blogspot.com/2005/01/preventing-comment-spam.html
Tags: nofollow
Requires at least: 2.1
Tested up to: 2.6.2
Stable tag: 0.8.15

removes the nofollow-attribute in links

== Description ==

This plugin removes the nofollow attribute in links (e.g. comments, pingbacks).
We do not need an options page or values in the database, the plugin is simply doing the job to remove the nofollow-attribute.


== Installation ==

1. Upload `no-nofollow.php` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Lean back and enjoy.

== Frequently Asked Questions ==

= You are not using preg_replace()? =

Yes, I know. Regular expressions are slower than a simple string operation.

= What about foo bar? =

Where is no need for backlinks or other stupidity.


