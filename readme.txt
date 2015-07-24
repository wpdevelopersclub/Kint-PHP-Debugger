=== Kint PHP Debugger ===
Contributors: WPDevelopersClub, hellofromTonya
Donate link: http://wpdevelopersclub.com
Tags: debugger, php, developer tool
Requires at least: 3.5
Tested up to: 4.2.3
Stable tag: 1.0.2
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

[Kint](http://raveren.github.io/kint/) is a a modern and powerful PHP debugging helper, which requires zero-setup and replaces var_dump(), print_r() and debug_backtrace().  This plugin is a wrapper for Kint.

== Description ==

This WordPress plugin is a wrapper for the Kint PHP Debugger utility.  Now instead of using var_dump() or print_r(), you simply use d() with zero, nadda, no formatting required.

Use this tool when you are debugging your website, in place of **[var_dump()](http://php.net/manual/en/function.var-dump.php)**, **[print_r()](http://php.net/manual/en/function.print-r.php)** and **[debug_backtrace()](http://php.net/manual/en/function.debug-backtrace.php)**.

Some handy tools just for the PHP Developer:

Use:
```d( $var );```
to replace the pre/var_dump
```
echo'<pre>';
var_dump( $var );
echo'</p>';
```


Use:
```ddd( $var );```
to replace the pre/var_dump
```
echo'<pre>';
var_dump( $var );
echo'</p>';
die();
```
See the [screenshots tab](http://wordpress.org/extend/plugins/kint-php-debugger/screenshots/) for more details.

== Installation ==

= From your WordPress dashboard =

1. Visit 'Plugins > Add New'
2. Search for 'Kint PHP Debugger'
3. Activate Kint PHP Debugger from your Plugins page.

= Once Activated =

Whenever you want to dump out the data within a variable, simply use d( $var ) to replace when you do pre + var_dump().

To dump and die, you use ddd( $var ).

== Frequently Asked Questions ==

= How do I use this utility? =

When you are testing your code, you use d( $var ) in place of var_dump( $var ) and print_r( $var ).  No need to wrap it in pre's either.

= What does it render in the browser? =

Kint provides a handy UI that wraps up the data within the variable.  Click to open it up and see the data.

See the [screenshot 1](http://wordpress.org/extend/plugins/kint-php-debugger/screenshots/) for an example.

= What else does Kint provide to help me debug? =

As you can see the [screenshot 1](http://wordpress.org/extend/plugins/kint-php-debugger/screenshots/), besides the handy UI, it also provides you with a full call stack.  Click on the text below the UI to expand it out.

= Can I run this on a live site? =

I wouldn't unless you are testing.  This tool is for debug only.  Once you push the site live, deactivate and delete this plugin.

= What should I do when the site goes live? =

Deactivate and delete this plugin.

== Screenshots ==

1. An example of what gets rendered in the browser when using d( $var ).

== ChangeLog ==

= Version 1.0.0 =

* First release

== Upgrade Notice ==
