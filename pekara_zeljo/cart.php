<?php
ob_start();
// include header.php file
include ('header.php');
?>

<?php
        //include if cart is empty
        count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');

        //include if wishlist is empty
        count($product->getData('wishlist')) ? include ('Template/_wishlist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');

?>

<?php
// include footer.php file
include ('footer.php');
?>


