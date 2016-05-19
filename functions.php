<?php
add_theme_support( 'post-thumbnails');
add_theme_support( 'woocommerce' );
/**
 * Adicionamos uma acção no inicio do carregamento do WordPress
 * através da função add_action( 'init' )
 */



add_action("admin_init", "price_meta");
 function price_meta(){
  add_meta_box("price", "Price", "Price", "products", "normal", "low");
}

 function price(){
  global $post;
  $custom = get_post_custom($post->ID);
  $price = $custom["price"][0];
  ?>
  <label>Price:</label>
  <input id="price" name="price" type="text"  value="<?php echo $price; ?>" />
  <?php
}

add_action('save_post', 'save_meta');
function save_meta(){
  global $post;
  update_post_meta($post->ID, price, $_POST["price"]);
}

?>