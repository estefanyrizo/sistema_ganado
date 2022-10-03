<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {% block title %} {% endblock %}</title>

    <link href="static/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e1b504be8a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link href="/static/style.css" rel="stylesheet">
    <link href="/static/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="/static/assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />

    <link rel="shortcut icon" href="/static/imagenes/favicon.png">

</head>

<body>
    
<div class="wrapper">
  <div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
  -->
    <div class="sidebar-wrapper">
      <div class="logo">
        <a href="javascript:void(0)" class="simple-text logo-mini">
          CT
        </a>
        <a href="javascript:void(0)" class="simple-text logo-normal">
          Ritmos
        </a>
      </div>
      <ul class="nav">
        <li>
          <a href="/busqueda?rit_id=6">
            <p>Bachata</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=1">
            <p>Ballet</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=7">
            <p>Bolero</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=18">
            <p>Break dance"</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=8">
            <p>Cha-cha-chá</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=9">
            <p>Cumbia</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=16">
            <p>Hip Hop</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=10">
            <p>Kizomba</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=17">
            <p>K-pop</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=11">
            <p>Mambo</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=12">
            <p>Merengue</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=15">
            <p>Reggaetón</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=3">
            <p>Rock & Roll</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=13">
            <p>Salsa y Rueda Cubana</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=14">
            <p>Samba</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=2">
            <p>Tango</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=4">
            <p>Vals Francés o Pericón</p>
          </a>
        </li>
        <li>
          <a href="/busqueda?rit_id=5">
            <p>Vals Inglés</p>
          </a>
        </li>

      </ul>
    </div>
  </div>

<br>

{% block navbar%}
<div class="navbar-toggle d-inline">
  <button type="button" class="navbar-toggler">
    <span class="navbar-toggler-bar bar1"></span>
    <span class="navbar-toggler-bar bar2"></span>
    <span class="navbar-toggler-bar bar3"></span>
  </button>
</div>
{% endblock %}

<div>
  <form action="/" method="post" class="form-inline pt-5 mt-5 justify-content-center">
    <input class="form-control" id="search" autocomplete="on" autofocus class="form-control" name="coreo"
      placeholder="Coreografo, categoria, cancion" type="text" />

    <button class="btn btn-fill btn-primary" type="submit"><i class="fas fa-search"></i></button>
  </form>
</div>


  <div class="coreos">
    <h3 >{{coreos[0]["ritmo"]}}</h3>
    <div class="coreo-box row d-flex">
        {% for info in coreos%}
        <div class="card mt-2 mb-0 mr-2 ml-2">
          <a href="coreografia/{{info["id"]}}" class="boton p-0 m-0"><img class="img-top" src="{{info["portada"]}}"></a>
          <h5 class="card-title">{{info["titulo"]}}</h5>
      </div>
      {% endfor %}
    </div>
  </div>

  </body>
</html>
