<?php
include '../../conexion.php'; 

$mysqli=conectar(1);

$mysqli->real_query("SELECT * FROM crr_temporada ORDER BY activa DESC");
   
 $ConsUsuario = $mysqli->use_result();

?>
<h1>Temporadas</h1>
<a>* Crear Temporada</a>
<table border=1>
	<tr>
		<td>Temporada</td>
		<td>Activa</td>
		
	</tr>
<?php
   while ($fila = $ConsUsuario->fetch_object())
					 {
                       echo "<tr>
						<td>".$fila->descripcion."</td>
						<td>".$fila->Activa."</td>
					</tr>";
}
?>
</table>


<!--  ******************************************************** -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FadeIn Popup jQuery Demo</title>
<style>
#content {
    width: 900px;
    margin: 0px auto;
    padding: 2em 1em;
}

#header {
	background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    margin-bottom: 10px;
    text-align: center;
    width: 900px;
    min-height: 150px;
}

#column-right {
	background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    float: right;
    min-height: 225px;
    margin-bottom: 10px;
    overflow: hidden;
    text-align: center;
    width: 180px;
	padding-top:10px;
}

#central {
	background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    float: left;
    min-height: 225px;
    margin-bottom: 10px;
    margin-right: 10px;
    width: 685px;
	padding:10px;
}

#footer {
	background-color: #EBE9EA;
    border: 1px solid #D2D2D2;
    border-radius: 8px 8px 8px 8px;
    margin-top: 10px;
    text-align: center;
    clear: left;
    width: 900px;
    min-height: 100px;
}

#popup {
	left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 1001;
}

.content-popup {
	margin:0px auto;
	margin-top:120px;
	position:relative;
	padding:10px;
	width:500px;
	min-height:250px;
	border-radius:4px;
	background-color:#FFFFFF;
	box-shadow: 0 2px 5px #666666;
}

.content-popup h2 {
	color:#48484B;
	border-bottom: 1px solid #48484B;
    margin-top: 0;
    padding-bottom: 4px;
}

.popup-overlay {
	left: 0;
    position: absolute;
    top: 0;
    width: 100%;
    z-index: 999;
	display:none;
	background-color: #777777;
    cursor: pointer;
    opacity: 0.7;
}

.close {
	position: absolute;
    right: 15px;
}
</style>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#open').click(function(){
		$('#popup').fadeIn('slow');
		$('.popup-overlay').fadeIn('slow');
		$('.popup-overlay').height($(window).height());
		return false;
	});
	
	$('#close').click(function(){
		$('#popup').fadeOut('slow');
		$('.popup-overlay').fadeOut('slow');
		return false;
	});
});
</script>
</head>
<body>
<div id="content">
	<div id="header">Cabecera</div>
	<div id="central">Contenido</div>
	<div id="column-right"><a href="#" id="open">click aqui</a></div>
	<div id="footer">Pie de p&aacute;gina</div>
</div>
<div id="popup" style="display: none;">
    <div class="content-popup">
        <div class="close"><a href="#" id="close"><img src="images/close.png"/></a></div>
        <div>
        	<h2>Contenido POPUP</h2>
            <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original.</p>
            <div style="float:left; width:100%;">
    	<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FBlog-Jose-Aguilar-Desarrollo-Web%2F269898786396364&send=false&layout=standard&width=450&show_faces=false&font=lucida+grande&colorscheme=light&action=like&height=35&appId=283652475068166" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe>
    </div>
        </div>
    </div>
</div>
<div class="popup-overlay"></div>
</body>
</html>
