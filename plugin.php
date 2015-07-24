<?php namespace Kint_PHP_Debugger;

/**
 * Kint PHP Debugger - a modern and powerful PHP debugging helper
 *
 * @package         Kint_PHP_Debugger
 * @author          WPDevelopersClub and hellofromTonya
 * @license         dual license GPL-2.0+ & MIT (Kint is licensed MIT)
 * @link            http://wpdevelopersclub.com/
 *
 * @wordpress-plugin
 * Plugin Name:     Kint PHP Debugger
 * Plugin URI:      http://wpdevelopersclub.com/
 * Description:     Kint is a a modern and powerful PHP debugging helper, which requires zero-setup and replaces var_dump(), print_r() and debug_backtrace().  This plugin is a wrapper for Kint.
 * Version:         1.0.0
 * Author:          WP Developers Club and Tonya
 * Author URI:      http://wpdevelopersclub.com
 * Text Domain:     wpdevsclub
 * Requires WP:     3.5
 * Requires PHP:    5.3
 */

require_once( 'src/raveren/kint/Kint.class.php' );