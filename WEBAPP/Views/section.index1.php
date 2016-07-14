<section class="" id="section_index1">
<!--INICIO DE NAV-->
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper black" >
        <a href="#!" class="brand-logo center"><img src="imagenes/logo_png.png" width="125" height="67" /></a>
        <a  href="#!" data-activates="mobile" class="button-collapse">
          <i class="right mdi-navigation-menu material-icons">arrow_forward</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#hola">Contactenos</a></li>
          <li><a href="#ubicanos">Ubicanos</a></li>
          <a class="waves-effect waves-light btn modal-trigger" href="#iniciar_sesion">Iniciar Sesion</a>
        </ul>
        <ul id="mobile" class="side-nav">
          <li><a href="#inicio">Inicio</a></li>
          <li><a href="#hola">Contactenos</a></li>
          <li><a href="#ubicanos">Ubicanos</a></li>
          <a class="waves-effect waves-light btn modal-trigger" href="#iniciar_sesion">Iniciar Sesion</a>
        </ul>
      </div>
    </nav>
  </div>
<!--FIN DE NAV-->

<!-- INICIO DE FORMULARIO LOGIN dentro de MODALS -->
  <div id="iniciar_sesion" class="modal">
    <div class="nav purple darken-2">
      <h5 class="center white-text">Ingresar al sistema</h5>
    </div>
    <div class="modal-content">
      <form action="validar.php" method="post">
        <table>
          <tr>
            <i class="material-icons prefix ">account_circle</i>
            <input id="usu" type="text" placeholder="Usuario" name="nombre" class="validate" required>
          </tr>
          <tr>
            <i class="material-icons" >vpn_key</i>
            <input id="contra" type="text" placeholder="Contraseña" name="contrasena" class="validate" required>
          </tr>
        </table>
        <br><button type="submit" name="sesion_vigilante" class="btn waves-effect purple darken-2" >Iniciar Sesión</button>
      </form>
      <a href="#!" class="modal-action modal-close waves-effect waves-grey btn-flat right">Cancelar<i class="material-icons right">send</i></a>
    </div>
  </div>
<!--FIN DE FORMULARIO LOGIN-->

<!-- INICIO DE SECTION SLIDER -->
  <div class="slider fullscreen" id="inicio">
      <ul class="slides">
        <li>
          <img src="imagenes/bolso.jpg">
          <div class="caption center-align">
            <h3 class="light grey-text text-lighten-3">Security Software</h3>
            <p>
              Texto
            </p>
          </div>
        </li>
        <li>
          <img src="imagenes/computer.jpg">
          <div class="caption left-align">
            <h3 class="light grey-text text-lighten-3">Security Software</h3>
            <h5 class="light grey-text text-lighten-3">Hola</h5>
          </div>
        </li>
        <li>
          <img src="imagenes/monte.jpg">
          <div class="caption right-align">
            <h3 class="light grey-text text-lighten-3">Security Software</h3>
            <h5 class="light grey-text text-lighten-3">Proceso</h5>
          </div>
        </li>
      </ul>
    </div>
<!-- FIN DE SE SECTION SLIDER -->
</section>
