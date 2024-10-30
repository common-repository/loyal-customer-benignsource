<?php
/**
* Plugin Name: Loyal Customer BenignSource
* Plugin URI: http://www.benignsource.com/
* Version: 1.0
* Author: BenignSource
* Author URI: http://www.benignsource.com/
* Description: Create campaigns for your regular customers promotions and other.
* License: GPL2
* Tested up to: 5.9
*/

class LoyalCustomerBenignSourceOne {
	/**
	* Constructor
	*/
	public function __construct() {

		// Plugin Details
        $this->plugin               = new stdClass;
        $this->plugin->name         = 'loyal-customer-benignsource'; // Plugin Folder
        $this->plugin->displayName  = 'Loyal Customer BenignSource'; // Plugin Name
        $this->plugin->version      = '1.0';
        $this->plugin->folder       = plugin_dir_path( __FILE__ );
        $this->plugin->url          = plugin_dir_url( __FILE__ );

		// Hooks
		add_action('admin_init', array(&$this, 'registerSettings'));
        add_action('admin_menu', array(&$this, 'adminPanelsAndLoyalCustomer'));
        
	}
	
	/**
	* Register Settings
	*/
	function registerSettings() {
	    
		
		register_setting($this->plugin->name, 'lcbs_include_loyalcustomer', 'trim');
		register_setting($this->plugin->name, 'lcbs_include_orders', 'trim');
		register_setting($this->plugin->name, 'lcbs_include_message', 'trim');
		register_setting($this->plugin->name, 'lcbs_include_socialmessage', 'trim');
		register_setting($this->plugin->name, 'lcbs_include_facebook', 'trim');
		register_setting($this->plugin->name, 'lcbs_include_twitter', 'trim');
		register_setting($this->plugin->name, 'lcbs_include_google', 'trim');
		
	}
	
	/**
    * Register the plugin settings panel
    */
    function adminPanelsAndLoyalCustomer() {
    	add_submenu_page('options-general.php', $this->plugin->displayName, $this->plugin->displayName, 'manage_options', $this->plugin->name, array(&$this, 'adminPanelLoyalBs'));
	}
    
    /**
    * Output the Administration Panel
    * Save POSTed data from the Administration Panel into a WordPress option
    */
	
   function adminPanelLoyalBs() {
   if( current_user_can('administrator') ) {  
		// Save Settings
        if (isset( $_POST['submit'] ) && wp_verify_nonce( $_POST['submit'], 'benignsource-nonce' )) {
             	
	        	// Save
				
				update_option('lcbs_include_loyalcustomer', sanitize_text_field($_POST['lcbs_include_loyalcustomer']));
				update_option('lcbs_include_myaccount', sanitize_text_field($_POST['lcbs_include_myaccount']));
				update_option('lcbs_include_myshop', sanitize_text_field($_POST['lcbs_include_myshop']));
				update_option('lcbs_include_orders', sanitize_text_field($_POST['lcbs_include_orders']));
				update_option('lcbs_include_message', sanitize_text_field($_POST['lcbs_include_message']));
				update_option('lcbs_include_socialmessage', sanitize_text_field($_POST['lcbs_include_socialmessage']));
				update_option('lcbs_include_facebook', sanitize_text_field($_POST['lcbs_include_facebook']));
				update_option('lcbs_include_twitter', sanitize_text_field($_POST['lcbs_include_twitter']));
				update_option('lcbs_include_google', sanitize_text_field($_POST['lcbs_include_google']));
				$loyalcustomer_title = sanitize_text_field( $_POST['_lcbs_loyal_customer_title'] );
		        $loyalcustomer_coupon = sanitize_text_field( $_POST['_lcbs_loyal_customer_coupon'] );
		        $loyalcustomer_productid = sanitize_text_field( $_POST['_lcbs_loyal_customer_productid'] );
		       
		
			// save the data to the database
			$lcbs_loyal_customer[] = array( 'titleloyal' => $loyalcustomer_title, 'id' => $loyalcustomer_id, 'coupon' => $loyalcustomer_coupon,'lcproductid' => $loyalcustomer_productid );

update_option( 'lcbs_loyal_customer', $lcbs_loyal_customer );	
				
				
				
				$this->message = __('Settings Saved.', $this->plugin->name);
			
        }
       
        // Get latest settings
        $this->settings = array(
		   
        	
			'lcbs_include_loyalcustomer' => stripslashes(get_option('lcbs_include_loyalcustomer')),
			'lcbs_include_orders' => stripslashes(get_option('lcbs_include_orders')),
			'lcbs_include_message' => stripslashes(get_option('lcbs_include_message')),
			'lcbs_include_socialmessage' => stripslashes(get_option('lcbs_include_socialmessage')),
			'lcbs_include_facebook' => stripslashes(get_option('lcbs_include_facebook')),
			'lcbs_include_twitter' => stripslashes(get_option('lcbs_include_twitter')),
			'lcbs_include_google' => stripslashes(get_option('lcbs_include_google')),
		
        );
        
    	// Load Settings Form
        include_once(WP_PLUGIN_DIR.'/'.$this->plugin->name.'/settings.php');  
    }
 }
}

