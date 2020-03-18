<?php
/*
Plugin Name: Your Site's Functionality Plugin
Description: All of the important functionality of your site belongs in this.
Version: 0.1
License: GPL
Author: Your Name
Author URI: yoururl
*/

add_action('admin_init','wpse9876_download_csv');
function wpse9876_download_csv(){

    if ( isset($_POST['download_csv']) ) {

        $text = wp_list_pages("echo=0&title_li=");
        $html = preg_replace('/class=".*?"/', '', $text);
        $html = strip_tags($html, '<ul>, <li>, <a>');
        $html = '<ul>'.$html.'</ul>';

        function get_depth(DOMElement $element)
        {
            $depth = -1;
            while (
                $element->parentNode->tagName === 'li' ||
                $element->parentNode->tagName === 'ul'
            ) {
                if ($element->parentNode->tagName === 'ul') {
                    $depth++;
                }
                $element = $element->parentNode;
            }
            return $depth;
        }

        $dom = new DOMDocument;
        $dom->preserveWhiteSpace = false;
        $dom->loadHTML($html);
        $fp = fopen("php://output", "w");

        $file = 'test_export';
        $filename = $file."_".date("Y-m-d_H-i",time());
        header("Content-type: text/csv");
        header("Content-disposition: csv" . date("Y-m-d") . ".csv");
        header( "Content-disposition: filename=".$filename.".csv");
        header("Pragma: no-cache");
        header("Expires: 0");
        $results = get_contact_entry();
        $data_row=array();
        foreach ($results as $result){
            $data_row = array(
                $result['name']
            );
        }

        exit;
    }
}
