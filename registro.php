<?php
  include "validaciones.php"; //Revisar validaciones, no imprime errores de registro.
  $errores = [];
  $nameOk = "";

  if($_POST){
      $errores = validarRegistro($_POST);
      $nameOk = trim($_POST["name"]);

      if(empty($errores)){
      }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo-registro.css">
    <title>FREESTYLE | REGISTRO </title>
  </head>


    <header class="main-header">
       <nav class="nav-header">
         <div class="title">
          <h1 class="titleF"><a href="home.php" style="color: #FFC82B"> F R E E S T Y L E</a></h1>    <!--TITULO-->
         </div>
         <ul class="lista">
           <li class="item"><a class="items" href="registro.php">REGISTRATE!</a></li>
           <li class="item"><a class="items" href="login.php">LOGIN</a></li>
         </ul>
       </nav>
     </header>

    <div class="cabecera">
      <header>
        <h1>Crea una cuenta</h1>
        <h2>y empezá a disfrutar Freestyle!</h2>
      </header>
    </div>

    <div class="container">
    <form class="formulario" action="index.html" method="post">
        <ul class="form-group">
          <?php foreach ($errores as $error): ?>
            <li><?= $error  ?></li>
          <?php endforeach; ?>
        </ul>
      <div class="form-row align-items-center">
        <!-- nombre -->
        <div class="col-sm-3 my-1">
          <label for="name" class="mb-4 mr-sm-4"></label>
          <input type="text" class="form-control" id="name" placeholder="Nombre">
        </div>

        <!-- Apellido -->
        <div class="col-sm-3 my-1">
          <label for="lastname" class="mb-4 mr-sm-4"></label>
          <input type="text" class="form-control" id="lastname" placeholder="Apellido">
        </div>
      </div>

        <!-- mail -->
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail4"></label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
      </div>

        <!-- contraseña -->
      <div class="form-row align-items-center">
        <div class="col-sm-3 my-1">
          <label for="inputPassword4" class="mb-4 mr-sm-4"></label>
          <input type="password" class="form-control" id="pass1" placeholder="Contraseña">
        </div>
        <div class="col-sm-3 my-1">
          <label for="inputPassword4" class="mb-4 mr-sm-4"></label>
          <input type="password" class="form-control" id="pass2" placeholder="Repetir contraseña">
        </div>
      </div>

        <!-- género -->
        <br>
        <div class="form-check form-check-inline" id="padre">
          <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="mujer">
          <label class="form-check-label" for="gridCheck">
            Mujer
          </label>
        </div>
        <div class="form-check form-check-inline" id="padre">
          <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="hombre">
          <label class="form-check-label" for="gridCheck">
            Hombre
          </label>
        </div>
        <div class="form-check form-check-inline" id="padre">
          <input class="form-check-input" name="gender" type="checkbox" id="gridCheck" value="otro">
          <label class="form-check-label" for="gridCheck">
            Otro
          </label>
        </div>

          <!-- seleccion de pais -->

         <div class="registro-pais">
            <label for="country">Selecciona tu País: </label>
            <select class="paises" name="country">
              <option value="AF">Afganistán</option>
                <option value="AL">Albania</option>
                <option value="DE">Alemania</option>
                <option value="AD">Andorra</option>
                <option value="AO">Angola</option>
                <option value="AI">Anguilla</option>
                <option value="AQ">Antártida</option>
                <option value="AG">Antigua y Barbuda</option>
                <option value="AN">Antillas Holandesas</option>
                <option value="SA">Arabia Saudí</option>
                <option value="DZ">Argelia</option>
                <option value="AR" selected>Argentina</option>
                <option value="AM">Armenia</option>
                <option value="AW">Aruba</option>
                <option value="AU">Australia</option>
                <option value="AT">Austria</option>
                <option value="AZ">Azerbaiyán</option>
                <option value="BS">Bahamas</option>
                <option value="BH">Bahrein</option>
                <option value="BD">Bangladesh</option>
                <option value="BB">Barbados</option>
                <option value="BE">Bélgica</option>
                <option value="BZ">Belice</option>
                <option value="BJ">Benin</option>
                <option value="BM">Bermudas</option>
                <option value="BY">Bielorrusia</option>
                <option value="MM">Birmania</option>
                <option value="BO">Bolivia</option>
                <option value="BA">Bosnia y Herzegovina</option>
                <option value="BW">Botswana</option>
                <option value="BR">Brasil</option>
                <option value="BN">Brunei</option>
                <option value="BG">Bulgaria</option>
                <option value="BF">Burkina Faso</option>
                <option value="BI">Burundi</option>
                <option value="BT">Bután</option>
                <option value="CV">Cabo Verde</option>
                <option value="KH">Camboya</option>
                <option value="CM">Camerún</option>
                <option value="CA">Canadá</option>
                <option value="TD">Chad</option>
                <option value="CL">Chile</option>
                <option value="CN">China</option>
                <option value="CY">Chipre</option>
                <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                <option value="CO">Colombia</option>
                <option value="KM">Comores</option>
                <option value="CG">Congo</option>
                <option value="CD">Congo, República Democrática del</option>
                <option value="KR">Corea</option>
                <option value="KP">Corea del Norte</option>
                <option value="CI">Costa de Marfíl</option>
                <option value="CR">Costa Rica</option>
                <option value="HR">Croacia (Hrvatska)</option>
                <option value="CU">Cuba</option>
                <option value="DK">Dinamarca</option>
                <option value="DJ">Djibouti</option>
                <option value="DM">Dominica</option>
                <option value="EC">Ecuador</option>
                <option value="EG">Egipto</option>
                <option value="SV">El Salvador</option>
                <option value="AE">Emiratos Árabes Unidos</option>
                <option value="ER">Eritrea</option>
                <option value="SI">Eslovenia</option>
                <option value="ES">España</option>
                <option value="US">Estados Unidos</option>
                <option value="EE">Estonia</option>
                <option value="ET">Etiopía</option>
                <option value="FJ">Fiji</option>
                <option value="PH">Filipinas</option>
                <option value="FI">Finlandia</option>
                <option value="FR">Francia</option>
                <option value="GA">Gabón</option>
                <option value="GM">Gambia</option>
                <option value="GE">Georgia</option>
                <option value="GH">Ghana</option>
                <option value="GI">Gibraltar</option>
                <option value="GD">Granada</option>
                <option value="GR">Grecia</option>
                <option value="GL">Groenlandia</option>
                <option value="GP">Guadalupe</option>
                <option value="GU">Guam</option>
                <option value="GT">Guatemala</option>
                <option value="GY">Guayana</option>
                <option value="GF">Guayana Francesa</option>
                <option value="GN">Guinea</option>
                <option value="GQ">Guinea Ecuatorial</option>
                <option value="GW">Guinea-Bissau</option>
                <option value="HT">Haití</option>
                <option value="HN">Honduras</option>
                <option value="HU">Hungría</option>
                <option value="IN">India</option>
                <option value="ID">Indonesia</option>
                <option value="IQ">Irak</option>
                <option value="IR">Irán</option>
                <option value="IE">Irlanda</option>
                <option value="BV">Isla Bouvet</option>
                <option value="CX">Isla de Christmas</option>
                <option value="IS">Islandia</option>
                <option value="KY">Islas Caimán</option>
                <option value="CK">Islas Cook</option>
                <option value="CC">Islas de Cocos o Keeling</option>
                <option value="FO">Islas Faroe</option>
                <option value="HM">Islas Heard y McDonald</option>
                <option value="FK">Islas Malvinas</option>
                <option value="MP">Islas Marianas del Norte</option>
                <option value="MH">Islas Marshall</option>
                <option value="UM">Islas menores de Estados Unidos</option>
                <option value="PW">Islas Palau</option>
                <option value="SB">Islas Salomón</option>
                <option value="SJ">Islas Svalbard y Jan Mayen</option>
                <option value="TK">Islas Tokelau</option>
                <option value="TC">Islas Turks y Caicos</option>
                <option value="VI">Islas Vírgenes (EEUU)</option>
                <option value="VG">Islas Vírgenes (Reino Unido)</option>
                <option value="WF">Islas Wallis y Futuna</option>
                <option value="IL">Israel</option>
                <option value="IT">Italia</option>
                <option value="JM">Jamaica</option>
                <option value="JP">Japón</option>
                <option value="JO">Jordania</option>
                <option value="KZ">Kazajistán</option>
                <option value="KE">Kenia</option>
                <option value="KG">Kirguizistán</option>
                <option value="KI">Kiribati</option>
                <option value="KW">Kuwait</option>
                <option value="LA">Laos</option>
                <option value="LS">Lesotho</option>
                <option value="LV">Letonia</option>
                <option value="LB">Líbano</option>
                <option value="LR">Liberia</option>
                <option value="LY">Libia</option>
                <option value="LI">Liechtenstein</option>
                <option value="LT">Lituania</option>
                <option value="LU">Luxemburgo</option>
                <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                <option value="MG">Madagascar</option>
                <option value="MY">Malasia</option>
                <option value="MW">Malawi</option>
                <option value="MV">Maldivas</option>
                <option value="ML">Malí</option>
                <option value="MT">Malta</option>
                <option value="MA">Marruecos</option>
                <option value="MQ">Martinica</option>
                <option value="MU">Mauricio</option>
                <option value="MR">Mauritania</option>
                <option value="YT">Mayotte</option>
                <option value="MX">México</option>
                <option value="FM">Micronesia</option>
                <option value="MD">Moldavia</option>
                <option value="MC">Mónaco</option>
                <option value="MN">Mongolia</option>
                <option value="MS">Montserrat</option>
                <option value="MZ">Mozambique</option>
                <option value="NA">Namibia</option>
                <option value="NR">Nauru</option>
                <option value="NP">Nepal</option>
                <option value="NI">Nicaragua</option>
                <option value="NE">Níger</option>
                <option value="NG">Nigeria</option>
                <option value="NU">Niue</option>
                <option value="NF">Norfolk</option>
                <option value="NO">Noruega</option>
                <option value="NC">Nueva Caledonia</option>
                <option value="NZ">Nueva Zelanda</option>
                <option value="OM">Omán</option>
                <option value="NL">Países Bajos</option>
                <option value="PA">Panamá</option>
                <option value="PG">Papúa Nueva Guinea</option>
                <option value="PK">Paquistán</option>
                <option value="PY">Paraguay</option>
                <option value="PE">Perú</option>
                <option value="PN">Pitcairn</option>
                <option value="PF">Polinesia Francesa</option>
                <option value="PL">Polonia</option>
                <option value="PT">Portugal</option>
                <option value="PR">Puerto Rico</option>
                <option value="QA">Qatar</option>
                <option value="UK">Reino Unido</option>
                <option value="CF">República Centroafricana</option>
                <option value="CZ">República Checa</option>
                <option value="ZA">República de Sudáfrica</option>
                <option value="DO">República Dominicana</option>
                <option value="SK">República Eslovaca</option>
                <option value="RE">Reunión</option>
                <option value="RW">Ruanda</option>
                <option value="RO">Rumania</option>
                <option value="RU">Rusia</option>
                <option value="EH">Sahara Occidental</option>
                <option value="KN">Saint Kitts y Nevis</option>
                <option value="WS">Samoa</option>
                <option value="AS">Samoa Americana</option>
                <option value="SM">San Marino</option>
                <option value="VC">San Vicente y Granadinas</option>
                <option value="SH">Santa Helena</option>
                <option value="LC">Santa Lucía</option>
                <option value="ST">Santo Tomé y Príncipe</option>
                <option value="SN">Senegal</option>
                <option value="SC">Seychelles</option>
                <option value="SL">Sierra Leona</option>
                <option value="SG">Singapur</option>
                <option value="SY">Siria</option>
                <option value="SO">Somalia</option>
                <option value="LK">Sri Lanka</option>
                <option value="PM">St Pierre y Miquelon</option>
                <option value="SZ">Suazilandia</option>
                <option value="SD">Sudán</option>
                <option value="SE">Suecia</option>
                <option value="CH">Suiza</option>
                <option value="SR">Surinam</option>
                <option value="TH">Tailandia</option>
                <option value="TW">Taiwán</option>
                <option value="TZ">Tanzania</option>
                <option value="TJ">Tayikistán</option>
                <option value="TF">Territorios franceses del Sur</option>
                <option value="TP">Timor Oriental</option>
                <option value="TG">Togo</option>
                <option value="TO">Tonga</option>
                <option value="TT">Trinidad y Tobago</option>
                <option value="TN">Túnez</option>
                <option value="TM">Turkmenistán</option>
                <option value="TR">Turquía</option>
                <option value="TV">Tuvalu</option>
                <option value="UA">Ucrania</option>
                <option value="UG">Uganda</option>
                <option value="UY">Uruguay</option>
                <option value="UZ">Uzbekistán</option>
                <option value="VU">Vanuatu</option>
                <option value="VE">Venezuela</option>
                <option value="VN">Vietnam</option>
                <option value="YE">Yemen</option>
                <option value="YU">Yugoslavia</option>
                <option value="ZM">Zambia</option>
                <option value="ZW">Zimbabue</option>
            </select>
          </div>

        <!-- interses -->

        <div class="registro-intereses">
            <div class="tipo">
              <label for="intereses">Decinos que te interesa?: </label>
            </div>
              <section class="int-group">
                <div class="group">
                  <input class="cb" type="checkbox" name="interes" value="cine"> Peliculas
                </div>
                <div class="group">
                  <input class="cb" type="checkbox" name="interes" value="videojuegos"> Deportes
                </div>
                <div class="group">
                  <input class="cb" type="checkbox" name="interes" value="series"> Musica
                </div>
              </section>
              <section class="int-group">
                <div class="group">
                  <input class="cb" type="checkbox" name="interes" value="artista"> Lectura
                </div>
                <div class="group">
                  <input class="cb" type="checkbox" name="interes" value="comics"> Series
                </div>
                <div class="group">
                  <input class="cb" type="checkbox" name="interes" value="musica"> Arte
                </div>
              </section>
          </div>
        <br>
        <br>

        <!-- Boton registro -->

        <button type="submit" class="btn btn-primary">Registrate</button>
    </form>
      <br>
      <p>Ya estás registrado? <a href="login.php" style="color: #FFC82B">Iniciar sesión</a></p>
    </div>

      <!-- footer -->

      <div class="foot">
        <footer>© 2019 Digital House Argentina, Todos los derechos reservados. <a href="tyc" class="items">Términos y Condiciones</a> | <a href="pdp" class="items">Políticas de Privacidad</a></footer>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
