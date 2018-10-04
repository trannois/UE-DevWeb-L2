<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>Requete</title>
</head>
<body>
</br>
    <div class="container-fluid">
      <h3>Requêtes</h3>
      <hr>

      <button class="btn btn-primary" onclick="request()">Requête synchrone</button>
      <button class="btn btn-primary" onclick="request2()">Requête asynchrone</button>
    </div>

    <script>
      function request() {
        const req = new XMLHttpRequest();
        req.open('GET', 'http://194.57.110.19/~upjv/scriptRequeteExemple.php', false);
        req.send(null);

        alert("Ok");

        if (req.status === 200) {
            console.log("Réponse reçue: %s", req.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", req.status, req.statusText);
        }
      }

      function request2() {
        const req = new XMLHttpRequest();
        req.open('GET', 'http://194.57.110.19/~upjv/scriptRequeteExemple.php', true);
        req.send(null);

        alert("Ok");

        if (req.status === 200) {
            console.log("Réponse reçue: %s", req.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", req.status, req.statusText);
        }
      }
    </script>


</body>
</html>
