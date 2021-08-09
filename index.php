<?php 

/**
 * Web: Financia.com 
 * 
 * @package ARMIX
 * 
 */ 

 ?>

 <?php

     define( 'TD' , __DIR__  );
     // define( 'TDU' , $_SERVER['HTTP_HOST'] );

    if ( substr( $_SERVER['HTTP_HOST'], 0, 9 ) === 'localhost' ) {
        define( 'TDU', '//localhost/financia' );
    } else {
        define( 'TDU', '//armix.com.ar/staging/financia' );
    }

?>

 <?php 

    require_once 'head.php';

    require_once 'parts/organisms/header.php';
    require_once 'parts/organisms/cover.php';
    require_once 'parts/organisms/your-loan.php';
    require_once 'parts/organisms/as-i-ask.php';
    require_once 'parts/organisms/our-products.php';
    require_once 'parts/organisms/why-financia.php';
    require_once 'parts/organisms/adhered-businesses.php';
    require_once 'parts/organisms/about-us.php';
    require_once 'parts/organisms/footer.php';

    require_once 'footer.php';

 ?>
 	
