<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" type="text/css" href="{{url('css/app.css')}}"/>
  <title>Pagina principal</title>
  <style media="screen">
  .nav {
    padding: 15px;
    list-style-type: none;
    text-align: center;
    text-decoration: none;
  }

  .nav li {
    display: inline-block;
    font-size: 20px;
    padding-left: 20px;
    padding-right: 20px;
    text-decoration: none;
  }
  a {
    color : black;
  }
  </style>
</head>
<body style="background-color:white;">
  <div class="container">

    <div class="row">
      <div class="offset-md-3 col-md-6" style="padding-bottom:15px;margin-top:10px;">
        <img class="rounded mx-auto d-block" src="xampp_logo.png" alt="Img" width="200" height="200">
      </div>
      <div class="col-md-12">
        <h1>
          <p class="text-center font-weight-bold">XAMPP</p>
        </h1>
      </div>
      <div class="col-md-12">
        <ul class="nav">
          <li style="color:black;">
            <img class="rounded mx-auto d-block" src="phpmyadmin.png" alt="Img" width="32" height="32"><a href="/phpmyadmin">phpMyadmin</a></img>
          </li>
        </ul>
      </div>
      <!-- <div class="offset-md-4 col-md-4" style="padding-bottom:20px;">
      <div class="input-group">
      <input type="text" class="form-control" placeholder="Buscar.." id="buscador"/>

    </div>
  </div> -->
  <div class="col-md-2"></div>
</div>
<div class="row" id="contenedor_proyectos">

  @foreach($dirs as $dir)
  <div class="col-md-4">
    <div class="card">
      <div class="card-header">
        <h5>{{$dir}}</h5>
      </div>
      <div class="card-body">
        <div class="offset-md-10">
          <a href="/{{$dir}}" class="btn btn-primary">Ir</a>
        </div>

      </div>
    </div>
  </div>
  @endforeach

</div>
</div>
<script src="{{url('js/app.js')}}"></script>
<!-- <script type="text/javascript">
$(document).ready(function(){
$("#buscador").on("change paste keyup", function() {
var palabra = $(this).val().trim();
actualiza(palabra);

});
});

function actualiza(palabra){
var ruta = "inicio/palabra";
var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
$.ajax({
url: ruta,
headers : {'X-CSRF-TOKEN' : CSRF_TOKEN},
type: 'POST',
dataType : 'json',
data : {dato : palabra},
success: function (data) {
var tamaño = data.length;
var card = '';
$('#contenedor_proyectos div').html('');
for(var i = 0; i < tamaño; i++) {
var div = $("<div>", { class : "col-md-4"});
var div2 = $("<div>", { class : "card"});
var div3 = $("<div>", { class : "card-header"});
var div4 = $("<div>", { class : "card-body"});
var div5 = $('<div>', { class : "offset-md-10"});
var h5 = document.createElement('h5');
var linkh = document.createTextNode(data[i]);
h5.appendChild(linkh);

var a_tag = document.createElement('a');
var linkText = document.createTextNode(data[i]);
a_tag.appendChild(linkText);
a_tag.title = data[i];
a_tag.href = "/" + data[i];
a_tag.classList.add("btn");
a_tag.classList.add("btn-primary");


$('#cont1').append(div2);
$('#cont2').append(div3);
$('#cont3').append(h5);
$('#cont2').append(div4);
$('#cont4').append(div5);
$('#cont5').append(a_tag);
$('#contenedor_proyectos').append(div);
}

}
});
}
</script> -->
</body>
</html>
