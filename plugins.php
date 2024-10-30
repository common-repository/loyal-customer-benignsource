<div class="wrap">
<style >

.bs_product_box {
    background: #f2f2f2;
    border: 1px solid #CACACA;
    float: left;
    margin: 10px 10px 0 0;
    width: 320px;
    border-radius: 3px;

    }
.bs_product_image {
    padding: 20px;
}
.bs_product_content, .bws_product_image {
    float: left;
}
.bs_product_image img {
    height: 60px;
}
.bs_product_content {
    max-width: 200px;
    padding: 15px 0 7px;
}
.bs_product_content, .bs_product_image {
    float: left;
}
.bs_product_title {
    font-size: 14px;
    line-height: initial;
    font-weight: bolder;
	text-decoration:none;
	color:#333333;
}
.bs-version {
    margin-top: 6px;
}
.bs_product_description {
    font-size: 13px;
    line-height: 18px;
    margin: 6px 0 2px;
    color: #666;
}
.bs_product_links {
    margin: 15px 0;
}
.bs_product_content a.bs_upgrade_button, .bs_product_content a.bs_upgrade_button:hover {
    background: #dd6930;
    border: 1px solid #c16436;
    color: #fff;
    margin-right: 12px;
}	
    </style>
<div id="poststuff">
<div id="post-body" class="metabox-holder columns-2">
<div id="post-body-content">
<div id="normal-sortables" class="meta-box-sortables ui-sortable">                        
<div class="postbox" style="float:left; padding:15px; width:100%;">
<div style="padding:10px; margin-top:20px; margin-bottom:20px; padding-right:5px; width:99%;border-bottom: 4px #e96656 solid; background-color: #433a3b; float:left;">
<div style="width:30%; float:left;"><h2 style=" color:#FFFFFF; font-size:18px;">BenignSource Plugins</h2></div>
<div style="width:150px; padding:10px; float: right;color:#FFFFFF;"><a style="color:#FFFFFF; text-decoration:none; font-size:14px;" href="http://www.benignsource.com" target="_blank">Home</a>&nbsp;|&nbsp;<a style="color:#FFFFFF; text-decoration:none; font-size:14px;" href="http://www.benignsource.com/forums/" target="_blank">Support</a></div>
</div>
<div style="width:81%; float:left; padding:20px;">
<div style="width:97%; text-align:center; float:left;"><h2 style=" color:#666; font-size:14px;">BenignSource Dashboard</h2></div>
<div style="width:98%; float:left;"><h2 style="border-bottom: 4px #00CC00 solid; color:#333; font-size:18px;">Active Plugins</h2></div>
<?php
if ( is_plugin_active( 'meta-seo-benignsource/meta-seobenignsource.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=meta-seo-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/meta-seo-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=meta-seo-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Meta SEO BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'meta-seo-benignsource/meta-seobenignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'meta-seo-benignsource/meta-seobenignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="options-general.php?page=meta-seobenignsource.php">Settings</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>
<!--end meta-->
<!--start protect-->
<?php
if ( is_plugin_active( 'protect-benignsource/protectbs.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=protect-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/protect-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=protect-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Protect BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'protect-benignsource/protectbs.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'protect-benignsource/protectbs.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="options-general.php?page=protect-benignsource">Settings</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>

<!--end protect-->
<?php
if ( is_plugin_active( 'seo-converter-benignsource/seo-converter-benignsource.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=seo-converter-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/seo-converter-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=seo-converter-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Seo Converter BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'seo-converter-benignsource/seo-converter-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'seo-converter-benignsource/seo-converter-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="options-general.php?page=seo-converter-benignsource">Settings</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>
<!--end convert-->
<?php
if ( is_plugin_active( 'woo-product-design-benignsource/woo-product-design-benignsource.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=woo-product-design-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/woo-product-design-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=woo-product-design-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Woo Product Design BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'woo-product-design-benignsource/woo-product-design-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'woo-product-design-benignsource/woo-product-design-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="edit.php?post_type=product">Start Design</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>
<!--end design-->
<?php
if ( is_plugin_active( 'cart-promotion-benignsource/cart-promotion-benignsource.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=cart-promotion-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/cart-promotion-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=cart-promotion-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Cart Promotion BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'cart-promotion-benignsource/cart-promotion-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'cart-promotion-benignsource/cart-promotion-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="edit.php?post_type=product">Edit Products</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>
<!--end cart-->
<?php
if ( is_plugin_active( 'specification-benignsource/specification-benignsource.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=specification-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/specification-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=specification-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Specification BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'specification-benignsource/specification-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'specification-benignsource/specification-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="edit.php?post_type=product">Edit Products</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>
<!--end spefi-->
<?php
if ( is_plugin_active( 'loyal-customer-benignsource/loyal-customer-benignsource.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=loyal-customer-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/loyal-customer-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=loyal-customer-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Loyal Customer BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'loyal-customer-benignsource/loyal-customer-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'loyal-customer-benignsource/loyal-customer-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="options-general.php?page=loyal-customer-benignsource">Settings</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>
<!--end Loyal-->
<?php
if ( is_plugin_active( 'real-performance-benignsource/real-performancebs.php' ) ) {
  //plugin is activated
?>
<div class="bs_product_box" style="height: 120px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=real-performance-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/real-performance-benignsource/assets/icon-128x128.jpg"></a></div>
</div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=real-performance-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Real Performance BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'real-performance-benignsource/real-performancebs.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>

<?php }?>
</div>

<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'real-performance-benignsource/real-performancebs.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="options-general.php?page=real-performance-benignsource">Settings</a>
<?php
} else {?>
<?php }?></div></div>
<div class="clear"></div></div>
<?php
} else {}?>
<!--end Real-->
</div>
<div style="width:180px; float:left;">
<ul><li style="font-size:14px;padding-bottom:15px;border-bottom:1px #e96656 solid;"><a href="http://www.benignsource.com/#contact" target="_blank" title="24/7 Free Support" style="color:#666; text-decoration:none;font-size:14px; ">24/7 Free Support</a></li>
<li style="font-size:14px;"><i>
By purchasing the premium version of the plugin, you will take advantage of the advanced features of the product and you will get Free updates and Support!</i>
</li><li style="font-size:16px; padding-top:20px;">Thanks for support!</li></ul>
</div>
<div style="width:81%; float:left; padding:20px;">
<div style="width:98%; float:left;"><h2 style="border-bottom: 4px #e96656 solid; color: #333333;  font-size:18px;">All Plugins</h2></div>
<?php
function get_plugin_version($name){

$readme_file="http://plugins.svn.wordpress.org/$name/trunk/readme.txt";
$readme_text=file_get_contents($readme_file);

$lines=explode("\n",$readme_text);
$needle="Stable tag:";

foreach($lines as $line ){
if( strpos($line,$needle) > -1 ){
$version= trim(str_replace($needle,"",$line));
break;
}
}

return $version;
}



?>
<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=woo-product-design-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title"><img src="https://ps.w.org/woo-product-design-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("woo-product-design-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=woo-product-design-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Woo Product Design BenignSource</a></div>
<div class="bs-version">

<?php
if ( is_plugin_active( 'woo-product-design-benignsource/woo-product-design-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>
</div>
<div class="bs_product_description">
Woo Product Design make your products with different designs and style! </div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'woo-product-design-benignsource/woo-product-design-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/woo-product-design-benignsource/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=Woo+Product+Design+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?></div></div>
<div class="clear"></div></div>

<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=loyal-customer-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="thickbox open-plugin-details-modal"><img src="https://ps.w.org/loyal-customer-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("loyal-customer-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=loyal-customer-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Loyal Customer BenignSource</a></div>
<div class="bs-version">
<?php 
if ( is_plugin_active( 'loyal-customer-benignsource/loyal-customer-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>
</div>
<div class="bs_product_description">
Create a campaign for regular customers or new ones.</div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'loyal-customer-benignsource/loyal-customer-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/loyal-customer-benignsource/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=Loyal+Customer+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?>
</div></div>
<div class="clear"></div></div>

<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=cart-promotion-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="thickbox open-plugin-details-modal"><img src="https://ps.w.org/cart-promotion-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("cart-promotion-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=cart-promotion-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Cart Promotion BenignSource</a></div>
<div class="bs-version">
<?php 
if ( is_plugin_active( 'cart-promotion-benignsource/cart-promotion-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>

</div>
<div class="bs_product_description">
Promote Special Product or Accessories for each product in Shopping Cart.</div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'cart-promotion-benignsource/cart-promotion-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/cart-promotion-benignsource/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=Cart+Promotion+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?></div></div>
<div class="clear"></div></div>

<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=specification-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="thickbox open-plugin-details-modal"><img src="https://ps.w.org/specification-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("specification-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=specification-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Specification BenignSource</a></div>
<div class="bs-version">
<?php 
if ( is_plugin_active( 'specification-benignsource/specification-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>

</div>
<div class="bs_product_description">
Full Specification Product Tab, Delivery & Returns Policy Tab.</div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'specification-benignsource/specification-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/specification-benignsource/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=Specification+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?></div></div>
<div class="clear"></div></div>

<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=seo-converter-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="thickbox open-plugin-details-modal"><img src="https://ps.w.org/seo-converter-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("seo-converter-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=seo-converter-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">SEO Converter BenignSource</a></div>
<div class="bs-version">
<?php 
if ( is_plugin_active( 'seo-converter-benignsource/seo-converter-benignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>
</div>
<div class="bs_product_description">
Convert your WordPress to Real HTML Categories, Post and Products!</div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'seo-converter-benignsource/seo-converter-benignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/seo-converter-benignsource/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=SEO+Converter+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?></div></div>
<div class="clear"></div></div>



<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=real-performance-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="thickbox open-plugin-details-modal"><img src="https://ps.w.org/real-performance-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("real-performance-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=real-performance-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Real Performance BenignSource</a></div>
<div class="bs-version">
<?php 
if ( is_plugin_active( 'real-performance-benignsource/real-performancebs.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>
</div>
<div class="bs_product_description">
Real Performance Search Engine (SEO) & Performance Optimization in Real Time!</div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'real-performance-benignsource/real-performancebs.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/real-performance-benignsource/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=Real+Performance+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?></div></div>
<div class="clear"></div></div>

<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=protect-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="thickbox open-plugin-details-modal"><img src="https://ps.w.org/protect-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("protect-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=protect-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Protect BenignSource</a></div>
<div class="bs-version">
<?php 
if ( is_plugin_active( 'protect-benignsource/protectbs.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>
</div>
<div class="bs_product_description">
Protect your WordPress.</div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'protect-benignsource/protectbs.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/protect-benignsource/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=Protect+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?></div></div>
<div class="clear"></div></div>

<div class="bs_product_box" style="height: 190px; width:300px;">
<div style=" width:100px; float:left;">
<div class="bs_product_image">
<a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=meta-seo-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="thickbox open-plugin-details-modal"><img src="https://ps.w.org/meta-seo-benignsource/assets/icon-128x128.jpg"></a></div>
<div style="width:80px; text-align:center; padding:10px; float:left; font-size:18px; color:#e96656;">Version<br /><i><?php echo get_plugin_version("meta-seo-benignsource");?></i></div></div>
<div class="bs_product_content">
<div class="bs_product_title"><a href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=plugin-information&amp;plugin=meta-seo-benignsource&amp;from=import&amp;TB_iframe=true&amp;width=772&amp;height=582" class="bs_product_title">Meta SEO BenignSource</a></div>
<div class="bs-version">
<?php 
if ( is_plugin_active( 'meta-seo-benignsource/meta-seobenignsource.php' ) ) {
  //plugin is activated
?>
<span style="color:#dd6930;">Plugin Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>
</div>
<div class="bs_product_description">
Optimize your WordPress.</div>
<div class="bs_product_links">
<?php 
if ( is_plugin_active( 'meta-seo-benignsource/meta-seobenignsource.php' ) ) {
  //plugin is activated
?>
<a class="button button-secondary bs_upgrade_button" href="http://www.benignsource.com/product/meta-seo-benignsource-for-woocommerce-wordpress/" target="_blank">Upgrade to Premium</a>
<?php
} else {?>
<a class="button button-secondary" href="<?php echo get_site_url(); ?>/wp-admin/plugin-install.php?tab=search&amp;type=term&amp;s=Meta+SEO+BenignSource&amp;plugin-search-input=Search+Plugins" title="Install this plugin" target="_blank">Install Now</a><?php }?></div></div>
<div class="clear"></div></div></div>
<div style="width:180px; float:left;">
<h2>Category</h2>
<ul>
<li style="font-size:12px;"><a href="http://www.benignsource.com/product-category/plugins/seo-features/" title="Search Engine Optimization" target="_blank" style="color:#666; text-decoration:none;">Search Engine Optimization</a></li>
<li style="font-size:12px;"><a href="http://www.benignsource.com/product/protect-benignsource/" target="_blank" title="Website protection" style="color:#666; text-decoration:none;">Website protection</a></li>
<li style="font-size:12px;"><a href="http://www.benignsource.com/product-category/plugins/features/" target="_blank" title="Features &amp; Tools" style="color:#666; text-decoration:none;">Features &amp; Tools</a> </li>
<li style="font-size:12px;"><a href="http://www.benignsource.com/product-category/themes/" target="_blank" title="Themes" style="color:#666; text-decoration:none;">Themes</a> </li>
<li style="font-size:12px;"><a href="http://www.benignsource.com/product-category/widgets/" title="Widgets" target="_blank" style="color:#666; text-decoration:none;">Widgets</a> </li></ul>
</div>
<div style="padding:10px; margin-top:20px; margin-bottom:20px; padding-right:5px; width:99%;border-bottom: 4px #e96656 solid; background-color: #433a3b; float:left;">
<h2 style=" color:#FFFFFF; font-size:18px;">BenignSource Themes</h2>
</div>
<div style="width:81%; float:left; padding:20px;">
<div class="bs_product_box" style="height: 190px; width:300px;">
<div class="bs_product_image">
<img src="https://ps.w.org/meta-seo-benignsource/assets/icon-128x128.jpg"></div>

<div class="bs_product_content">
<div class="bs_product_title">BenignSource Shop</div>
<div class="bs-version">
<?php 
if (function_exists('benignsourceshop_setup')) {
?>
<span style="color:#dd6930;">Theme is Active</span>
<?php
} else {?>
<span>Not installed</span>
<?php }?>
</div>
<div class="bs_product_description">
BenignSource Shop WooCommerce / WordPress Theme.</div>
<div class="bs_product_links">
<?php 
if (function_exists('benignsourceshop_setup')) {
?>
<?php
} else {?>
<?php
$theme = wp_get_theme(); // gets the current theme
if ('benignsource-shop' == $theme->name || 'benignsource-shop' == $theme->parent_theme) {?>
<a class="button button-secondary activate" href="<?php echo get_site_url(); ?>/wp-admin/themes.php?action=activate&amp;stylesheet=benignsource-shop&amp;_wpnonce=6769f93220" aria-label="Activate BenignSource Shop">Activate Theme</a>
<?php
} else {?>
<a  class="button button-secondary activate" href="http://www.benignsource.com/themes/" target="_blank">Download Theme</a>
<?php } }?></div></div>
<div class="clear"></div></div>
</div>
<div style="width:100%; float:left; text-align:center;">Copyright &copy; 2001 - <?php printf(__('%1$s | %2$s'), date("Y"), ''); ?> <a href="http://www.benignsource.com/" target="_blank" title="BenignSource">BenignSource</a> Company, All Rights Reserved.</div>
</div></div></div></div></div>