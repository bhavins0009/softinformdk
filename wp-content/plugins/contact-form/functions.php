<?php
function get_contact_entry(){
    global $wpdb;

    $sql = "SELECT * FROM {$wpdb->prefix}contacts";
    $results = $wpdb->get_results( $sql, 'ARRAY_A' );
    return $results;
}