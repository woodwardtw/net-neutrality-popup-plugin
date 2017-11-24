<?php
/**
 * Plugin Name: Net Neutrality
 * Plugin URI: https://github.com/woodwardtw/
 * Description: net neutrality  

 * Version: 1.0
 * Author: Tom Woodward
 * Author URI: http://bionicteaching.com
 * License: GPL2
 */
 
 /*   2016 Tom  (email : bionicteaching@gmail.com)
 
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.
 
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
 
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */
 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function net_neutral_enqueue_scripts() {
    wp_enqueue_script( 'net_neutral', '//widget.battleforthenet.com/widget.js', '1.0',true );

}
add_action( 'wp_enqueue_scripts', 'net_neutral_enqueue_scripts' );