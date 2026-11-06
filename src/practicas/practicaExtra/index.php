<?php
session_start();
if(!isset($_SESSION["contenedores"])){
    $_SESSION["contenedores"] = [
        "carton" => [
            "cont" => 0,
            "texto" => "Cartón",    
        ],
        "organico" => [
            "cont" => 0,
            "texto" => "Orgánico"
        ],
        "plastico" => [
            "cont" => 0,
            "texto" => "Plástico"
        ],
        "vidrio" => [
            "cont" => 0, 
            "texto" => "Vidrio"
        ] 
    ];
    $_SESSION["camion"] = 0;
    $_SESSION["basura"] = [];
}
if(isset($_GET["reiniciar"])){
    session_destroy();
    header("Location: .");
}
if(isset($_GET["conte"])){
    if($_GET["conte"]==$_SESSION["rand"]){
        if($_SESSION["camion"]<10){
            if($_SESSION["contenedores"][$_GET["conte"]]["cont"] < 10){
                $_SESSION["camion"]++;
                $_SESSION["contenedores"][$_GET["conte"]]["cont"]++;
            }else{
                echo $_SESSION["contenedores"][$_GET["conte"]]["texto"], " está lleno";
            }
        }else{
            echo "El camión está lleno";
        }
    }else{
        echo "Has fallado";
    }
}else{
    $_SESSION["camion"] = 0;
}
if(isset($_SESSION["rand"])){
    array_push($_SESSION["basura"],$_SESSION["rand"]);
    var_dump($_SESSION["basura"]);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PpExtra - Repaso Sessions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Pp Extra - Repaso Sessions</h1>
        <button id="btnReiniciarPartida">Reiniciar partida</button>
        <hr>
        <p>El camión lleva <?= $_SESSION["camion"] ?>/10 basura</p>
        <div class="divContens">
            <div>
                <?php
                $_SESSION["rand"] = array_rand($_SESSION["contenedores"]);
                ?>
                <div class="divConteAct <?= $_SESSION["rand"] ?>">
                    <img src="images/contenedores/<?= $_SESSION["rand"] ?>.png" alt="">
                    <p><?= $_SESSION["contenedores"][$_SESSION["rand"]]["texto"] ?></p>
                </div>
            </div>
            
            <div class="divColaConte">
                <div class="divConteCola plastico">
                    <img src="images/contenedores/plastico.png" alt="Contenedor Plástico">
                    <p>Plástico</p>
                </div>
                <div class="divConteCola plastico">
                    <img src="images/contenedores/plastico.png" alt="Contenedor Plástico">
                    <p>Plástico</p>
                </div>
                <div class="divConteCola plastico">
                    <img src="images/contenedores/plastico.png" alt="Contenedor Plástico">
                    <p>Plástico</p>
                </div>
                <div class="divConteCola plastico">
                    <img src="images/contenedores/plastico.png" alt="Contenedor Plástico">
                    <p>Plástico</p>
                </div>
            </div>

        </div>
        <hr>
        <div class="divBtnConte">
            <a class="btnConte carton" href=".?conte=carton">Cartón</a>
            <a class="btnConte organico" href=".?conte=organico">Orgánico</a>
            <a class="btnConte plastico" href=".?conte=plastico">Plástico</a>
            <a class="btnConte vidrio" href=".?conte=vidrio">Vidrio</a>
            <a class="btnConte btnReinConte" href=".">Reiniciar basura</a>
        </div>
        <hr>
        <div class="divsContConte">
            <div class="divContConte">
                <p>Cartón</p>
                <p><?= $_SESSION["contenedores"]["carton"]["cont"] ?>/10</p>
            </div>
            <div class="divContConte">
                <p>Orgánico</p>
                <p><?= $_SESSION["contenedores"]["organico"]["cont"] ?>/10</p>
            </div>
            <div class="divContConte">
                <p>Plástico</p>
                <p><?= $_SESSION["contenedores"]["plastico"]["cont"] ?>/10</p>
            </div>
            <div class="divContConte">
                <p>Vidrio</p>
                <p><?= $_SESSION["contenedores"]["vidrio"]["cont"] ?>/10</p>
            </div>
        </div>
    </main>
    <footer></footer>
    <script>
        document.querySelector('#btnReiniciarPartida').addEventListener("click",()=>{
            location.href = ".?reiniciar";
        })
    </script>
</body>
</html>
