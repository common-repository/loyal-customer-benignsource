<div class="wrap">
<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if( current_user_can('administrator') ) {?>
<style type="text/css" >
.time {
    height: 30px;
    width: 32%;
    display: inline-block;
	padding:5px;
	font-size:16px;
    position: relative;
	text-align:center;

    background-color: #F1F2F7;
	text-shadow: 1px 1px #999999;
    overflow: hidden;
    -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);}
.int{ 
background-color: #F1F2F7;
border:2px #666666 solid;
}
.check{
    content: "\2717";
    font-size: 24px;
    -webkit-font-smoothing: antialiased;
    text-align: center;
    color: #fff;
    display: inline-block;
    width: 26px;
    height: 26px;
	
   
    background: #C9D6E2;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    border: 1px solid #B2BFCA;
}

[type="checkbox"]:not(:checked),
[type="checkbox"]:checked {
  position: absolute;
  left: -9999px;
}
[type="checkbox"]:not(:checked) + label,
[type="checkbox"]:checked + label {
  position: relative;
  padding-left: 75px;
  cursor: pointer;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before,
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
}
[type="checkbox"]:not(:checked) + label:before,
[type="checkbox"]:checked + label:before {
  left:0; top: -3px;
  width: 65px; height: 30px;
  background: #DDDDDD;
  border-radius: 15px;
  transition: background-color .2s;
}
[type="checkbox"]:not(:checked) + label:after,
[type="checkbox"]:checked + label:after {
  width: 20px; height: 20px;
  transition: all .2s;
  border-radius: 50%;
  background: #7F8C9A;
  top: 2px; left: 5px;
}

/* on checked */
[type="checkbox"]:checked + label:before {
  background:#34495E; 
}
[type="checkbox"]:checked + label:after {
  background: #39D2B4;
  top: 2px; left: 40px;
}

[type="checkbox"]:checked + label .ui,
[type="checkbox"]:not(:checked) + label .ui:before,
[type="checkbox"]:checked + label .ui:after {
  position: absolute;
  left: 6px;
  width: 65px;
  border-radius: 15px;
  font-size: 14px;
  font-weight: bold;
  line-height: 22px;
  transition: all .2s;
}
[type="checkbox"]:not(:checked) + label .ui:before {
  content: "no";
  left: 32px
}
[type="checkbox"]:checked + label .ui:after {
  content: "yes";
  color: #39D2B4;
}
[type="checkbox"]:focus + label:before {
  border: 1px dashed #777;
  box-sizing: border-box;
  margin-top: -1px;
}

.checkdone{
    content: "\2717";
    font-size: 24px;
    -webkit-font-smoothing: antialiased;
    text-align: center;
    color: #fff;
    display: inline-block;
    width: 26px;
    height: 26px;
	
   
    background: #00CC00;
    box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
    border: 1px solid #B2BFCA;
}
.bodyconvert{
 padding:15px; 
 box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.05); 
 margin-bottom:30px;}
