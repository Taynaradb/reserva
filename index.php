<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body class="banner">
    <div class="bg"></div>
    <nav class="navbar navbar-light bg-light justify-content-end">
        <a class="navbar-brand" href="admin.php">Área do adminstrador</a>
    </nav>

    <div class="d-flex justify-content-center align-items-center">
        <div class="box mt-5 mb-5">

            <header class=" d-flex justify-content-center align-items-center">
                <h1 class="mt-5 text-center">Reserva de <br> Quartos</h1>
                <img class="mt-4" src="images/logo.png" alt="sino">
            </header>

            <main>
                <form class="" action="querecebe.php" method="post">
                    <div class="row mt-5 align-items-center">
                        <div class="col ms-5">
                            <label for="nome">Nome</label>
                            <input class="mb-2 form-control" name="nome" id="nome" type="text" required>

                            <label for="tel">Telefone</label>
                            <input class="mb-2 form-control" name="tel" id="tel" type="text" required>

                            <input type="hidden" name="wpp" value="Não">
                            <input class="mt-0" type="checkbox" name="wpp" value="Sim" class="form-check-input"
                                id="wpp">
                            <label class="form-check-label" for="wpp">Whatsapp</label>
                        </div>

                        <div class="col ms-5">
                            <div class="row align-items-center d-block">
                                <div class="col">
                                    <label class="me-1 adbtn" for="adultos">Adultos</label>
                                    <div type="submit" class="btn dec">-</div>
                                    <input type="text" name="adultos" id="adultos" value="0" class="input-filed">
                                    <div type="submit" class="btn inc">+</div>
                                </div>
                                <div class="col">
                                    <label class="" for="kids">Crianças</label>
                                    <div type="submit" class="btn dec">-</div>
                                    <input type="text" name="kids" id="kids" value="0" class="input-filed">
                                    <div type="submit" class="btn inc">+</div>
                                </div>
                                <div class="col">
                                    <label class="me-1" for="quartos">Quartos</label>
                                    <div type="submit" class="btn dec">-</div>
                                    <input type="text" name="quartos" id="quartos" value="0" class="input-filed">
                                    <div type="submit" class="btn inc">+</div>
                                </div>
                            </div>

                        </div>

                    </div>



                    <div class="row mt-5">
                        <div class="col">
                            <div class="row ms-5  align-items-center">
                                <div class="col">
                                    <input type="hidden" name="fumante" value="Não">
                                    <input class="mt-0" type="checkbox" name="fumante" value="Fumante" class="form-check-input"
                                        id="fumante">
                                    <label class="form-check-label" for="fumante">Fumante</label>
                                </div>
                                <div class="col">
                                    <input type="hidden" name="parking" value="Não">
                                    <input class="mt-0" type="checkbox" name="parking" value="Estacionamento" class="form-check-input"
                                        id="park">
                                    <label class="form-check-label" for="park">Estacionamento</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="row ms-5 align-items-center">
                                    <div class="col mt-2">
                                        <input type="hidden" name="ar" value="Não">
                                        <input class="mt-0" type="checkbox" name="ar" value="Ar-condiconado"
                                            class="form-check-input" id="ar">
                                        <label class="form-check-label" for="ar">Ar-condiconado</label>
                                    </div>
                                    <div class="col">
                                        <input type="hidden" name="cafe" value="Não">
                                        <input class="mt-0" type="checkbox" name="cafe" value="Café da manhã"
                                            class="form-check-input" id="cafe">
                                        <label class="form-check-label" for="cafe">Café da manhã</label>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                    <div>
                        <div class="row m-5 d-flex justify-content-center align-items-center">
                            <div class="col-sm-6">
                                <label for="entrada">DATA DE ENTRADA</label>
                                <input class="form-control" name="entrada" id="entrada" type="date">
                            </div>
                            <div class="col-sm-6">
                                <label for="saida">DATA DE SAÍDA</label>
                                <input class="form-control" name="saida" id="saida" type="date">
                            </div>
                        </div>
                        <div class="mt-4 mb-4 d-flex justify-content-center align-items-center">
                            <button type="submit" id="btn" class="mt-3 d-block mybtn btn">Salvar</button>
                        </div>
                    </div>
                </form>
            </main>
        </div>

    </div>

    <script src="bootstrap/bootstrap.bundle.min.js"></script>
    <script src="js/js.js"></script>
</body>

</html>