<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vijay
 * Date: 25/09/17
 * Time: 17:00
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <style>
        html, body{
            overflow: hidden;
            background-color: #f5f5f5;
        }
        .mdl-layout__header, .mdl-layout__header-row{
            background-color: #0D47A1;
        }
        .user-info{
            background-image: url("images/mnr-logo2.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .mdl-layout__header{
            /*-webkit-box-shadow: 0px 9px 23px 1px rgba(168,168,168,1);*/
            /*-moz-box-shadow: 0px 9px 23px 1px rgba(168,168,168,1);*/
            box-shadow: 0px 5px 7px 1px #9F9F9F;
        }
        .mdl-layout__drawer{
            background-color: #ffffff;
        }
        .mdl-list__item-secondary-action{
            color: #999999;
        }
        .icon-link{
            float: left;
            margin-right: 10px;
        }
        .user-info{
            height: 150px;
            /*background-color: #cccccc;*/
        }
        .container{
            padding: 10px 100px 10px 100px;
            overflow-x: hidden;
            overflow-y: scroll;
        }
        .mdl-list{
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 5px;
            /*-webkit-box-shadow: 0px 0px 57px 2px rgba(204,204,204,1);*/
            /*-moz-box-shadow: 0px 0px 57px 2px rgba(204,204,204,1);*/
            /*box-shadow: 0px 0px 57px 2px rgba(204,204,204,1);*/
        }
        .mdl-list__item{
            height: 10px;
        }
        .bookmark{
            border-left: 2px solid #0D47A1;
        }
        .ellipsis{
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .nowrap{
            white-space: nowrap;
        }
        .w-33{
            width: 33%;
        }
        .w-25{
            width: 25%;
        }
        .w-20{
            width: 20%;
        }
        .f-12{
            font-size: 12px;
        }
        .action-row{
            visibility: hidden;
        }
        .icon-25p{
            width: 25px;
            height: 25px;
        }
        .img-avatar{
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }
        .mr-12{
            margin-right: 12px;
        }
        .mr-11{
            margin-right: 11px;
        }
        .search{
            position: relative;
            left: 50%;
            margin-left: -300px;
        }
        #search_input{
            width: 500px;
            padding: 12px 20px;
            margin: 8px 0;
            box-sizing: border-box;
            border: none;
            border-radius: 4px;
            font-size: 14px;
        }
        .fab-filter{
            position: relative;
            top: 30px;
            left: 25%;
        }
        .fab-actions{
            position: fixed;
            bottom: 30px;
            right: 30px;
            /*width: 50px;*/
            /*height: 50px;*/
        }
        .material-icons.md-18 {
            font-size: 27px;
        }
        #form-filtro{
            background-color: #F5F5F5;
            border: 1px solid #cccccc;
            border-radius: 5px;
            padding: 15px;
            /*-webkit-box-shadow: 0px 0px 57px 2px rgba(204,204,204,1);*/
            /*-moz-box-shadow: 0px 0px 57px 2px rgba(204,204,204,1);*/
            -webkit-box-shadow: 0px -4px 70px rgba(204,204,204,1);
            -moz-box-shadow: 0px -4px 70px rgba(204,204,204,1);
            box-shadow: 0px -4px 70px rgba(204,204,204,1);
            margin-bottom: 30px;
        }
        .form-input-filter{
            /*width: 300px;*/
            height: 30px;
            background: #ffffff;
            border: none;
            font-size: 10pt;
            color: #63717f;
            padding-left: 2px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
        }
        .label-form-input{
            color: #757575;
        }
        .switch-filter{
            position: absolute;
            top: 15px;
            right: 0px;
            left: 450px;
        }
    </style>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">Title</span>
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-js-ripple-effect mdl-button--colored fab-filter">
                <i class="material-icons">filter_list</i>
            </button>
            <div class="search">
                <form>
                    <label for="search_input"></label>
                    <input id="search_input" placeholder="Pesquisar..."/>
                </form>
                <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect switch-filter" for="switch-1" style="background-color: #ffffff">
                    <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
                </label>
            </div>
            <div class="mdl-layout-spacer"></div>
            <nav class="mdl-navigation">
                <a id="btn-anuncios" class="mdl-button mdl-js-button mdl-button--icon btn-menu-inactive" href="javascript:void(0);" style="margin-right: 4px;"><i class="material-icons">rss_feed</i></a>
                <a id="btn-notificoes" class="mdl-button mdl-js-button mdl-button--icon btn-menu-inactive" href="javascript:void(0);" style="margin-right: 4px;"><i class="material-icons">notifications_none</i></a>
                <a id="menu_dropdown" href="javascript: void(0);" style="margin-right: 4px;"><img src="images/mnr-logo.png" class="mdl-list__item-avatar"></a>
            </nav>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu_dropdown">
                <li class="mdl-menu__item">Some Action</li>
                <li class="mdl-menu__item">Another Action</li>
                <li disabled class="mdl-menu__item">Disabled Action</li>
                <li class="mdl-menu__item">Yet Another Action</li>
            </ul>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <div class="user-info">
            <div class="user-info-list" style="position: relative; top: 35px; right: 10px">
                <ul style="list-style: none;font-size: 14px; font-weight: bold; color: #000;">
                    <li><img src="images/mnr-logo.png" style="width: 50px; height: 50px; border-radius: 50%;box-shadow: 2px 2px 2px #000000;"></li>
                    <li>vijay@mercadonarede.com.br</li>
                    <li>02.916.740/0001-36</li>
                </ul>
            </div>
        </div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">
                <i class="material-icons icon-link">copyright</i><span class="mdl-badge icon-link-title" data-badge="4">Cotações</span>
            </a>
            <a class="mdl-navigation__link" href="">
                <i class="material-icons icon-link">dashboard</i><span class="mdl-badge icon-link-title" data-badge="">Painel</span>
            </a>
            <a class="mdl-navigation__link" href="">Link</a>
            <a class="mdl-navigation__link" href="">Link</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <div class="page-content">
            <div class="container">
                <!-- Simple Textfield -->
                <form id="form-filtro" class="show mdl-grid" action="#">
                    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--3-col">
                        <label for="sample1" class="label-form-input">Comprador:</label>
                        <input class="form-input-filter" type="text" id="sample1">
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-cell mdl-cell--2-col mdl-cell--1-offset">
                        <input class="mdl-textfield__input" type="text" id="sample1">
                        <label class="mdl-textfield__label" for="sample1">Text...</label>
                    </div>
                    <div class="divider"></div>
                </form>
                <div class="mdl-list">
                    <?
                    for($i = 0;$i < 30;$i++){
                        ($i === 2) ? $bookmark = "bookmark" : $bookmark = "";
                    ?>
                    <div class="mdl-list__item <?=$bookmark;?>">
                        <span class="mdl-list__item-primary-content mdl-grid">
                            <div class="item-avatar">
                                <img class="img-avatar mr-12" src="images/mnr-logo.png" />
                                <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-<?=$i;?>" style="display: none; margin-left: 12px; padding:0; margin-right:35px;">
                                    <input type="checkbox" id="checkbox-<?=$i;?>" class="mdl-checkbox__input">
                                </label>
                            </div>
                            <span class="mdl-cell--2-col">5169</span>
                            <span class="mdl-cell--3-col">Recebida</span>
                            <span class="mdl-cell--3-col">04/08/2016</span>
                            <span class="mdl-cell--4-col nowrap">Adivel Caminhões e Ônibus Ltda.</span>
                        </span>
                        <span class="mdl-list__item-secondary-content">
                            <div class="action-row">
                                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">info_outline</i></a>
                                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">thumb_up</i></a>
                                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">print</i></a>
                                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">delete</i></a>
                                <a class="mdl-list__item-secondary-action" href="#"><i class="material-icons">language</i></a>
                            </div>
                        </span>
                    </div>
                    <div class="mdl-menu__item--full-bleed-divider"></div>
                    <?};?>
                </div>
            </div>
            <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored fab-actions">
                <i class="material-icons md-18">more_vert</i>
            </button>
        </div>
    </main>
