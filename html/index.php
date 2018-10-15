<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Requete</title>
    <script>
        let monInter;

        function startChrono() {
            let req = new XMLHttpRequest();
            req.open('GET', 'start.php');
            req.send(null);
            document.getElementById('indicateur').innerText = 'M';
            monInter = setInterval( periodique, 1000);
        }

        function periodique() {
            request();
        }

        function stopChrono() {
            clearInterval(monInter);
            document.getElementById('indicateur').innerText='A';
            document.getElementById("perio").innerText='';

        }

        function request() {
            const req = new XMLHttpRequest();
            req.onreadystatechange = function (event) {
                if ((this.readyState === XMLHttpRequest.DONE) && (this.status === 200)) {
                    document.getElementById("perio").innerText = "Réponse reçu:"+ this.responseText;
                 }
            };
            req.open('GET', 'date.php');
            req.send(null);
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
