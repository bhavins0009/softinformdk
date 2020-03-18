<?php
/*
Plugin Name: Contact Form
*/

function create_plugin_database_table()
{
    global $table_prefix, $wpdb;

    $tblname = 'contacts';
    $wp_track_table = $table_prefix . "$tblname";

    #Check to see if the table exists already, if not, then create it

    if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $wp_track_table)
    {

        $sql = "CREATE TABLE `". $wp_track_table . "` ( ";
        $sql .= "  `id`  int(11)   NOT NULL auto_increment, ";
        $sql .= "  `name`  varchar(200)   NOT NULL, ";
        $sql .= "  `address`  text   NOT NULL, ";
        $sql .= "  `city`  varchar(200)   NOT NULL, ";
        $sql .= "  PRIMARY KEY `order_id` (`id`) ";
        $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";

        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }
}

register_activation_hook( __FILE__, 'create_plugin_database_table' );

if( ! class_exists( 'WP_List_Table' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/class-wp-list-table.php' );
}
require_once( ABSPATH . 'wp-content/plugins/contact-form/functions.php' );
if( ! class_exists( 'Contact_Table' ) ) {
    require_once( ABSPATH . 'wp-content/plugins/contact-form/contact-table.php' );
}
if( ! class_exists( 'export_table_to_csv') ) {
    require_once( ABSPATH . 'wp-content/plugins/contact-form/export.php' );
}
if( ! class_exists( 'SP_Plugin' ) ) {
    require_once( ABSPATH . 'wp-content/plugins/contact-form/sp-plugin.php' );
}


add_action( 'plugins_loaded', function () {
    SP_Plugin::get_instance();
} );