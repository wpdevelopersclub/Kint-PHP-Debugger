=== Kint PHP Debugger ===
Contributors: WPDevelopersClub, hellofromTonya
Donate link: http://wpdevelopersclub.com
Tags: debugger, php, developer, tool, var_dump, print_r, backtrace, trace, debug_backtrace
Requires at least: 3.5
Tested up to: 4.2.3
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Kint is a modern and powerful PHP debugging helper, which requires zero-setup and replaces var_dump(), print_r() and debug_backtrace().

== Description ==

This WordPress plugin is a wrapper for the [Kint](http://raveren.github.io/kint/) PHP Debugger utility.  Now instead of using var_dump() or print_r(), you simply use d() with zero, nadda, no formatting required.

Use this tool when you are debugging your website, in place of **[var_dump()](http://php.net/manual/en/function.var-dump.php)**, **[print_r()](http://php.net/manual/en/function.print-r.php)** and **[debug_backtrace()](http://php.net/manual/en/function.debug-backtrace.php)**.

= Handy Tools =

Some handy tools just for the PHP Developer:

* `d( $var );` to render a collapsible UI container which displays your variable data in "the most informative way"
* `ddd( $var );` same as d() except that it also executes `die()` to halt execution.
See the [screenshot 1](http://wordpress.org/extend/plugins/kint-php-debugger/screenshots/) for more details.

Here are some variations of d() to give you the display you want:

* '~d( $var );' outputs in plain text format.
* '+d( $var );' disregards depth level limits and outputs everything
* '!d( $var );' shows expanded rich output
* '-d( $var );' attempts to ob_clean() the previous output (dump something inside of HTML)

= Profiler =

Kint even includes a naïve profiler, which can help you analyze which blocks of code take longer than others:
`Kint::dump( microtime() ); // just pass microtime()
sleep( 1 );
Kint::dump( microtime(), 'after sleep(1)' );
sleep( 2 );
ddd( microtime(), 'final call, after sleep(2)' );`

See [screenshot 2](http://wordpress.org/extend/plugins/kint-php-debugger/screenshots/) for what is rendered out in your browser.

== Installation ==

= From your WordPress dashboard =

1. Visit 'Plugins > Add New'
2. Search for 'Kint PHP Debugger'
3. Activate Kint PHP Debugger from your Plugins page.

= Once Activated =

Whenever you want to dump out the data within a variable, simply use `d( $var )` to replace when you do pre + var_dump().

To dump and die, you use `ddd( $var );`.

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

1. An example of what gets rendered in the browser when using 'd( $var )'.
2. Profiler example from Kint.

== ChangeLog ==

= Version 1.0.0 =

* First release

== Upgrade Notice ==