</style>
<?php echo '<img src="' . esc_attr( plugins_url( 'loyal_logo.jpg', __FILE__ ) ) . '" alt="Loyal Customer BenignSource" border="0px"> ';?>
           
    <?php    
    if (isset($this->message)) {
        ?>
        <div class="updated fade"><p><?php echo $this->message; ?></p></div>  
        <?php
    }
    if (isset($this->errorMessage)) {
        ?>
        <div class="error fade"><p><?php echo $this->errorMessage; ?></p></div>  
        <?php
    }
    ?> 
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content">
<div id="normal-sortables" class="meta-box-sortables ui-sortable">                        
<div class="postbox">
<h3 class="hndle"><?php _e('Settings', $this->plugin->name); ?></h3>
<div class="inside">
<div class="bodyconvert"><h2 style="color:#e96656; font-size:18px; font-weight:bold;">Create a campaign for regular customers or new ones</h2>
<p>Loyal Customer BenignSource is professional tool.</p>
<div style=" text-align:center; font-size:16px; color:#e96656; padding:10px;">This is Free version if you like it support us and take <a href="http://www.benignsource.com/product/loyal-customer-benignsource/" target="_blank" title="Premium Version">Premium Version</a></div>
<form action="options-general.php?page=<?php echo $this->plugin->name; ?>" method="post">
<div style="margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<div style="background:#433a3b; margin-bottom:20px;"><h2 style="color:#FFFFFF;"><i>Loyal Customer</i></h2></div>
<div style=" text-align:center; font-size:16px; color:#e96656; padding:10px;"><i>In this demo version is only possible "Include in Shopping Cart"</i></div>
<div style="width:30%;display: inline-block;  padding:15px;">
<h2 style="color:#433a3b; font-size:14px; font-weight:bold;">Disable / Enable Loyal Customer</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">Control which pages to be show Loyal Customer</div>
<div style="width:100%;display: inline-block;">
<p>
<label for="lcbs_include_loyalcustomer"><strong></strong></label></p><p>
<input type="checkbox" name="lcbs_include_loyalcustomer" id="lcbs_include_loyalcustomer" value="1" <?php echo $this->settings['lcbs_include_loyalcustomer'] ? ' checked="checked"' : ''; ?>/>
<label for="lcbs_include_loyalcustomer"><span class="ui"></span>Include in Shopping Cart</label>
</p>
</div></div>
<div style="width:30%;display: inline-block;">
<p>
<label for="lcbs_include_myaccount"><strong></strong></label></p><p>
<input type="checkbox" name="lcbs_include_myaccount" id="lcbs_include_myaccount"/>
<label for="lcbs_include_myaccount"><span class="ui"></span>Include in My Account</label>
</p>
</div>
<div style="width:30%;display: inline-block;">
<p>
<label for="lcbs_include_myshop"><strong></strong></label></p><p>
<input type="checkbox" name="lcbs_include_myshop" id="lcbs_include_myshop" />
<label for="lcbs_include_myshop"><span class="ui"></span>Include in My Shop</label>
</p>
</div>
</div>
<div style="margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<div style="background:#433a3b; margin-bottom:20px;"><h2 style="color:#FFFFFF;"><i>Loyal Customer Campaign</i></h2></div>
<div style="width:60%;display: inline-block;  padding:15px;">
<h2 style="color:#433a3b; font-size:14px; font-weight:bold;border-bottom:1px #e96656 solid;">How many orders must have customer</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">
<p>
<input type="text" style="background-color: #F1F2F7;border:1px #CCCCCC solid;" name="lcbs_include_orders" id="lcbs_include_orders" size="10" value="<?php echo $this->settings['lcbs_include_orders']; ?>" /></p>
</div>
<h2 style="color:#433a3b; font-size:14px; font-weight:bold;">Thanks for loyalty message</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">
<p>
<input type="text" style="background-color: #F1F2F7;border:1px #CCCCCC solid;" name="lcbs_include_message" id="lcbs_include_message" size="100" value="<?php echo $this->settings['lcbs_include_message']; ?>" /></p>
</div>

<h2 style="color:#433a3b; font-size:14px; font-weight:bold;border-bottom:1px #e96656 solid;">Social campaign</h2>
<div style="text-align:left; padding-left:10px; color:#FF0000;">
<p>Social message</p><p>
<input type="text" style="background-color: #F1F2F7;border:1px #CCCCCC solid;" name="lcbs_include_socialmessage" id="lcbs_include_socialmessage" size="100" value="<?php echo $this->settings['lcbs_include_socialmessage']; ?>" /></p>
<p>Facebook Page</p><p>
<input type="text" style="background-color: #F1F2F7;border:1px #CCCCCC solid;" name="lcbs_include_facebook" id="lcbs_include_facebook" size="100" value="<?php echo $this->settings['lcbs_include_facebook']; ?>" /></p>
<p>Twitter Page</p><p>
<input type="text" style="background-color: #F1F2F7;border:1px #CCCCCC solid;" name="lcbs_include_twitter" id="lcbs_include_twitter" size="100" value="<?php echo $this->settings['lcbs_include_twitter']; ?>" /></p>
<p>Google+ Page</p><p>
<input type="text" style="background-color: #F1F2F7;border:1px #CCCCCC solid;" name="lcbs_include_google" id="lcbs_include_google" size="100" value="<?php echo $this->settings['lcbs_include_google']; ?>" /></p>
</div>
<div style="width:100%;display: inline-block;">
<?php 

global $post;
		

		// pull the data out of the database
		$lcbs_loyal_customer = maybe_unserialize( get_option( 'lcbs_loyal_customer', true ) );
		

