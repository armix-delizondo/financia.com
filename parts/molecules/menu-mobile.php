<?php 

/**
 * Molecule: Menu Mobile
 * 
 * @package ARMIX
 * 
 */ 

 ?>

<div class="menu-mobile">
	<div class="menu-mobile__close">
		<a class="menu-mobile__close-link" href="#">
			<img class="menu-mobile__cross" src="<?php echo TDU . '/images/icons/cross-white.svg'; ?>">
		</a>
	</div>
	<div class="menu-mobile__wrapper-button">
		<div class="menu-mobile__button button">
		    <a class="menu-mobile__button-link" href="#prestamo-hoy">
		          Pedí tu crédito
		    </a>
	  	</div>
	</div>
  	<nav class="menu-mobile__navigation">
  		<a class="menu-mobile__link" href="#quienes-somos">
  			¿Quiénes somos?
  		</a>
  		<a class="menu-mobile__link" href="#como-lo-pido">
  			¿Cómo lo pido?
  		</a>
  		<a class="menu-mobile__link" href="#por-que-financia">
  			¿Por qué Financia.com?
  		</a>
  		<a class="menu-mobile__link" href="#comercios-adheridos">
  			Comercios adheridos
  		</a>
  		<a class="menu-mobile__link" href="#otros-productos">
  			Otros productos
  		</a>
  	</nav>
  	<div class="menu-mobile__social">
  		<?php require TD . '/parts/atoms/social.php'; ?>
  	</div>
</div>