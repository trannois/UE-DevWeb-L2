<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Requete</title>
    <script>
        let monInter;

        function startChrono() {
            document.getElementById('indicateur').innerText = 'M';
            monInter = setInterval( periodique, 1000);
        }

        function periodique() {
            let eltPerio = document.getElementById("perio");
            eltPerio.innerText = Date.now();
        }

        function stopChrono() {
            clearInterval(monInter);
            document.getElementById('indicateur').innerText='A';
            document.getElementById("perio").innerText='';

        }
    </script>
</head>
<body onload="">

<div class="container-fluid">
    <h3>Timer</h3>
    <hr>

    <button onclick="startChrono();"> Démarrer</button>
    <i id="indicateur"></i>
    <button onclick="stopChrono();">Arrêter</button>
    <h2 id="perio"></h2>

</div>
</body>
</html>