foreach ( $lcbs_loyal_customer as $loyalcustomer ) {
echo '<div style="padding:15px;">';
echo '<div style="padding:15px;border-bottom:1px #e96656 solid;"><i><b>Promote Special Offer or Accessories for your regular customers</b></i></div>';
        woocommerce_wp_text_input( array( 'id' => '_lcbs_loyal_customer_title', 'label' => __( 'Name of Promotion<br/>', 'benignsource_loyal_customer' ), 'placeholder' => __( 'Get Special Offers Now!', 'benignsource_loyal_customer' ), 'value' => $loyalcustomer['titleloyal'], 'style' => 'width:100%;background-color: #F1F2F7;border:1px #CCCCCC solid;' ) );
		woocommerce_wp_text_input( array( 'id' => '_lcbs_loyal_customer_coupon', 'label' => __( 'Coupon Code ', 'benignsource_loyal_customer' ), 'placeholder' => __( 'Enter Coupon Code', 'benignsource_loyal_customer' ), 'value' => $loyalcustomer['coupon'], 'style' => 'width:100%;background-color: #F1F2F7;border:1px #CCCCCC solid;' ) );
		woocommerce_wp_text_input( array( 'id' => '_lcbs_loyal_customer_productid', 'label' => __( 'Product ID<br/>', 'benignsource_loyal_customer' ), 'placeholder' => __( 'Enter ID', 'benignsource_loyal_customer' ), 'value' => $loyalcustomer['lcproductid'], 'style' => 'width:10%;background-color: #F1F2F7;border:1px #CCCCCC solid;' ) );
		
	
echo '<div style="">';
echo '<div style="padding:15px;border-bottom:1px #e96656 solid;"><i><b>Promote Other Product or Accessories</b></i></div>';
       woocommerce_wp_text_input( array( 'id' => '_lcbs_loyal_customer_productidtwo', 'label' => __( 'Product ID<br/>', 'benignsource_loyal_customer' ), 'placeholder' => __( 'Premium Version', 'benignsource_loyal_customer' ), 'value' => $loyalcustomer['lcproductidtwo'], 'style' => 'width:20%;background-color: #F1F2F7;border:1px #CCCCCC solid;' ) );
echo '</div>';
		

echo '<div style="">';
echo '<div style="padding:15px;border-bottom:1px #e96656 solid;"><i><b>Select Background Color</b></i></div>';			
woocommerce_wp_select( array( 'id' => '_lcbs_loyal_customer_color', 'label' => __( 'Premium Version<br/>', 'benignsource_loyal_customer' ), 'name' => $loyalcustomer['colorbg[]'], 'options' => array(
        '' . $loyalcustomer['colorbg'] . ''  => $loyalcustomer['colorbg'],
		'#e96656' => 'Default',
        '#fd0101' => 'Red',
        'yellowgreen' => 'Yellowgreen',
		'rosybrown' => 'Rosybrown',
		'aliceblue' => 'Aliceblue',
		'aqua' => 'Aqua',
		'brown' => 'Brown',
		'burlywood' => 'Burlywood',
		'cadetblue' => 'Cadetblue',
		'chocolate' => 'Chocolate',
		'coral' => 'Coral',
		'crimson' => 'Crimson',
		'darkgray' => 'Darkgray',
		'indianred' => 'Indianred',
		'peru' => 'Peru',
    ), 'style' => 'width:70%;' ) );	
	    echo '</div>';		
		echo '</div>';
		
	}
?>
</div></div>
<div style="width:30%;display: inline-block;">
</div></div>
<div style=" padding:15px; margin-top:20px; border-top:5px #e96656 solid; margin-bottom:30px; ">
<h2><i>After pressing "Save Settings" your settings will be saved</i></h2>
<p><input name="submit" type="submit" class="button button-primary" value="<?php _e('Save Settings', $this->plugin->name); ?>" /></p>
</div>
<?php wp_nonce_field('benignsource-nonce', 'submit' ); ?>
</form></div>
</div>	                
<div class="postbox">
<div style="width:70%; margin-bottom:20px;"><h2>BenignSource <a href="http://www.benignsource.com/forums/" target="_blank" title="BenignSource">Support Page</a> | <a href="http://www.benignsource.com/products/" target="_blank" title="Products">Products</a> | <a href="http://www.benignsource.com/#contact" target="_blank" title="Send feedback">Send feedback</a></h2></div>
<div style="width:100%; text-align:center;">Copyright &copy; 2001 - <?php printf(__('%1$s | %2$s'), date("Y"), ''); ?> <a href="http://www.benignsource.com/" target="_blank" title="BenignSource">BenignSource</a> Company, All Rights Reserved.</div>
</div>
</div>
</div>
</div>
</div><?php }?> 
</div>
