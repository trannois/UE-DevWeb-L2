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
    </div>

    <script>
      function request() {
          const req = new XMLHttpRequest();

          req.onreadystatechange = function (event) {
              // XMLHttpRequest.DONE === 4
              if (this.readyState === XMLHttpRequest.DONE) {
                  var flag = 1;
                  if (this.status === 200) {
                      console.log("Réponse reçu: %s", this.responseText);
                  } else {
                      console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
                  }
              }
          };

          req.open('GET', 'scriptRequeteExemple.php', true);
          req.send(null);
      }
    </script>


</body>
</html>
