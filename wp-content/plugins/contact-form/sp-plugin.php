<?php
class SP_Plugin
{

    // class instance
    static $instance;
    // customer WP_List_Table object
    public $contacts_obj;

    // class constructor
    public function __construct()
    {
        add_filter('set-screen-option', [__CLASS__, 'set_screen'], 10, 3);
        add_action('admin_menu', [$this, 'plugin_menu']);
    }

    public static function set_screen($status, $option, $value)
    {
        return $value;
    }

    public function plugin_menu()
    {

        $hook = add_menu_page(
            'Contact Entry',
            'SP Contact List',
            'manage_options',
            'contact_list_table_class',
            [$this, 'plugin_settings_page']
        );
        add_submenu_page('contact_list_table_class','Export','Export','manage_options','export',[$this,'my_page_export_menu_options']);
        add_action("load-$hook", [$this, 'screen_option']);

    }

    public function my_page_export_menu_options() {

        echo '<div id="treecontrol" style="margin:20px 0;position:relative;">
        <form method="post" id="download_form" action=""><input type="submit" name="download_csv" class="button-primary" value="Export" /></form>
    </div>';


    }
    /**
     * Screen options
     */
    public function screen_option()
    {

        $option = 'per_page';
        $args = [
            'label' => 'Contacts',
            'default' => 5,
            'option' => 'contacts_per_page'
        ];

        add_screen_option($option, $args);

        $this->contacts_obj = new Contact_Table();
    }

    /**
     * Plugin settings page
     */
    public function plugin_settings_page()
    {
        ?>
        <div class="wrap">
            <h2>Contact Entry</h2>

            <div id="poststuff">
                <div id="post-body" class="metabox-holder columns-2">
                    <div id="post-body-content">
                        <div class="meta-box-sortables ui-sortable">
                            <form method="post">
                                <?php
                                $this->contacts_obj->prepare_items();
                                $this->contacts_obj->display(); ?>
                            </form>
                        </div>
                    </div>
                </div>
                <br class="clear">
            </div>
        </div>
        <?php
    }

    public static function get_instance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}