<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <button id="btn1">Clique 1</button>
    <button id="btn2">Clique 2</button>
    <button id="btn3">Afficher Bdd</button>
    <div id="div1"></div>

</body>
</html>

<script>
        $(document).ready(function() {
            $("#btn1").click(function() {
            $("#div1").load("partiel1.html");
        });

        $("#btn2").click(function() {
            $("#div1").load("partiel2.html");
        });

        $("#btn3").click(function() {
            $("#div1").load("views/listeproduit.php");
        });
    });
</script>