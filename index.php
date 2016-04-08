<!DOCTYPE html>
<html>
<head>
    <title>Complexe Manager</title>
    <link rel="stylesheet" type="text/css" href="css/math.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://latex.codecogs.com/latexit.js"></script>
</head>
<body>
    <div class='container'>
    <form action="inc/mandel.php" method="POST">
        <h1 style="text-align: center;color: #FF5722;background-color: rgba(96, 109, 139, 0.17);" class="jumbotron">Pimp my fractale</h1>
        <div class="contenair">
            <div class="nb1">
                <label style="color: white">
                    <br>
                    <input class="style_radius" type="number" step="0.0000000000001" name="iteration" placeholder="nombre iteration">
                </label>
            </div>
            <div class="nb2">
                <label style="color: white">
                    <br>
                    <input class="style_radius" type="number" step="0.0000000000001" name="degre" placeholder="degre" >
                </label>
            </div>          
            <br><br>
            <button type="submit" id="button" class="btn btn-primary" name="Mandel">Valider</button>
        </div>
        </form>
        <br><br>
         <form action="inc/julia.php" method="POST">
        <div class="contenair">
            <div class="nb1">
                <label style="color: white">
                    <br>
                    <input class="style_radius" type="number" step="0.0000000000001" name="Re" placeholder="Reel">
                </label>
            </div>
            <div class="nb2">
                <label style="color: white">
                    <br>
                    <input class="style_radius" type="number" step="0.0000000000001" name="Im" placeholder="Imaginaire">
                </label>
            </div>          
            <br><br>
            <button type="submit" id="button" class="btn btn-primary" name="Julia">Valider</button>
        </div>
    </form>
    <br><br>
    </div>
    </body>
</html>