// frontend stuff
$lcbsloyalcustomer = get_option('lcbs_include_loyalcustomer');
if ($lcbsloyalcustomer < 1 ){
}else{
add_action( 'woocommerce_before_cart', 'loyal_customer_benignsource' );}
function loyal_customer_benignsource() {

$lcbs_loyal_customer = maybe_unserialize( get_option('lcbs_loyal_customer', true ) );

foreach ( $lcbs_loyal_customer as $loyalcustomer ){
$productlcbs = new WC_Product($loyalcustomer['lcproductid']);
$productlcbstwo = new WC_Product($loyalcustomer['lcproductidtwo']);
echo '<!--Loyal Customer BenignSource-->';

// Get all customer orders
    $customer_orders = get_posts( array(
        'numberposts' => 'lcbs_include_orders',
        'meta_key'    => '_customer_user',
        'meta_value'  => get_current_user_id(),
        'post_type'   => wc_get_order_types(),
        'post_status' => array_keys( wc_get_order_statuses() ),
    ) );
    
    $customer = wp_get_current_user();
    
    // Order count for a "loyal" customer
    $loyal_count = get_option('lcbs_include_orders');
    $loyal_message = get_option('lcbs_include_message');
    

if ( count( $customer_orders ) >= $loyal_count ) {

echo '<div style="padding:10px;background:#e96656; font-size:24px;color:#FFFFFF; width:100%;border-radius: 5px;"><div style="width:50%; display:inline-block;"><i>' . $loyalcustomer['titleloyal'] . '</i></div><div style="float:right; display:inline-block;">';
echo '<div style="line-height: 15px; display:inline-block;font-size:16px;margin-right:10px; "><i>' . get_option('lcbs_include_socialmessage') . '</i></div>';
$lcbsfacebook = get_option('lcbs_include_facebook');
if ($lcbsfacebook  == null ){
} else{
echo '<div style="line-height: 15px; display:inline-block;">
<a href="' . get_option('lcbs_include_facebook') . '" target="_blank"><img src="' . esc_attr( plugins_url( 'img/facebook.png', __FILE__ ) ) . '" alt="Like" border="0px"></div>
</a>';
}
$lcbstwitter = get_option('lcbs_include_twitter');
if ($lcbstwitter  == null ){
} else{
echo '<div style="line-height: 15px;display:inline-block;">
<a href="' . get_option('lcbs_include_twitter') . '" target="_blank"><img src="' . esc_attr( plugins_url( 'img/follow.png', __FILE__ ) ) . '" alt="Follow" border="0px"></a>
</div>';
}
$lcbsgoogle = get_option('lcbs_include_google');
if ($lcbsgoogle  == null ){
} else{
echo '<div style="line-height: 15px;display:inline-block;">
<div data-href="' . get_option('lcbs_include_google') . '"><a href="' . get_option('lcbs_include_google') . '" target="_blank"><img src="' . esc_attr( plugins_url( 'img/google.png', __FILE__ ) ) . '" alt="Google" border="0px"></a></div>
</div>';
}
echo '</div></div>';
echo '<div style="padding:10px;padding-top:0px;border:5px #e96656 solid;margin-bottom:10px; border-radius: 5px;">';
echo '<div style="padding:20px; width:100%; font-size:18px;color:#e96656;">' . $notice_text = sprintf( 'Hey <font color="#e96656"><b>%1$s </b></font>' . $loyal_message . '', $customer->display_name, $loyal_count ) . '</div>';
$lcbscoupon = $loyalcustomer['coupon'];
if ($lcbscoupon  == null ){
} else{
echo '<div style="width:20%;float:left;">';
echo '<div style="padding:20px;padding-bottom:0px; width:100%; font-size:24px;color:#e96656;">Coupon Code</div>';
echo '<div style="padding:20px; width:100%; font-size:24px;color:#e96656;"><b>' . $loyalcustomer['coupon'] . '</b></div></div>';
}
echo '<div style="padding:10px; width:40%; display:inline-block;">';
echo '<div style="width:40%; display:inline-block;">';
echo '<a href="' . get_permalink( $loyalcustomer['lcproductid'] ) . '" title="' . get_the_title($loyalcustomer['lcproductid']) . '">';
        echo get_the_post_thumbnail( $loyalcustomer['lcproductid'], 'thumbnail', array( 'style' => 'border-radius: 50%;border: 4px #e96656 solid;' )  );
        echo '</a></div>';
echo '<div style="width:60%; display:inline-block;">';
echo '<div style="width:100%;font-size:18px;padding:5px;"><i>' . get_the_title($loyalcustomer['lcproductid']) . '</i></div>';
echo '<div style="width:60%;font-size:18px;padding:5px;color:#e96656;"><b>Price '. get_woocommerce_currency_symbol(). ' ' . $productlcbs->get_price() . '</b></div>';
echo '<div style="width:60%;"><a rel="nofollow" href="?post_type=product&#038;add-to-cart=' . $loyalcustomer['lcproductid'] . '" data-quantity="1" data-product_id="' . $loyalcustomer['lcproductid'] . '" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Add to cart</a></div>';

echo '</div></div>';
echo '</div>';
echo '<!--Loyal Customer BenignSource-->';
  }
}	
}
?>
<?php
/**
 * Register BenignSource menu page.
 */
if (! function_exists('bs_register_benignsource_menu_page')){
function bs_register_benignsource_menu_page() {
    add_menu_page(
        __( 'BenignSource', 'BenignSource' ),
        'BenignSource',
        'manage_options',
        'loyal-customer-benignsource/plugins.php',
        '',
        plugins_url( 'loyal-customer-benignsource/icon.png' ),
        6
    );
}
add_action( 'admin_menu', 'bs_register_benignsource_menu_page' ); 
}else{
}
?>
<?php $benign_loyalcustomer = new LoyalCustomerBenignSourceOne(); ?>