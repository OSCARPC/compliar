<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="msapplication-tap-highlight" content="no" />
        <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
        <link rel="stylesheet" type="text/css" href="css/index.css" />
		<link rel="stylesheet" type="text/css"  href="css/jquery.mobile-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.theme-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/temafsc_3.css">
		   <link rel="stylesheet"  type="text/css" href="css/jquery.mobile.external-png-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.icons-1.4.5.css">
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.inline-png-1.4.5.css"> 
		   <link rel="stylesheet" type="text/css"  href="css/jquery.mobile.structure-1.4.5.css">
		   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <title>Boton de Panico</title>
    </head>
    <body>
	


<div id="solicitar" data-role="page">
  <div data-role="header" data-position="fixed" data-theme="c" align="center" style="background-color:#C3EBBE;color:#000000;">
      Zona de Alerta <i class="fa fa-bell-o"></i>
  </div>
    <div data-role="content">
 <form  id="formulario" >
        <label style="color:#C71215;">Complete el formulario (*)</label>
        <input type="hidden" id="latitud" name="latitud" placeholder="Latitud">
        <input type="hidden" id="longitud" name="longitud" placeholder="Longitud" >
        <input type="text" id="datos" name="datos" placeholder="Datos Personales"  autocomplete="off" autofocus> 
        <input type="text" id="dni" name="dni" placeholder="Documento de Identidad (DNI)" maxlength="8" pattern="[0-9]{8}" title="Ingrese solo numeros , por favor!" autocomplete="off">  
        <input type="text" id="celular" name="celular" placeholder="Movil , Telefono" autocomplete="off">  
        <input type="text" id="direccion" name="direccion" placeholder="Direcci&oacute;n , Ubicaci&oacute;n , Referencia" autocomplete="off">          
            <select name="tipo" id="tipo" data-native-menu="false">
              <option value="00004">Accidente</option>
              <option value="00011">Ahogados</option>
              <option value="00009">Derrunbes</option>
              <option value="00008">Huaico</option>
              <option value="00002">Incendio</option>
              <option value="00010">Lluvias</option>
              <option value="00012">Oleaje Anomalos</option>
              <option value="00001">Robo</option>
              <option value="00003">Secuestro</option>
              <option value="00005">Violencia Familiar</option>
              <option value="00001">Otros</option>            </select> 
            <textarea name="observacion" id="observacion" placeholder="Observaci&oacute;n , recomendaci&oacute;n"></textarea>  		<input type="submit" value="Guardar Informacion" id="botonLogin">
        </form>
		<div id="listaDatos" align="center"></div>
    </div>
  <div data-role="footer" data-theme="a" data-position="fixed" >
   <div data-role="navbar" >
     <ul>
       <li><a  data-icon="home" onClick="regresar();" >Regresar</a></li>     
     </ul>
   </div>
  </div>
</div>

  <br>

	<div data-role="footer" data-theme="c" data-position="fixed" align="center" style="background-color:#C3EBBE;color:#000000;font-size:10px;">
   <i class="fa fa-copyright fa-1x"></i> COER PIURA 2016 <br>
   Versión Testing 1.0
	</div>



		
	   <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	   <script type="text/javascript" src="js/login.js"></script>
       <script type="text/javascript" src="js/jquery.mobile-1.4.5.js"></script>		
		<script type="text/javascript" src="js/geolocalizacion.js"></script>
        <script type="text/javascript" src="cordova.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script type="text/javascript">
            app.initialize();
        </script>
    </body>
</html>
