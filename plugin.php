<?php
/*
 * Plugin Name: TEST PLUGIN 3
 * Plugin URI: http://example.com/
 * Description: Used by millions, Test Plugins are an important part of the world
 * Version: 9.0
 * Author: Dion Hulse
 * Author URI: https://dd32.id.au/
 * License: GPLv2 or later
 * Text Domain: test-plugin-3
 * Requires At Least: 5.2
 * Requires PHP: 5.6
 */

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

add_action( 'init', function() { echo '<h1>' . __( 'HELLO WORLD', 'test-plugin-3' ) . '</h1>'; } );
add_action( 'admin_init', function() { echo '<h2>Hello Admin!</h1>'; } );

// Testing Strings.

__( 'String', 'test-plugin-3' );
__( '
String starting on new line', 'test-plugin-3' );
__( 'String ending on new line
', 'test-plugin-3' );
__( '
String with new line before and after
', 'test-plugin-3' );
__( 'String with %s placeholder', 'test-plugin-3' );
__( '<em>String with tags</em>', 'test-plugin-3' );

_n( "\nString starting on new line", "\nStrings starting on new lines", 2, 'test-plugin-3' );

__( '<a href="%1$s"> Support me at %2$s</a>', 'test-plugin-3' );

__( 'Check out https://wordpress.org/plugins/test-plugin-3/ for more information', 'test-plugin-3' );
__( 'Check out <a href="https://wordpress.org/plugins/test-plugin-3/">Test Plugin 3</a> for more information', 'test-plugin-3' );
__( 'HTTP Check out http://wordpress.org/plugins/test-plugin-3/ for more information', 'test-plugin-3' );
__( 'HTTP Check out <a href="http://wordpress.org/plugins/test-plugin-3/">Test Plugin 3</a> for more information', 'test-plugin-3' );

__( ' String with a space at the start', 'test-plugin-3' );
__( "\t String with whitespace at the start and end. \t", 'test-plugin-3' );
__( "\t String with whitespace at the start and end.\nWith a new line in between.\t ", 'test-plugin-3' );
