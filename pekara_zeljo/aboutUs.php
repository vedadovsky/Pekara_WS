<?php
ob_start();
// include header.php file
include ('header.php');
?>
<?php 

    //  include history
    include ('Template/_history.php');

    //  include time and location
    include ('Template/_timeAndLocation.php');

?>



<?php
// include footer.php file
include ('footer.php');
?>
