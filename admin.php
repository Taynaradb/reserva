<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área administrativo</title>
    
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Original+Surfer&display=swap"
        rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-start">
        <a class="navbar-brand ms-5" href="index.php">Voltar</a>
      </nav>
      <div class="container">
    <div class="box mt-5 pb-5">
        <header class="mt-5 mb-5 d-flex justify-content-center align-items-center">
            <h3 class="mt-5 text-center">Reseva de <br> Quartos</h3>
            <img class="mt-4" src="images/logo.png" width="100px" alt="sino">
        </header>

    <main class="mt-5 container">
    <div class="d-flex justify-content-center align-items-center">
    <table class="table table-hover table-striped table-bordered">
          <thead>
          <tr>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Whatsapp</th>
            <th>Qtd de adultos</th>
            <th>Qtd de criança</th>
            <th>Qtd de quartos</th>
            <th>Fumante</th>
            <th>Café</th>
            <th>Parking</th>
            <th>Ar</th>
            <th>Entrada</th>
            <th>Saída</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include_once "config.php";

              $sql = "SELECT * FROM reserva";
              $result = mysqli_query($conn, $sql);

              $datas = [];

              if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                  $datas[] = $row;
                }
              }

              foreach($datas as $data){
                echo "<tr>";
                echo "<th>" . $data['nome'] . "</th>";
                echo "<th>" . $data['tel'] ."</th>";
                echo "<th>" . $data['whatsapp'] ."</th>";
                echo "<th>" . $data['adultos'] ."</th>";
                echo "<th>" . $data['crianças'] ."</th>";
                echo "<th>" . $data['quartos'] ."</th>";
                echo "<th>" . $data['fumante'] ."</th>";
                echo "<th>" . $data['café'] ."</th>";
                echo "<th>" . $data['parking'] ."</th>";
                echo "<th>" . $data['ar'] ."</th>";
                echo "<th>" . $data['entrada'] ."</th>";
                echo "<th>" . $data['saida'] ."</th>";
                echo "</tr>";
              }
                           

            ?>
          </tbody>
        </table>
      
      
      <div>
    </main>


    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/js.js"></script>
</body>
</html>