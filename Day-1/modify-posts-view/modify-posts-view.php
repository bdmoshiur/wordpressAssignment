<?php

/**
 * Plugin Name:       Modify Post view
 * Plugin URI:        https://post-title-capitalize.com
 * Description:       Handle the Modify Post view with this plugin.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Moshiur Rahman
 * Author URI:        https://moshiurrahman.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       modify-post-view
 * Domain Path:       /languages
 */

 /**
 * Exit if accessed directly
 */ 

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}



/**
 * The main class Modify Posts View plugin
 */
class Modify_Posts_View {

    function __construct()
    {
        add_filter( 'modify_count_view', [ $this, 'modify_posts_view'] );
    }

    /**
     * The main function Modify Posts View
     *
     * @return void
     */
    public function modify_posts_view( $view )
    {
        return "<em>" . $view . "</em>";
        
    }

}

/**
 * The main class instance
 *
 * @return object
 */
function modify_post(){
    return new Modify_Posts_View();
}

/**
 * object calling function
 */
modify_post();
