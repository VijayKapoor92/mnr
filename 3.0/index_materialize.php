<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mercado na Rede Ltda</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="../../../library/materialize/css/materialize.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <style>

    </style>
</head>
<body>
<div class="navbar-fixed">
    <nav class="blue accent-4">
        <div class="nav-wrapper">
            <ul class="left">
                <li><a href="sass.html"><i class="material-icons">menu</i></a></li>
                <li class="page-title">Publicações</li>
            </ul>
            <ul class="right">
                <li><a href="sass.html"><i class="material-icons">search</i></a></li>
                <li><a href="badges.html"><i class="material-icons">view_module</i></a></li>
                <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="material-icons">more_vert</i></a></li>
            </ul>
        </div>
    </nav>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">one</a></li>
        <li><a href="#!">two</a></li>
        <li class="divider"></li>
        <li><a href="#!">three</a></li>
    </ul>
</div>
</body>
</html>
<script src="../../../library/jquery/jquery-3.2.1.min.js"></script>
<script src="../../../library/materialize/js/materialize.min.js"></script>
<script>
    $("#side-menu").hide();
    $("#btn-toggle-menu").click(function(){
        $("#side-menu").toggle();
    });
    $(".line").hover(function(){
        alert();
    })
    $(document).ready(function(){
        $(".button-collapse").sideNav();
    })
</script>