</div>
</body>
</html>
<script src="../../../library/jquery/jquery-3.2.1.min.js"></script>
<script>
$(function(){
    // Definindo tamanho unico para pagina
    // para depois overlfow ser na lista e nao na pagina
    $(".page-content").css({
        "width" : $(window).width,
        "max-height" : $(window).height() - $(".mdl-layout__header").height() +"px"
    });

    // Passar o mouse e aparacer action bar
    $(".mdl-list__item").on("mouseenter", function(evt){
        if(!$(".item-avatar").hasClass("only-checkbox")) {
            $(this).find(".action-row").css({"visibility": "visible"});
            $(this).find(".mdl-list__item-primary-content > span:last-child").addClass("ellipsis");
        }
    }).on("mouseleave", function(evt){
        if(!$(".item-avatar").hasClass("only-checkbox")) {
            $(this).find(".action-row").css({"visibility": "hidden"});
            $(this).find(".mdl-list__item-primary-content > span:last-child").removeClass("ellipsis");
        }
    });

    // Passar o mouse nos icones do action bar e mudar cores
    // cinza -> 'inativo' / preto -> 'ativo'
    $(".action-row > a").on("mouseenter", function(){
        $(this).css("color", "#000");
    }).on("mouseleave", function(evt){
        $(this).css("color", "#999999");
    });

    //Passar o mouse na imagem e trocar para checkbox
    $(".item-avatar").on("mouseenter", function(evt){
        if(!$(this).hasClass("only-checkbox")) {
            $(this).find(".img-avatar").hide();
            $(this).find(".mdl-checkbox").show();
        }
    }).on("mouseleave", function(evt){
        if(!$(this).hasClass("only-checkbox")) {
            $(this).find(".img-avatar").show();
            $(this).find(".mdl-checkbox").hide();
        }
    });

    // Clicar no checkbox e mudar tela
    $(".mdl-checkbox__input").on("click", function(evt){
        if(!$(this).is(":checked")){
            if($(this).hasClass("count")) {
                $(this).removeClass("count");
            }
            if($(".count").length === 0){
                $(".img-avatar").show();
                $(".mdl-checkbox").hide();
                $(".item-avatar").removeClass("only-checkbox");
            }
        }else{
            $(this).addClass("count");
            $(".img-avatar").hide();
            $(".action-row").css({"visibility":"hidden"});
            $(".mdl-checkbox").show();
            $(".item-avatar").addClass("only-checkbox");
            $(".mdl-list__item-primary-content > span:last-child").removeClass("ellipsis");
        }
    });

    // Clicar no botao e descer o filtro
    $(".fab-filter").on("click", function(evt){
        if($("#form-filtro").hasClass("show")) {
            $("#form-filtro").slideUp();
            $("#form-filtro").removeClass("show");
            $("#form-filtro").addClass("hide");
        }else{
            $("#form-filtro").slideDown();
            $("#form-filtro").removeClass("hide");
            $("#form-filtro").addClass("show");
        }
    });

    // Botoes menu ativos
    $("#btn-anuncios").on("click", function(){
        if(!$(this).hasClass("btn-menu-inactive")){
            $(this).css("color", "#FFFFFF");
            $(this).removeClass("btn-menu-active");
            $(this).addClass("btn-menu-inactive");
        }else{
            $(this).css("color", "orange");
            $(this).removeClass("btn-menu-inactive");
            $(this).addClass("btn-menu-active");
        }
    });

    $("#btn-notificoes").on("click", function(){
        if(!$(this).hasClass("btn-menu-inactive")){
            $(this).children().empty();
            $(this).children().html("notifications_none");
            $(this).css("background","#0D47A1");
            $(this).removeClass("btn-menu-active");
            $(this).addClass("btn-menu-inactive");
        }else{
            $(this).children().empty();
            $(this).children().html("notifications");
            $(this).css("background","#1976D2");
            $(this).removeClass("btn-menu-inactive");
            $(this).addClass("btn-menu-active");
        }
    })

});
</script>
