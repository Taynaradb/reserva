

<html>
    <body>
        <?php
        include_once"config.php";

        $nome = $_POST["nome"];
        $tel = $_POST["tel"];
        $wpp = $_POST["wpp"];
     #   $adultos = $_POST["adultos"];
      #  $criancas = $_POST["crianças"];
       # $quartos = $_POST["quartos"];
       # $fumante = $_POST["fumante"];
       # $cafe = $_POST["café"];
      #  $parking = $_POST["parking"];
        # $ar = $_POST["ar"];
        $entrada = $_POST["entrada"];
        $saida = $_POST["saida"];

        mysqli_select_db($conn, '$banco');
        $sql = "INSERT INTO reserva (`nome`, `tel`, `whatsapp`, `entrada`, `saida`)VALUES('$nome', '$tel', '$wpp', '$entrada', '$saida')";

        if(mysqli_query($conn, $sql)) {
            echo "<script>alert('Salvei seus dados!'); window.location = 'index.php'; </script>";
        }else{
            echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);


        ?>
    </body>
</html>