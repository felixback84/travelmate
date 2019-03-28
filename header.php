<!DOCTYPE html>
<html lang="es">
  <head>
    <?php wp_head(); ?>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="/favicon.ico">
  </head> 

  <body>
    
  <header id="headerClassic" class="u-header">
    <div class="u-header__section" style="background-color: #000042; border-bottom: #000042 ">
      <div id="logoAndNavClassic" class="container-fluid">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg u-header__navbar">
          <!-- Logo -->
          <div class="u-header__navbar-brand-wrapper">
            <a class="navbar-brand u-header__navbar-brand" href="<?php echo home_url();?>" aria-label="Space">
              <img class="u-header__navbar-brand-default" src="<?php 
                        $icon = wp_get_attachment_image_url('1548','',true );
                        echo $icon;
                        ?>" alt="Logo">
              <img class="u-header__navbar-brand-mobile" src="<?php 
                        $icon = wp_get_attachment_image_url('1549','',true );
                        echo $icon;
                        ?>" alt="Logo">
            </a>
          </div>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn u-hamburger u-header__hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBarClassic"
                  data-toggle="collapse"
                  data-target="#navBarClassic">
            <span class="d-none d-sm-inline-block">Menu</span>
            <span id="hamburgerTriggerClassic" class="u-hamburger__box ml-3">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
          <div id="navBarClassic" class="collapse navbar-collapse u-header__navbar-collapse py-0">
            <ul class="navbar-nav u-header__navbar-nav">
              <!-- <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="<?php //echo site_url('/')?>">
                  Bienvenidos
                </a>
              </li> -->

              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="<?php echo site_url('/nuestros-destinos-en-america/')?>"
                  <?php if (is_page('nuestros-destinos-en-america')) echo 'style=" color : #15DA94"' ?>
                 onMouseOver="this.style.color='#15DA94'"
                onMouseOut="this.style.color='#fff'"
                style="color: white;">
                  Destinos
                </a>
              </li>

              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="<?php echo site_url('/como-funciona/');?>"
                  <?php if (is_page('como-funciona')) echo 'style=" color : #15DA94"' ?>
                  onMouseOver="this.style.color='#15DA94'"
                onMouseOut="this.style.color='#fff'"
                style="color: white;">
                  ¿Cómo funciona?
                </a>
              </li>

              <li class="nav-item u-header__nav-item">
                <a class="nav-link u-header__nav-link" href="<?php echo site_url('/por-que-nosotros/');?>"
                  <?php if (is_page('por-que-nosotros')) echo 'style=" color : #15DA94"' ?>
                  onMouseOver="this.style.color='#15DA94'"
                onMouseOut="this.style.color='#fff'"
                style="color: white;">
                  ¿Por qué nosotros?
                </a>
              </li>

              <?php if (is_user_logged_in()) { ?>
              <li class="nav-item u-header__nav-item">
                <a class="btn btn-success" href="<?php echo site_url('/inicia-tu-viaje-new/');?>"
                style="color: white; border-radius: 0px;">
                  Inicia tu viaje
                </a>
              </li>

              <li class="nav-item u-header__nav-item"> 
                <a class="btn btn-info" 
                   href="<?php 

                   $ourCurrentUser = wp_get_current_user();

                   if ( count($ourCurrentUser -> roles) == NULL ) {
                        
                        echo site_url('/inicia-tu-viaje-new/');

                    } else {

                      echo site_url('/viajeros/'.strtolower($ourCurrentUser -> user_login));
                    }?>" 
                   role="button"
                   data-overlay-color="#151b26"
                   style="color: white; border-radius: 0px;">
                  <span class="fa fa-user-circle mr-1"></span>
                  Mi cuenta
                </a>
              </li>

              <li class="nav-item u-header__nav-item">
                   
                <a class="nav-link u-header__nav-link" 
                   data-overlay-color="#151b26"
                   href="<?php 
                   global $wp;
                   echo wp_logout_url( home_url( $wp -> request ) ); ?>"
                   onMouseOver="this.style.color='#15DA94'"
                onMouseOut="this.style.color='#fff'"
                style="color: white;">Cerrar sesión</a>
              </li>

              <?php } else { ?> 
              <li class="nav-item u-header__nav-item">           
                <a class="btn btn-success" 
                
                   href="<?php echo site_url('/inicio-sesion/');?>" 
                   role="button"
                   data-overlay-color="#151b26"
                   
                style="color: white; border-radius: 0px;">
                   Ingresar
                </a>
              </li> 
              <li class="nav-item u-header__nav-item"> 
                <a class="btn btn-info" 
                   href="<?php echo site_url('/registrarse/');?>" 
                   role="button"
                   data-overlay-color="#151b26"
              
                style="color: white; border-radius: 0px;">
                  Registrarse
                </a>
              </li>
              <?php } ?>
              <!-- Button -->
             <!-- <li class="nav-item u-header__nav-item-btn">
                <a class="btn btn-sm btn-primary" href="#signupModalClassic" role="button"
                   data-modal-target="#signupModalClassic"
                   data-overlay-color="#151b26">
                  <span class="fa fa-user-circle mr-1"></span>
                  Signin
                </a>
              </li>
            End Button -->
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
