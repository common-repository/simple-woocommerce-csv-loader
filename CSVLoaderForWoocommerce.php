<?php
/*
Plugin Name: Ultimate WooCommerce CSV Importer
Description: The best CSV importer plugin for WooCommerce.
Version: 2.0
Author: Ataul Ghani
Author URI: https://www.usefulblogging.com/
Requires at least: 5.5
Tested Up to: 5.7
Stable Tag: trunk
License: GPL v2
parent: woocommerce
*/

/**
 * This file is part of woocommerce-csvloader.
 * 
 * Simple woocommerce CSV Loader is Pro software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Pro Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * simple woocommerce-csvloader is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with simple-wocommerce-csvloader.  If not, see <http://www.gnu.org/licenses/>.
 */

class CSVLoaderForWoocommerce {
    function __construct() {
        add_action( 'init', array( $this, 'init' ) );
        if ( is_admin() ) {
            add_action( 'admin_menu', array( $this, 'admin_menu' ), 99 );
        }
    }

    function init() {
        if ( function_exists( 'load_plugin_textdomain' ) )
            load_plugin_textdomain( 'tcp_csvl', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
    }

    function admin_menu() {
        
if (function_exists('add_menu_page'))
{
add_menu_page('CSV Loader', 'CSV Loader', 'administrator', dirname( __FILE__ ) . '/admin/CSVLoader.php');
}
    }
}

new CSVLoaderForWoocommerce();
?>
