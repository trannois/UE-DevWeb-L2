<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Requete</title>
    <script>
        let monInter;

        function periodique() {
            let eltPerio = document.getElementById("perio");
            eltPerio.innerText = Date.now();
        }
    </script>
</head>
<body onload="monInter = setInterval( periodique, 1000);">

<div class="container-fluid">
    <h3>Timer</h3>
    <hr>

    <button onclick="document.getElementById('indicateur').innerText='M';"> Démarrer</button>
    <i id="indicateur"></i>
    <button onclick="clearInterval(monInter);document.getElementById('indicateur').innerText='A';">Arrêter</button>
    <h2 id="perio"></h2>

</div>
</body>
</html>
