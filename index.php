<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
          integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ=="
          crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"
          integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX"
          crossorigin="anonymous">

    <title></title>
</head>
<body>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"
            integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ=="
            crossorigin="anonymous"></script>


    <?php require_once('navbar.php'); ?>

    <br><br>

    <div class="container">

        <?
            $conteudo = $_GET['conteudo'];
            $conteudosValidos = ['home','empresa','produtos','servicos','contato'];

            if(in_array($conteudo,$conteudosValidos)){
                require_once($conteudo.".php");
            }else{
                require_once('home.php');
            }
        ?>

    </div>

    <br><br>

    <center>
        <p>
            <?php
            date_default_timezone_set('UTC');
            echo "Todos os direitos reservados - ".date('Y');
            ?>
        </p>
    </center>
</body>
</html>