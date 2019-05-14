<?php
get_header();

//if (is_user_logged_in()) {

  while(have_posts()) {
    the_post(); ?>
    
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <!-- Checkout Form Section -->
    <div class="container py-3">
      <div class="row">
        <div class="col-lg-4 order-lg-2 mb-lg-0 order-2">
          <!-- ========== Tabla ========== -->
          <?php my_get_posts2(); ?>
          <!-- ========== end Tabla ========== -->
        </div>

        <div class="col-lg-8 order-lg-1">
          <!-- Checkout Form -->
          <form class="js-validate"
                novalidate="novalidate">
            <div class="w-md-80 w-lg-80 text-center mx-md-auto">
              <h2 class="h3">Arma tu viaje</h2>
              <p>Los precios indicados a continuación son un presupuesto base que sirve para darte una idea del valor aproximado del viaje, y no configuran una cotización con precios fijos. Por lo tanto dichos costos están sujetos a cambios de tarifa según la fecha del viaje y la disponibilidad de los mismos.</p>
              
            </div>

            <?php if (!is_user_logged_in()) {?>

            <!-- nombres -->
            <div class="row border rounded p-5 mb-2">
              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Nombre
                    <span class="text-danger">*</span>
                  </label>

                  <div class="js-focus-state input-group form">
                    <input type="text" class="form-control form__input" name="Nombres" required
                   id ="Nombres" 
                   placeholder="Nombres"
                   aria-label="Nombres"
                   data-msg="Your password is invalid. Please try again."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">       
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Apellidos
                    <span class="text-danger">*</span>
                  </label>

                  <div class="js-focus-state input-group form">
                    <input type="text" class="form-control form__input" name="Apellidos" required
                   id="Apellidos" 
                   placeholder="Apellidos"
                   aria-label="Apellidos"
                   data-msg="Your password is invalid. Please try again."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">       
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Email
                    <span class="text-danger">*</span>
                  </label>
                  <div class="js-focus-state input-group form">
                    <input type="Email" class="form-control form__input" name="email" required
                   id="Email" 
                   placeholder="Email"
                   aria-label="Email"
                   data-msg="Your password is invalid. Please try again."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">       
                  </div>
                </div>
                <!-- End Input -->
              </div>
            </div>
            <?php } else {

              $current_user = wp_get_current_user();
        
              $nombres = $current_user->user_firstname;
              $apellidos = $current_user->user_lastname;
              $email = $current_user->user_email;

            }?> 

            <input type="hidden" id="nombre_logueado" value="<?php echo $nombres;?>">
            <input type="hidden" id="apellidos_logueado" value="<?php echo $apellidos;?>">
            <input type="hidden" id="email_logueado" value="<?php echo $email;?>"> 

            <!-- end nombres -->

            <!-- datos viaje 1-->
            <div class="row border rounded p-5 mb-2">
              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Continente
                    <span class="text-danger">*</span>
                  </label>

                  <div class="js-focus-state input-group form">
                    <select class="custom-select" name="destino_regional" required
                           id="Continente"
                           placeholder="Destino regional"
                           aria-label="Destino regional"
                           data-msg="Please enter a valid address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success"
                           onchange="cargarCategorias(this.value)" 
                           >
                      <?php
                       $tax_terms = get_terms('ubicacion_destinos', array('parent' => 0));
                       echo '<option value="" >Selectione un continente </option>';      
                       foreach ( $tax_terms as $tax_term ):  
                          echo '<option value="'.$tax_term->name.'">'.$tax_term->name.'</option>';   
                       endforeach;
                        ?>    
                    </select>       
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Destino
                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                      <i class="far fa-question-circle"></i>
                    </a>
                    <span class="text-danger">*</span>
                  </label>

                  <div class="js-focus-state input-group form">
                    <select id="rutaRegional" class="custom-select" name="ruta_regional" required

                           placeholder="Ruta regional"
                           aria-label="Ruta regional"
                           data-msg="Por favor escoje una ruta válida."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success"
                           onchange="cargarCategorias1(this.value)"
                           >
                    </select>       
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Ruta
                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                      <i class="far fa-question-circle"></i>
                    </a>
                    <span class="text-danger">*</span>
                  </label>
                  <div class="js-focus-state input-group form">
                    <select id="rutaRegional1"  class="custom-select" name="ruta_regional1" required
                           placeholder="Ruta regional1"
                           aria-label="Ruta regional1"
                           data-msg="Por favor escoje una ruta válida."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success"
                           onchange="cargarCategorias2()"
                           >     
                    </select>       
                  </div>
                </div>
                <!-- End Input -->
              </div>
            </div>  
            <!-- end datos viaje 2-->

            <!-- datos viaje 3-->
            <div class="row border rounded p-5 mb-2">
              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Estilo de viaje
                    <a data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                      <i class="far fa-question-circle"></i>
                    </a>
                    <span class="text-danger">*</span>
                    
                  </label>

                  <div class="js-focus-state input-group form">
                    <select class="custom-select" name="categoria" required
                           id="EstiloViaje"
                           placeholder="Categoría"
                           aria-label="Categoría"
                           data-msg="Please enter a valid address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success"
                           onchange="cargarLabelEstiloViaje(this.value)">
                           <?php
    
                       $terms2 = get_terms( 'categoria_de_viajero' );
                       echo '<option value="" >Selectione un estilo de viaje </option>';
                         if ( ! empty( $terms2 ) && ! is_wp_error( $terms2 ) ){
                            
                             foreach ( $terms2 as $term2 ) {
                               echo '<option value="'.$term2->name.'">'.$term2->name.'</option>';
                             }
                         }
                        ?> 
                    </select>       
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Temporada<a data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                      <i class="far fa-question-circle"></i>
                    </a>
                    <span class="text-danger">*</span>
                  </label>

                  <div class="js-focus-state input-group form">
                    <select class="custom-select" name="temporada" required
                           placeholder="Temporada"
                           aria-label="Temporada"
                           data-msg="Please enter a valid address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success"
                           onchange ="cargarLabelTemporadaViaje(this.value)">
                             <?php
                       $tax_terms3 = get_terms('temporadas'); 
                       echo '<option value="" >Selectione una temporada </option>';     
                       foreach ( $tax_terms3 as $tax_term3 ):  
                          echo '<option value="'.$tax_term3->name.'">'.$tax_term3->name.'</option>';
                              endforeach;
                          ?>   
                    </select>       
                  </div>
                </div>
                <!-- End Input -->
              </div>
            </div>
            <!-- end datos viaje 3-->

            <!-- datos viaje 4-->
            <div class="row border rounded p-5 mb-2">    
              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Número de adultos
                    <span class="text-danger">*</span>
                  </label>

                  <div class="js-focus-state input-group form">
                    <input class="form-control form__input" id ="Numero_adultos" name="Numero_adultos" type="number" required
                           placeholder="Número de adultos"
                           aria-label="Número de adultos"
                           data-msg="Please enter a valid address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success">
                  </div>
                </div>
                <!-- End Input -->
              </div>

              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-2">
                  <label class="h6 small d-block text-uppercase">
                    Número de niños
                    <span class="text-danger">*</span>
                  </label>

                  <div class="js-focus-state input-group form">
                    <input class="form-control form__input" id="Numero_ninos" name="Numero_ninos" type="number" required
                           placeholder="Número de niños"
                           aria-label="Número de niños"
                           data-msg="Please enter a valid address."
                           data-error-class="u-has-error"
                           data-success-class="u-has-success"
                           >
                  </div>
                </div>
                <!-- End Input -->
              </div>
                         
              <!-- End Input -->
              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Información adicional
                  </label>

                  <div class="js-focus-state input-group form">
                    <textarea class="form-control form__input" name="apartment" required
                           name="message" rows="5" cols="30"
                           id="infoViaje">
                    </textarea>       
                  </div>
                </div>
                <!-- End Input -->
              </div>
              <!-- End Input -->

              <!-- End Input -->
              <div class="col-md-6">
                <!-- Input -->
                <div class="js-form-message mb-6">
                  <label class="h6 small d-block text-uppercase">
                    Motivo del viaje
                    
                  </label>

                  <div class="js-focus-state input-group form">
                    <textarea class="form-control form__input" name="apartment" required
                           name="message" rows="5" cols="30"
                           id="motivoViaje">
                    </textarea>       
                  </div>
                </div>
                <!-- End Input -->
              </div>
              <!-- End Input -->
            </div> 
          </form>
        </div>
      </div>
    </div>
    <!-- End Checkout Form Section -->
    <div id="mostrar" ></div>
    <span id="vuelo"></span>

    <div class="container">
      <div class="row">
      <!-- end datos viaje 4-->
        <div class="col-md-8">
          <div class="g-recaptcha" data-sitekey="6LewFKEUAAAAAEd1D9cJ8xLHkFzetqIkWOR3HsVN">
          </div>
          <!-- Credit Card --> 
          <div id="cotizar" class="pt-1">
            <button type="button" class="btn btn-outline btn-block btn-info mb-6" onclick="cotizarValores()">
              Cotizar ya
            </button>
          </div>
        </div>
        <!-- End Credit Card -->
      <!-- End Checkout Form -->
      </div>
    </div>
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript">

  $(function () {
  $('[data-toggle="tooltip"]').tooltip()})
  
  function cargarCategorias(valor){
    //alert(valor);
    //$("#rutaRegional").remove();
    $("#rutaRegional").children().remove();
    $.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        'action': 'my_get_posts',
        'valor': valor,
      },
      success: function(data, textStatus, XMLHttpRequest)      {
        $("#rutaRegional").append(data);
      },
      complete: function(XMLHttpRequest, textStatus)      {
        //alert('complete');
      }
    });
    //alert(valor);
  }

  function cargarCategorias1(valor){
    //alert(valor);
    //$("#rutaRegional").remove();
    $("#destino").text(valor);
    $("#rutaRegional1").children().remove();
    $.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {
        'action': 'my_get_posts1',
        'valor': valor,
      },
      success: function(data, textStatus, XMLHttpRequest)      {
        $("#rutaRegional1").append(data);
      },
      complete: function(XMLHttpRequest, textStatus)      {
        //alert('complete');
      }
    });
  }

  function cargarCategorias2(){
  //alert(valor);
  valor = $("#rutaRegional1 option:selected").text();
  $("#ruta").text(valor);
    
  }

  function cargarLabelEstiloViaje(valor) {
    $("#estilo_viaje").text(valor);

  }

  function cargarLabelTemporadaViaje(valor) {
    $("#temporada_viaje").text(valor);

  }
  
  function cotizarValores(){
    
    // datos de usuarios
    nombres= $("#Nombres").text();
    if(nombres == ''){
    nombres= $("#nombre_logueado").val();
    }
    apellidos= $("#Apellidos").text();
    if(apellidos == ''){
    apellidos= $("#apellidos_logueado").val();
    }
    email= $("#Email").text();
    if(email == ''){
    email= $("#email_logueado").val(); 
    }
 
    // ruta, cantidad personas, estilo viaje
    temporada= $("#temporada_viaje").text(); //--
    numeroAdultos = $("#Numero_adultos").val(); //--
    numeroNinos = $("#Numero_ninos").val(); //--
    valorRuta = $("#rutaRegional1 option:selected").val(); //---
    estiloViaje = $("#estilo_viaje").text(); //--
    totalPersonas = parseInt(numeroNinos) + parseInt(numeroAdultos);
     
    // datos complementarios para email 
    continente= $("#Continente option:selected").text();
    destino= $("#destino").text(); 
    ruta= $("#ruta").text(); 
    infoAdicional= $("#infoViaje").val();
    motivoViaje= $("#motivoViaje").val();

    $("#cantidad_personas").text(totalPersonas);
      //valorRuta = 828;
    $.ajax({
      type: 'POST',
      url: "<?php echo admin_url('admin-ajax.php'); ?>",
      data: {

        'action': 'my_ruta',
        'ruta': valorRuta,
        'personas' : totalPersonas,
        'nombres' : nombres,
        'apellidos' : apellidos,
        'email': email,
        'continente': continente,
        'destino': destino,
        'nombre_de_ruta': ruta,
        'estiloViaje' : estiloViaje,
        'temporada': temporada,
        'adultos': numeroAdultos,
        'ninos': numeroNinos,
        'info_adicional': infoAdicional,
        'motivo_viaje': motivoViaje,
      },
      success: function(data, textStatus, XMLHttpRequest){
        $("#mostrar").append(data);
      },
      complete: function(XMLHttpRequest, textStatus){
        //alert('complete');
      }
    }); 
  }
</script>
<?php  } //}
get_footer();
?>