<?php
/**
 * Created by IntelliJ IDEA.
 * User: Vijay
 * Date: 19/09/17
 * Time: 18:41
 */
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Autocomplete</title>
    <style>
        .search-result{
            padding:0;
            margin:0;
            /*-webkit-box-sizing: border-box;*/
            /*-moz-box-sizing: border-box;*/
            /*box-sizing: border-box;*/
            border: 1px solid #999;
            /*background: #FFF;*/
            cursor: default;
            overflow: auto;
            /*-webkit-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);*/
            /*-moz-box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);*/
            /*box-shadow: 1px 4px 3px rgba(50, 50, 50, 0.64);*/
            height: auto;
            /*line-height: 30px;*/
        }
        .search-result-list{
            padding:0;
            margin:0;
            list-style: none;
            line-height: 30px;
        }
        .search-result-list .focus{
            backgorund: #ccc;
        }
        input {
            /*background-image: url('/css/searchicon.png'); !* Add a search icon to input *!*/
            /*background-position: 10px 12px; !* Position the search icon *!*/
            /*background-repeat: no-repeat; !* Do not repeat the icon image *!*/
            /*width: 100%; !* Full-width *!*/
            /*font-size: 16px; !* Increase font-size *!*/
            /*padding: 12px 20px 12px 40px; !* Add some padding *!*/
            border: 1px solid #ddd; /* Add a grey border */
            /*margin-bottom: 12px; !* Add some space below the input *!*/
        }
    </style>
</head>
<body>
    <input type="text" id="search" name="search" />
    <div class="search-result">
        <ul class="search-result-list">
        </ul>
    </div>
</body>
</html>
<script src="../../../library/jquery/jquery-3.2.1.min.js"></script>
<script src="../../../library/jquery/autocomplete/dist/jquery.autocomplete.js"></script>
<script src="countries.js"></script>
<script>

    $(document).ready(function(){

        var countriesArray = $.map(countries, function (value, key){
            return { value: value, id: key };
        });

        for(var i = 0;i < countriesArray.length;i++){
            $(".search-result-list").append(
                $("<li>").html(countriesArray[i].value)
            )
        }

        $("#search").keyup(function(evt){
            $("li").eq(0).addClass("focus");
            searchList();
        });

    });

    function searchList() {
        // Declare variables
        var input, filter, ul, li, a, i;
        input = $("#search");
        filter = input.val().toUpperCase();
        ul = $(".search-result-list");
        li = ul.children();

        $(".search-result").css("width", $("#search").width);

        // Loop through all list items, and hide those who don't match the search query
        for (i = 0; i < li.length; i++) {
//            a = li[i].getElementsByTagName("a")[0];
            if (li[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>