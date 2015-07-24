#(WordPress Plugin) Wrapper for Kint PHP Debugger - a modern and powerful PHP debugging helper

[Kint](http://raveren.github.io/kint/) is a a modern and powerful PHP debugging helper, which requires zero-setup and replaces var_dump(), print_r() and debug_backtrace().  This plugin is a wrapper for Kint.
	 	
__Contributors:__ [Tonya](https://github.com/hellofromtonya)  
__Requires:__ WordPress 3.5  
__Tested up to:__ WordPress 4.2.3

### Features

![Screenshot](https://wpdevelopersclub.com/images/kint/screenshot1.png)

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

        
See [Kint - Handy Tools](http://raveren.github.io/kint/#intro) for details.        