<?php
    ob_start();
    // include header.php file
    include ('header.php');
?>

<?php


    //  include banner area  
        include ('Template/_banner-area.php');

    //  include top sale section 
        include ('Template/_top-sale.php');

    //  include special price section  
         include ('Template/_special-price.php');

    //  include banner ads  
        include ('Template/_banner-ads.php');

    // include blog area 
         include ('Template/_blogs.php');

?>


<?php
// include footer.php file
include ('footer.php');
?>