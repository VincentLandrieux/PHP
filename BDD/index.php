<?php
$loc = filter_input(INPUT_GET, "loc");
if($loc == false){
    $loc = "all";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD</title>

        <style>
            /*---Fonts---*/
            @font-face {
            font-family: "Roboto";
            src: url("font/Roboto-Bold.ttf") format("truetype");
            font-weight: 800;
            }
            @font-face {
            font-family: "Roboto";
            src: url("font/Roboto-Regular.ttf") format("truetype");
            font-weight: 400;
            }
            @font-face {
            font-family: "Roboto";
            src: url("font/Roboto-Light.ttf") format("truetype");
            font-weight: 200;
            }
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            p, a, h1, h2{
                font-family: Roboto;
                color: #222;
            }
            a{
                text-decoration: none;
            }

            header{
                min-width: 300px;
                padding-top: 20px;
                text-align: center;
            }
            header h1{
                text-transform: uppercase;
                font-weight: 800;
            }
            main{
                padding: 10px;

                background-color: #fff;
            }
            .content_list{
                width: 100%;

                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
            }
            .card{
                position: relative;
                vertical-align: top;
                width: 300px;
                height: 250px;
                margin: 10px;
                padding: 20px;

                background-color: #eaeae5;
                box-shadow: 1px 1px 2px #eee;

                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card_title{
                position: absolute;
                right: 10px;
                bottom: 10px;
                font-weight: 200;
            }
            .card_link{
                position: absolute;
                left: 10px;
                bottom: 10px;

                text-transform: uppercase;
                font-weight: 800;
                color: #55f;
            }
            .card_link:hover{
                color: #88f;
            }
            /* .card_content{

            } */

            .return{
                margin: 10px;

                text-transform: uppercase;
                font-weight: 800;
                color: #55f;
            }

            .content_one{
                margin: 10px;
                padding: 10px;

                background-color: #eaeae5;
            }
            .content_one h2{
                text-transform: uppercase;
            }
            .one_id{
                font-weight: 200;
            }
            .one_activite{
                text-align: right;
            }

        </style>
    </head>
    <body>
        <header>
            <a href="index.php">
                <h1>Compétences Concepteur Developpeur d'Application</h1>
            </a>
        </header>
        <main>
            <?php
            if($loc == "all"){
                include("content/all.php");
            }elseif($loc == "one"){
                include("content/one.php");
            }
            ?>
        </main>
    </body>
</html>
