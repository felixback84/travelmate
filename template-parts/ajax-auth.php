<!-- Signup Modal Window -->
<div id="signupModalClassic" class="js-signup-modal u-modal-window">
  <!-- Modal Close Button -->
  <button class="btn btn-sm btn-icon btn-text-secondary u-modal-window__close" type="button" onclick="Custombox.modal.close();">
    <span class="fas fa-times"></span>
  </button>
  <!-- End Modal Close Button -->
  <!-- Content -->
  <div class="p-9">
   <!-- <form class="js-validate"> -->
      <!-- Signin -->
      <form id="signin" class="js-validate" action="signin" method="post" data-target-group="idForm">
        <!-- Title -->
        <header class="text-center mb-5">
          <h2 class="h4 mb-0">Por favor ingresa</h2>
          <p>Ingresa a tu cuenta aquí</p>
        </header>
        <!-- End Title -->

        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group form">
            <div class="input-group-prepend form__prepend">
              <span class="input-group-text form__text">
                <span class="fa fa-user form__text-inner"></span>
              </span>  
            </div>
            <?php wp_nonce_field('ajax-signin-nonce', 'security-signin'); ?>
            <input type="email" 
                   class="form-control form__input" 
                   name="email-signin" 
                   required
                   placeholder="Email"
                   aria-label="Email"
                   data-msg="Por favor ingrese una dirección valida"
                   data-error-class="u-has-error"
                   data-success-class="u-has-success"
                   id="email-signin">
          </div>
        </div>
        <!-- End Input -->
        <!-- Input -->
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group form">
            <div class="input-group-prepend form__prepend">
              <span class="input-group-text form__text">
                <span class="fa fa-lock form__text-inner"></span>
              </span>
            </div>
            <input type="password" 
                   class="form-control form__input" 
                   name="password-signin" 
                   required
                   placeholder="Password"
                   aria-label="Password"
                   data-msg="Tu password es invalido. Por favor intentalo de nuevo."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success"
                   id="password-signin">
          </div>
        </div>
        <!-- End Input -->
        <div class="row mb-3">
          <div class="col-12">
            <a class="js-animation-link float-right" 
               href=""
               data-target="#forgotPassword"
               data-link-group="idForm"
               data-animation-in="fadeIn">Olvidaste tu contraseña</a>
          </div>
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-block btn-primary">Ingresar</button>
        </div>

        <div class="text-center mb-3">
          <p class="text-muted">
            ¿Aún no tienes cuenta?
            <a class="js-animation-link" 
               href=""
               data-target="#signup"
               data-link-group="idForm"
               data-animation-in="fadeIn">Regístrate
            </a>
          </p>
        </div>

        <!-- Divider -->
        <div class="text-center u-divider-wrapper my-3">
          <span class="u-divider u-divider--xs u-divider--text">O</span>
        </div>
        <!-- End Divider -->

        <!-- Signin Social Buttons -->
        <div class="row mx-gutters-2 mb-4">
          <div class="col-sm-12 mb-2 mb-sm-0">
            <button type="button" class="btn btn-block btn-facebook">
              <span class="fab fa-facebook-f mr-2"></span>
              Signin with Facebook
            </button>
          </div>
        </div>
        <!-- End Signin Social Buttons -->
      </form>
      <!-- End Signin -->

      <!-- Signup -->
      <form id="signup" style="display: none; opacity: 0;" class="js-validate" action="signup" method="post" data-target-group="idForm">
      <!--<div id="signup"  data-target-group="idForm">-->
        <!-- Title -->
        <header class="text-center mb-5">
          <h2 class="h4 mb-0">Por favor regístrate</h2>
          <p>Llena todos los campos para empezar</p>
        </header>
        <!-- End Title -->

        <!-- Input -->
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group form">
            <div class="input-group-prepend form__prepend">
              <span class="input-group-text form__text">
                <span class="fa fa-user form__text-inner"></span>
              </span>
            </div>
            <?php wp_nonce_field('ajax-signup-nonce', 'security-signup'); ?>
            <input type="email" 
                   class="form-control form__input" 
                   name="email-signup" 
                   required
                   placeholder="Email"
                   aria-label="Email"
                   data-msg="Por favor ingrese una dirección valida"
                   data-error-class="u-has-error"
                   data-success-class="u-has-success"
                   id="email-signup">
          </div>
        </div>

        <!-- Input -->

        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group form">
            <div class="input-group-prepend form__prepend">
              <span class="input-group-text form__text">
                <span class="fa fa-user form__text-inner"></span>
              </span>  
            </div>
            <input type="text" 
                   class="form-control form__input" 
                   name="username-signup" 
                   required
                   placeholder="Nombre de usuario"
                   aria-label="Nombre de usuario"
                   data-msg="Este nombre de usuario ya existe."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success"
                   id="username-signup">
          </div>
        </div>

        <!-- End Input -->

        <!-- Input -->
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group form">
            <div class="input-group-prepend form__prepend">
              <span class="input-group-text form__text">
                <span class="fa fa-lock form__text-inner"></span>
              </span>
            </div>
            <input type="password" 
                   class="form-control form__input" 
                   name="password-signup" 
                   required
                   placeholder="Password"
                   aria-label="Password"
                   data-msg="Tu password es invalido. Por favor intentalo de nuevo."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success"
                   id="password-signup">          
          </div>
        </div>
        <!-- End Input -->

        <!-- Input -->
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group form">
            <div class="input-group-prepend form__prepend">
              <span class="input-group-text form__text">
                <span class="fa fa-key form__text-inner"></span>
              </span>
            </div>
            <input type="password" 
                   class="form-control form__input" 
                   name="password-confirm-signup" 
                   required
                   placeholder="Confirma password"
                   aria-label="Confirma password"
                   data-msg="El password no coincide."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success"
                   id="password-confirm-signup">
          </div>
        </div>
        <!-- End Input -->

        <div class="mb-3">
          <button type="submit" class="btn btn-block btn-primary">Regístrate</button>
        </div>

        <div class="text-center mb-3">
          <p class="text-muted">
            ¿Ya tienes cuenta?
            <a class="js-animation-link" 
               href=""
               data-target="#signin"
               data-link-group="idForm"
               data-animation-in="fadeIn">Ingresa
            </a>
          </p>
        </div>

        <!-- Divider -->
        <div class="text-center u-divider-wrapper my-3">
          <span class="u-divider u-divider--xs u-divider--text">O</span>
        </div>
        <!-- End Divider -->

        <!-- Signup Social Buttons -->
        <div class="row mx-gutters-2 mb-4">
          <div class="col-sm-12 mb-2 mb-sm-0">
            <button type="button" class="btn btn-block btn-facebook">
              <span class="fab fa-facebook-f mr-2"></span>
              Signup with Facebook
            </button>
          </div>
        </div>
        <!-- End Signup Social Buttons -->
      <!--</div>-->
      </form>
      <!-- End Signup -->

      <!-- Forgot Password -->
      <form id="forgotPassword" style="display: none; opacity: 0;" class="js-validate" action="forgotPassword" method="post" data-target-group="idForm">
        <!-- Title -->
        <header class="text-center mb-5">
          <h2 class="h4 mb-0">Recupera tu cuenta</h2>
          <p>Ingresa tu email y te enviaremos unas instrucciones</p>
        </header>
        <!-- End Title -->

        <!-- Input -->
        <div class="js-form-message mb-3">
          <div class="js-focus-state input-group form">
            <div class="input-group-prepend form__prepend">
              <span class="input-group-text form__text">
                <span class="fa fa-user form__text-inner"></span>
              </span>
            </div>
            <input type="email" 
                   class="form-control form__input" 
                   name="email" 
                   required
                   placeholder="Email"
                   aria-label="Email"
                   data-msg="Please enter a valid email address."
                   data-error-class="u-has-error"
                   data-success-class="u-has-success">
          </div>
        </div>
        <!-- End Input -->

        <div class="mb-3">
          <button type="submit" class="btn btn-block btn-primary">Recuperar cuenta</button>
        </div>

        <div class="text-center mb-3">
          <p class="text-muted">
            ¿Ya tienes cuenta? 
            <a class="js-animation-link" 
               href=""
               data-target="#signin"
               data-link-group="idForm"
               data-animation-in="fadeIn">Ingresa
            </a>
          </p>
        </div>
      </form>
      <!-- End Forgot Password -->
    <!--</form>-->
  </div>
  <!-- End Content -->
</div>
<!-- End Signup Modal Window -->



