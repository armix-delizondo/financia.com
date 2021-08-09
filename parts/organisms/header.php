<?php 

/**
 * Organism: Header
 * 
 * @package ARMIX
 * 
 */ 

 ?>

 <?php require TD . '/parts/molecules/menu-mobile.php'; ?>

 <div class="header">
     <div class="header__mobile">
        <?php require TD . '/parts/atoms/logo.php'; ?>
        <?php require TD . '/parts/atoms/hamburger-menu.php'; ?>
     </div>
     <div class="header__desktop">
          <?php require TD . '/parts/atoms/logo.php'; ?>
          <div class="header__button">
              <a class="header__button-link button" href="#prestamo-hoy">
                  Pedí tu crédito
              </a>
          </div>
          <?php require TD . '/parts/atoms/social.php'; ?>
     </div>
 </div>
 <?php require TD . '/parts/molecules/menu-desktop.php'; ?>