<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Versa Empresas</title>
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
    <style>
        #geral{
            margin: 0;
            padding: 0;
            display: flex;
        }
        #naveUm{
            width: 50%;
            height: 800px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        #logo{
            height: 100px;
            width: 90%;
            background-color: red;)
        }

        #perfil{
            display: flex;
        }
        #fotoPerfil{
            width: 100px;
            height: 100px;
            border-radius: 100px;
            background-color: white;
            margin-right: 10px;
        }
        .form-label{
            color: #fdb735;
            font-weight: bold;
        }
        .form-control{
            background-color: #66c2ff;
            width: 600px;
            height: 40px;
        }
        #imagemlogo{
            width: 100%;
            height: 100px;
        }
        #faixada{
            width: 100%;
            height: 50px;
            background-color: black;
            color: white;
            font-size: 30px;
            text-align: center;
        }
        #okbutton{
            width: 100%;
            height: 50px;
            background-color: black;
            border-radius: 50px;
            margin-top: 15px;
            font-weight: bold;
        }
        #empresas{
            background-color: #000000;
            width: 50%;
            height: 800px;
        }
        #empresaicon{
            width: 200px;
            height: 50px;
            float: left;
            margin: 30px;
            color: #ffffff;
            font-size: 30px

        }
        #plusbutton{
            width: 40px;
            height: 40px;
            float: right;
            border-radius: 100px;
            background-color: #ffffff;
            color: #000000;
            font-weight: bold;
            margin: 5px;
            padding: 0px;
            font-size: 20px;
        }
        #pesquisa{
            width: 480px;
            height: 30px;
            float: left;
            margin: 5px;
            margin-left: 30px;
            background-color: #ffffff;
            border-radius: 0;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        #contversatec{
            width: 480px;
            height: 200px;
            float: left;
            background-color: #ffffff;
            margin: 30px    
        }
        .empresascaixa{
            width: 60%;
            height: 1px;
            margin: 20px;
            float: left;
        }
        #editarempresas{
            width: 10px;
            height: 10px;
            float: left;
        }
    </style>
    <title>Home</title>
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
                <input type="number" class="form-control" id="CNPJ">
            </div>
            <div class="mb-3">
                <label for="E-mail" class="form-label">< E-mail ></label>
                <input type="email" class="form-control" id="E-mail">
            </div>
            <div class="mb-3">
                <label for="Whatsapp" class="form-label">< Whatsapp ></label>
                <input type="tel" class="form-control" id="Whatsapp">
            </div>
            <div class="mb-3">
                <label for="Telefone" class="form-label">< Telefone ></label>
                <input type="tel" class="form-control" id="Telefone">
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
</body>
</html>

