<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Versa Empresas </title>
</head>
<body>
    <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/layout.css" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"> </script>
    <title> Versa Empresas </title>
</head>
<body id="geral">
    <div id="naveUm">
        <figure id="logo">
            <img src="images/topo.jpg" alt="Versa Academia Logo" id="imagemlogo">
        </figure>
        <div id="faixada"><>Versa Empresas</div>
        <nav>
            <div class="mb-3">
                <label for="Nome Fantasia" class="form-label">< Nome Fantasia ></label>
                <input type="text" class="form-control" id="Nome Fantasia">
            </div>
            <div class="mb-3">
                <label for="Razão Social" class="form-label">< Razão Social ></label>
                <input type="text" class="form-control" id="Razão Social">
            </div>
            <div class="mb-3">
                <label for="CNPJ" class="form-label">< CNPJ ></label>
                <input type="text" class="form-control" id="CNPJ">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">< E-mail ></label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="whatsapp" class="form-label">< Whatsapp ></label>
                <input type="tel" class="form-control" id="whatsapp">
            </div>
            <div class="mb-3">
                <label for="Telefone" class="form-label">< Telefone ></label>
                <input type="tel" class="form-control" id="telefone">
            </div>
            <button type="submit" class="btn btn-primary" id="okbutton">OK</button>
        </nav>
    </div>
    <div id="empresas">
            <div id="empresaicon">
                Empresas
                <button type="submit" class="btn btn-primary" id="plusbutton">+</button>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="pesquisa" placeholder="Pesquisa">
            </div>
            <div id="contversatec">
                <p  style="color: #000000";  class="empresascaixa"><b>VersaTEC</b></p>
                <p style="color: #66c2ff"; class="empresascaixa"><b>Versa Tecnologia</b></p>
                <p style="color: #fdb735";  class="empresascaixa"><b>versatec@versatecnologia.com.br</b></p>
                <a href="editar" id="editarempresas">Editar</a>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="scripts/jquery.mask.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#cep').mask('00.000-000');
            $('#telefone').mask('+00 (00) 0 0000-0000');
            $('#whatsapp').mask('+00 (00) 0 0000-0000');
            $('#CNPJ').mask('00.000.000/0000-00');
        });
    </script>
    </body>
</html>

