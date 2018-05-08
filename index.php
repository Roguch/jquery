<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <style type="text/css">
        #principal{
            border: 1px solid black;
            background-color: blue;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){

            $("#mostra").hide();
            $("#oucuta").click(function(){
                $("#principal").slider();
                $("#oucuta").hide();
                $("#mostra").show();
            });$("#mostra").click(function(){
                $("#principal").show();
                $("#oucuta").show();
                $("#mostra").hide();
            });
        });
    </script>
</head>
<body>
<h1>Titulo</h1>
    <input type="button" id="mostra" value="mostrar">
    <input type="button" id="oucuta" value="oucutar">
    <p>texto</p>
    <div id="principal">
        <p>texto2</p>
    </div>
    <p>texto3</p>
    </body>
</html>