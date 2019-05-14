<?php

/*
LLamadas a hojas de estilo, js y demas...
*/

function travelmate_files() {

 /*<!-- Google Fonts -->*/
 wp_enqueue_style('0-custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto:300,400,500');

 /*<!-- CSS Global Compulsory -->*/
 wp_enqueue_style('1-space-global-compulsory', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.css', array(), '1.1', 'all');

 /*<!-- CSS Implementing Plugins -->*/
 wp_enqueue_style('2-space-font-awesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/all.min.css', array(), '1.1', 'all');
 wp_enqueue_style('3-space-hs-megamenu', get_template_directory_uri() . '/assets/vendor/hs-megamenu/src/hs.megamenu.css', array(), '1.1', 'all');
 wp_enqueue_style('4-space-mailhu-custom-scrollbar', get_template_directory_uri() . '/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css', array(), '1.1', 'all');
 wp_enqueue_style('5-space-custom-box', get_template_directory_uri() . '/assets/vendor/custombox/dist/custombox.min.css', array(), '1.1', 'all');
 wp_enqueue_style('6-space-animate-min', get_template_directory_uri() . '/assets/vendor/animate.css/animate.min.css', array(), '1.1', 'all');
 wp_enqueue_style('6a-space-animate', get_template_directory_uri() . '/assets/vendor/animate.css/animate.css', array(), '1.1', 'all');
 wp_enqueue_style('7-space-slick', get_theme_file_uri() . '/assets/vendor/slick-carousel/slick/slick.css', array(), '1.1', 'all');
 wp_enqueue_style('8-space-cubeportfolio', get_theme_file_uri() . '/assets/vendor/cubeportfolio/css/cubeportfolio.min.css', array(), '1.1', 'all');
 wp_enqueue_style('9-space-parallax', get_theme_file_uri() . '/assets/vendor/dzsparallaxer/dzsparallaxer.css', array(), '1.1', 'all');

 /*<!-- CSS Space Template -->*/
 wp_enqueue_style('9-space-template', get_template_directory_uri() . '/assets/css/theme.css', array(), 'false', 'all');

 /*<!-- JS Global Compulsory -->*/
 wp_enqueue_media();
 wp_enqueue_script('0-Google-map', '//maps.googleapis.com/maps/api/js?key=AIzaSyA-tHLXRE7FJKliACGAjP4Jgb0aWz2VUiE', NULL, '1.0', true );
 wp_enqueue_script('0a-Google-Maps', get_theme_file_uri('/js/GoogleMaps.js') , array('jquery'), 'false' , true );

 wp_enqueue_script('0b-files-upload', get_theme_file_uri('/js/files-upload.js'), array( 'jquery' ), '1.0.0', true);

 wp_enqueue_script('1-vendor-jquery.min', get_theme_file_uri('/js/vendor/jquery/dist/jquery.min.js') , array('jquery'), 'false' , true );
 wp_enqueue_script('2-vendor-jquery-migrate.min', get_theme_file_uri('/js/vendor/jquery-migrate/dist/jquery-migrate.min.js') , array('jquery'), 'false' , true );
 wp_enqueue_script('3-vendor-popper.min', get_theme_file_uri('/js/vendor/popper.js/dist/umd/popper.min.js') , NULL , 'false' , true );
 wp_enqueue_script('4-vendor-bootstrap.min', get_theme_file_uri('/js/vendor/bootstrap/bootstrap.min.js') , array('jquery'), 'false' , true );

 /*<!-- JS Implementing Plugins -->*/
 wp_enqueue_script('4a-space-appear', get_theme_file_uri('js/vendor/appear.js') , array('jquery') , 'false' , true );

 wp_enqueue_script('5-vendor-hs.megamenu', get_theme_file_uri('/js/vendor/hs-megamenu/src/hs.megamenu.js') , NULL , 'false' , true );

 //wp_enqueue_script('6-vendor-validate.min.js', get_theme_file_uri('/js/vendor/jquery-validation/dist/jquery.validate.min.js') , array('jquery'), 'false' , true );

 wp_enqueue_script('7-vendor-jquery.mCustomScrollbar.concat.min', get_theme_file_uri('/js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') , array('jquery'), 'false' , true );
 wp_enqueue_script('8-vendor-custombox.min', get_theme_file_uri('/js/vendor/custombox/dist/custombox.min.js') , NULL , 'false' , true );
 wp_enqueue_script('9-vendor-custombox.legacy.min', get_theme_file_uri('/js/vendor/custombox/dist/custombox.legacy.min.js') , NULL , 'false' , true );
 //wp_enqueue_script('10-hs.validation.js', get_theme_file_uri('/js/components/hs.validation.js') , NULL, 'false' , true );

 wp_enqueue_script('11-malihu-scrollbar', get_theme_file_uri('/js/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') , array('jquery') , 'false' , true );

 wp_enqueue_script('12-space-slick', get_theme_file_uri('js/vendor/slick-carousel/slick/slick.js') , NULL , 'false' , true );
 wp_enqueue_script('13-space-cubeportfolio.min', get_theme_file_uri('js/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js') , array('jquery') , 'false' , true );
 wp_enqueue_script('14-space-dzsparallaxer', get_theme_file_uri('js/vendor/dzsparallaxer/dzsparallaxer.js') , array('jquery') , 'false' , true );

 /*<!-- JS Space -->*/
 wp_enqueue_script('12-space-hs.core', get_theme_file_uri('/js/hs.core.js') , NULL , 'false' , true );
 wp_enqueue_script('13-space-hs.header', get_theme_file_uri('/js/components/hs.header.js') , NULL , 'false' , true );
 wp_enqueue_script('14-space-hs.unfold', get_theme_file_uri('/js/components/hs.unfold.js') , NULL , 'false' , true );
 wp_enqueue_script('15-space-hs.validation', get_theme_file_uri('/js/components/hs.validation.js') , NULL , 'false' , true );
 wp_enqueue_script('16-space-hs.focus-state', get_theme_file_uri('/js/helpers/hs.focus-state.js') , NULL , 'false' , true );
 wp_enqueue_script('17-space-hs.malihu-scrollbar', get_theme_file_uri('/js/components/hs.malihu-scrollbar.js') , NULL , 'false' , true );
 wp_enqueue_script('18-space-hs.modal-window', get_theme_file_uri('/js/components/hs.modal-window.js') , NULL , 'false' , true );
 wp_enqueue_script('19-show-animation', get_theme_file_uri('/js/components/hs.show-animation.js') , NULL , 'false' , true );
 wp_enqueue_script('21-space-cubeportfolio', get_theme_file_uri('/js/components/hs.cubeportfolio.js') , NULL , 'false' , true );
 wp_enqueue_script('22-space-hs.go-to', get_theme_file_uri('/js/components/hs.go-to.js') , NULL , 'false' , true );
 wp_enqueue_script('23-hs.slick-carousel', get_theme_file_uri('/js/components/hs.slick-carousel.js') , NULL , 'false' , true );
 wp_enqueue_script('24-space-theme.min', get_theme_file_uri('js/theme.min.js') , array('jquery'), 'false' , true );

}

add_action('wp_enqueue_scripts','travelmate_files');

/*
Theme support
*/


function travelmate_features() {

  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_image_size('banderaMaxMini', 20, 20, true);
  add_image_size('banderaMini', 50, 50, true);
  add_image_size('iconsMini', 80, 80, true);
  add_image_size('avatarCover', 100, 100, true);
  add_image_size('homeDestinoCover', 500, 275, true);
  add_image_size('blogCover', 545, 275, true);
  add_image_size('pageDestinoCover', 560, 360, true);
  add_image_size('homeDestinoRegionalCover', 620, 350, true);
  add_image_size('pageTourCover', 1080, 450, true);
  add_image_size('pageBannernew', 1440, 600, true);
  add_image_size('pageBanner', 1920, 1080, true);
  
}

add_action('after_setup_theme', 'travelmate_features');

/*
Sidebar blog
*/

function travelmate_widget_setup() {

  register_sidebar(array(

    'name' => 'Sidebar Blog',
    'id' => 'sidebar-1',
    'class' => 'custom',
    'description' => 'Standard blog sibebar',
    'before_widget' => '<li id="%1$s" class="py-1">',
    'after_widget'  => "</li>\n",
    'before_title'  => '<h3 class="h5 mb-3 text-secondary">',
    'after_title'   => "</h3>\n",

  )
);

}

add_action('widgets_init','travelmate_widget_setup');

/*
Custom terms for taxonomy in cpt
*/

function travelmate_get_terms($postID, $term){

  $termsList = wp_get_post_terms($postID, $term, array(
    'orderby' => 'term_order', 'order' => 'ASC'
    )
     );
  $output = '';

        $i = 0;
        foreach($termsList as $term){
          $i++;
            if ($i > 1){ $output .= ', '; }
                $output .= '<a href ="'. get_term_link($term) . '">'. $term -> name . '</a>';
              }
         return $output;     
}

/*
  Google Maps Api key
*/

function universityMapKey($api) {
$api['key'] = 'AIzaSyA-tHLXRE7FJKliACGAjP4Jgb0aWz2VUiE';
return $api;

}

add_filter('acf/fields/google_map/api','universityMapKey');

/*
  User loggedin redirect to...


add_action('admin_init', 'redirectSubsTo');

  function redirectSubsTo() {
    
    //$viajeroEstado = get_field_object('estado_viajero');
    $ourCurrentUser = wp_get_current_user();

    if ($ourCurrentUser -> roles === 'subscriber') {
      wp_redirect(site_url('/inicia-tu-viaje-new/'));

    }

    elseif (count($ourCurrentUser -> roles) == 1 AND $ourCurrentUser -> roles[0] == 'subscriber')   {
      wp_redirect(site_url('/viajeros/'.strtolower($ourCurrentUser -> user_login)));
      exit;

    }

  }
*/

/*
  User loggein no admin bar
*/  

add_action('wp_loaded', 'noSubsAdminBar');

  function noSubsAdminBar() {
    
    $ourCurrentUser = wp_get_current_user();

    if ($ourCurrentUser -> ID <= 1 AND is_user_logged_in())   {
      show_admin_bar(TRUE);

    } else {

      show_admin_bar(FALSE);
    }

  }

/* Registro de valor de cotizador para filtros */

function my_get_posts()
{
  // valor 
  //$_POST['valor']. = id del select
  //id puedes buscar otros datos de la misma region
  //con el id o otro dato de la region realizas la consulta
  //imprimes las options

  $term1 = $_POST['valor'];

  $argsRegion1 = array(
      'post_type' => array('region'),
      'post_status' => 'publish',
      'order'=> 'ASC',
      'posts_per_page' => -1,
      'tax_query' => array(
        
                        array(
                              'taxonomy' => 'ubicacion_regiones',
                              'field'    => 'slug',
                              'terms'    => $term1,
                                    ),
                            ),
);
  echo '<option value="" >Selectione destino</option>';
       $postsRegion1 =  new WP_Query($argsRegion1);

  while ( $postsRegion1->have_posts() ) :
        $postsRegion1->the_post();
      echo '<option value="'.get_the_title().'" >'.get_the_title().'</option>';
    endwhile;

    $term2 = $_POST['valor'];

  $argsRegion2 = array(
      'post_type' => array('destino'),
      'post_status' => 'publish',
      'order'=> 'ASC',
      'posts_per_page' => -1,
      'tax_query' => array(
        
                        array(
                              'taxonomy' => 'ubicacion_destinos',
                              'field'    => 'slug',
                              'terms'    => $term2,
                                    ),
                            ),
);

       $postsRegion2 =  new WP_Query($argsRegion2);

  while ( $postsRegion2->have_posts() ) :
        $postsRegion2->the_post();
      echo '<option value="'.get_the_title().'" >'.get_the_title().'</option>';
    endwhile;

}

 add_action('wp_ajax_my_get_posts', 'my_get_posts');
 add_action('wp_ajax_nopriv_my_get_posts', 'my_get_posts');

 function my_get_posts1()
{

  $term3 = $_POST['valor'];

  $argsRutas = array(
      'post_type' => array('ruta'),
      'post_status' => 'publish',
      'order'=> 'ASC',
      'posts_per_page' => -1,
      'tax_query' => array(
        
                        array(
                              'taxonomy' => 'ubicacion_rutas',
                              'field'    => 'slug',
                              'terms'    => $term3,
                                    ),

                            ),
);
       $postsRutas =  new WP_Query($argsRutas); 
  echo '<option value="" >Selectione ruta</option>';
       
  while ( $postsRutas->have_posts() ) :
        $postsRutas->the_post();
      echo '<option value="'.get_the_ID().'" >'.get_the_title().'</option>';
    endwhile;
}

 add_action('wp_ajax_my_get_posts1', 'my_get_posts1');
 add_action('wp_ajax_nopriv_my_get_posts1', 'my_get_posts1');

//impresion de tabla del cotizador
 function my_get_posts2() {
 ?>

  <!-- Order Summary -->
  <div class="bg-gray-100 border rounded p-5">
    <!-- Title -->
    <h2 class="h5 mb-0">Resumen del viaje</h2>
    <!-- End Title -->
    <hr class="my-4">
    <!-- Product -->
    <div class="media">
      <div class="media-body">
        <h4 class="h6 mb-0">Información destino</h4>
        
        <small class="d-block text-secondary">Destino: <span id="destino"></span></small> 
        <small class="d-block text-secondary">Ruta: <span id="ruta"></span></small>                               
      </div>
    </div>
    <hr class="my-4">
    <div class="media">
      <div class="media-body">
        <h4 class="h6 mb-0">Información de viaje</h4>
        <small class="d-block text-secondary">Cantidad de personas: <span id="cantidad_personas"></span></small>
        <small class="d-block text-secondary">Estilo de viaje: <span id="estilo_viaje"></span></small>
        <small class="d-block text-secondary">Temporada: <span id="temporada_viaje"></span></small>          
      </div>
    </div>
    <hr class="my-4">
    <!-- Total -->
    <div class="media align-items-center mb-2">
      <div class="mr-3">
        <h4 class="h5 font-weight-normal mb-0">Sub total Viaje:</h4>
      </div>
    </div>

    <div class="media align-items-center mb-2">
      <div class="mr-3">
        <h4 class="h6 font-weight-normal mb-0">Vuelos</h4>
      </div>
      <div class="media-body text-right">
        <span id="vuelos">-</span>
      </div>
    </div>

    <div class="media align-items-center mb-2">
      <div class="mr-3">
        <h4 class="h6 font-weight-normal mb-0">Alojamiento</h4>
      </div>
      <div class="media-body text-right">
        <span id="alojamiento">-</span>
      </div>
    </div>

    <div class="media align-items-center mb-2">
      <div class="mr-3">
        <h4 class="h6 font-weight-normal mb-0">Translados</h4>
      </div>
      <div class="media-body text-right">
        <span id="translados">-</span>
      </div>
    </div>

    <div class="media align-items-center mb-2">
      <div class="mr-3">
        <h4 class="h6 font-weight-normal mb-0">Actividades</h4>
      </div>
      <div class="media-body text-right">
        <span id="actividades">-</span>
      </div>
    </div>

    <hr class="my-4">

    <div class="media align-items-center">
      <div class="mr-3">
        <h4 class="h5 font-weight-normal mb-0">Comisión Travelmate</h4>
        <small class="d-block text-secondary">$5 USD por Persona por Día</small>
      </div>
      <div class="media-body text-right">
        <span id="comision">-</span>
      </div>
    </div>
    <!-- End Total -->

    <hr class="my-4">

    <!-- Total -->
    <div class="media align-items-center">
      <div class="mr-3">
        <h4 class="h3">Total</h4>
      </div>
      <div class="media-body text-right">
        <span id="valortotal">-</span>
      </div>
    </div>
    <!-- End Total -->
    <!-- Credit Card -->
    <!-- <div id="epayCo">
      <script>
        var comision = document.getElementById("valortotal").value;
      </script>
      <form>
        <script
            src="https://checkout.epayco.co/checkout.js"
            class="epayco-button"
            data-epayco-key="491d6a0b6e992cf924edd8d3d088aff1"
            data-epayco-amount="50000"
            data-epayco-name="comision"
            data-epayco-description="comision"
            data-epayco-currency="cop"
            data-epayco-country="co"
            data-epayco-test="true"
            data-epayco-external="false"
            data-epayco-response="https://ejemplo.com/respuesta.html"
            data-epayco-confirmation="https://ejemplo.com/confirmacion">
        </script>
      </form>
    </div> -->
    <!-- End Credit Card -->        
   
  </div>

  <?php
 
}

 add_action('wp_ajax_my_get_posts2', 'my_get_posts2');
 add_action('wp_ajax_nopriv_my_get_posts2', 'my_get_posts2');

 //recepción de datos del formulario

 function my_ruta() {
  $datos = [];
  //echo "<script> alert('123')</script>";
  //traer todos los datos del post
  $idRuta = $_POST['ruta'];
  $personas = $_POST['personas'];
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $email = $_POST['email'];
  $continente = $_POST['continente'];
  $destino = $_POST['destino'];
  $nombre_de_ruta = $_POST['nombre_de_ruta'];
  $estiloViaje = $_POST['estiloViaje'];
  $temporada = $_POST['temporada'];
  $adultos = $_POST['adultos'];
  $ninos = $_POST['ninos'];
  $info_adicional = $_POST['info_adicional'];
  $motivo_viaje = $_POST['motivo_viaje'];
  //echo "<script> alert(' email en funcion:".$email."')</script>";

  //datos que se va a utilizar para el envio del email

  $datos['nombres']=$nombres;
  $datos['apellidos']=$apellidos;
  $datos['email']=$email;
  $datos['continente']=$continente;
  $datos['destino']=$destino;
  $datos['nombre_de_ruta']=$nombre_de_ruta;
  $datos['estiloViaje']=$estiloViaje;
  $datos['temporada']=$temporada;
  $datos['adultos']=$adultos;
  $datos['ninos']=$ninos;
  $datos['info_adicional']=$info_adicional;
  $datos['motivo_viaje']=$motivo_viaje;

//filtrar los datos "estilo de viaje" ***
if($estiloViaje == "Básico"){
  $valorVuelos = get_field('valor_vuelo_ruta_basico',$idRuta);
  $valorAlojamiento = get_field('valor_alojamiento_ruta_basico',$idRuta);
  $valorTranslados = get_field('valor_translado_ruta_basico',$idRuta);
  $valorActividades = get_field('valor_actividades_ruta_basico',$idRuta);
  $valorTotal = get_field('valor_total_ruta_basico',$idRuta);
  $comision = get_field('valor_porcentaje_ruta',$idRuta);

}
if($estiloViaje == "Confort"){
  $valorVuelos = get_field('valor_vuelo_ruta_confort',$idRuta);
  $valorAlojamiento = get_field('valor_alojamiento_ruta_confort',$idRuta);
  $valorTranslados = get_field('valor_translado_ruta_confort',$idRuta);
  $valorActividades = get_field('valor_actividades_ruta_confort',$idRuta);
  $valorTotal = get_field('valor_total_ruta_confort',$idRuta);
  $comision = get_field('valor_porcentaje_ruta',$idRuta);
}
if($estiloViaje == "Premiun"){
  $valorVuelos = get_field('valor_vuelo_ruta_premium',$idRuta);
  $valorAlojamiento = get_field('valor_alojamiento_ruta_premium',$idRuta);
  $valorTranslados = get_field('valor_translado_ruta_premium',$idRuta);
  $valorActividades = get_field('valor_actividades_ruta_premium',$idRuta);
  $valorTotal = get_field('valor_total_ruta_premiun',$idRuta);
  $comision = get_field('valor_porcentaje_ruta',$idRuta);
}

  //operar los datos **

$valorVuelos = $valorVuelos * $personas;
$valorAlojamiento = $valorAlojamiento * $personas;
$valorTranslados = $valorTranslados * $personas;
$valorActividades = $valorActividades * $personas;
$valorTotal = $valorTotal * $personas;
$comision = $comision * $personas;


  //mostrar los datos **
  echo "<script>

      $('#vuelos').text('$".$valorVuelos."');
      $('#alojamiento').text('$".$valorAlojamiento."');
      $('#translados').text('$".$valorTranslados."');
      $('#actividades').text('$".$valorActividades."');
      $('#valortotal').text('$".$valorTotal."');
      $('#comision').text('$".$comision."');

    </script>"; 

   //definir elementos necesarios para enviar el correo
   //este if te sirve como ejemplo para definir los otros datos veas como requeridos para enviar el correo.

$datos['nombres']=$nombres;
  $datos['apellidos']=$apellidos;
  $datos['email']=$email;
  $datos['continente']=$continente;
  $datos['destino']=$destino;
  $datos['nombre_de_ruta']=$nombre_de_ruta;
  $datos['estiloViaje']=$estiloViaje;
  $datos['temporada']=$temporada;
  $datos['adultos']=$adultos;
  $datos['ninos']=$ninos;
  $datos['info_adicional']=$info_adicional;
  $datos['motivo_viaje']=$motivo_viaje;


   if(!empty($datos['nombres']) and
      !empty($datos['apellidos']) and
      !empty($datos['email']) and
      !empty($datos['continente']) and
      !empty($datos['nombre_de_ruta']) and
      !empty($datos['estiloViaje']) and
      !empty($datos['temporada']) and
      !empty($datos['adultos']) and
      !empty($datos['ninos']) and
      !empty($datos['motivo_viaje'])){

    customMailTravel($datos);   
   } else {
     echo '<script> alert("Por favor llene todos los campos")</script>';
   }
  
     die();   
 }

 add_action('wp_ajax_my_ruta', 'my_ruta');
 add_action('wp_ajax_nopriv_my_ruta', 'my_ruta');

 /* Envio de mails a usuarios que cotizan */
function customMailTravel($datos){

  //declararlos para utilizarlos
  $nombres = $datos['nombres'];
  $apellidos = $datos['apellidos'];
  $email = $datos['email'];
  $continente = $datos['continente'];
  $destino = $datos['destino'];
  $nombre_de_ruta = $datos['nombre_de_ruta'];
  $estiloViaje = $datos['estiloViaje'];
  $temporada = $datos['temporada'];
  $adultos = $datos['adultos'];
  $ninos = $datos['ninos'];
  $info_adicional = $datos['info_adicional'];
  $motivo_viaje = $datos['motivo_viaje'];
  //echo "<script> alert('email en funct envio:".$email."')</script>";

  $toAdmin = 'portalwebtravelmate@gmail.com'; 
  $to = array($email,$toAdmin);
  $subject = 'Bienvenido a Travelmate';


    $message = '<h2>Gracias por cotizar en www.travelmate.com.co</h2>';

    $message .= '<p style="color:red;">Hola; ';
    $message .= $nombres. ' ' .$apellidos;
    $message .= '</p>';

    $message .= '<p style="color:red;">Email: ';
    $message .= $email;
    $message .= '</p>';

    $message .= '<p style="color:red;">Continente: ';
    $message .= $continente;
    $message .= '</p>';

    $message .= '<p style="color:red;">Destino: ';
    $message .= $destino;
    $message .= '</p>';

    $message .= '<p style="color:red;">Ruta: ';
    $message .= $nombre_de_ruta;
    $message .= '</p>';

    $message .= '<p style="color:red;">Estilo de viaje: ';
    $message .= $estiloViaje;
    $message .= '</p>';

    $message .= '<p style="color:red;">Temporada: ';
    $message .= $temporada;
    $message .= '</p>';

    $message .= '<p style="color:red;">Cantidad de adultos: ';
    $message .= $adultos;
    $message .= '</p>';

    $message .= '<p style="color:red;">Cantidad de niños: ';
    $message .= $ninos;
    $message .= '</p>';

    $message .= '<p style="color:red;">Información adicional: ';
    $message .= $info_adicional;
    $message .= '</p>';

    $message .= '<p style="color:red;">Motivo de viaje: ';
    $message .= $motivo_viaje;
    $message .= '</p>';

  $result = wp_mail( $to,  $subject, $message,"From: Travelmate");
  if( $result ){
    echo '<script> alert("Mensaje enviado")</script>';
  }else{
    //echo "fail mail";
    //echo $result;
    //
    //echo '<script> alert("Mensaje no fue enviado")</script>';
  }
}

function wpse27856_set_content_type(){
    return "text/html";
}
add_filter( 'wp_mail_content_type','wpse27856_set_content_type' );


//guardar confirmación post vuelo
function my_upload_afc_vuelo()
{
  $idImg = $_POST['id_img'];
  $idPost = $_POST['id_post'];
  //echo "<script> alert('".$idPost."')</script>";

  update_field("imagen_vuelo", $idImg, $idPost);
}

 add_action('wp_ajax_my_upload_afc_vuelo', 'my_upload_afc_vuelo');
 add_action('wp_ajax_nopriv_my_upload_afc_vuelo', 'my_upload_afc_vuelo');

//guardar confirmación post hotel
 function my_upload_afc_hotel()
{
  $idImg = $_POST['id_img'];
  $idPost = $_POST['id_post'];
  //echo "<script> alert('".$idPost."')</script>";

  update_field("imagenes_hoteles", $idImg, $idPost);
}

 add_action('wp_ajax_my_upload_afc_hotel', 'my_upload_afc_hotel');
 add_action('wp_ajax_nopriv_my_upload_afc_hotel', 'my_upload_afc_hotel');

//guardar confirmación post tour
 function my_upload_afc_tour()
{
  $idImg = $_POST['id_img'];
  $idPost = $_POST['id_post'];
  //echo "<script> alert('".$idPost."')</script>";

  update_field("imagenes_tours", $idImg, $idPost);
}

 add_action('wp_ajax_my_upload_afc_tour', 'my_upload_afc_tour');
 add_action('wp_ajax_nopriv_my_upload_afc_tour', 'my_upload_afc_tour');


 //files upload permission

 if ( current_user_can('contributor') && !current_user_can('upload_files') )
    add_action('admin_init', 'allow_contributor_uploads');
    function allow_contributor_uploads() {
      $contributor = get_role('contributor');
      $contributor->add_cap('upload_files');
}
?>



