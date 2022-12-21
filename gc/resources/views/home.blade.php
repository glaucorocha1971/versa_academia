<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        #geral{
            margin: 0;
            padding: 0;
            display: flex;
        }
        #naveUm{
            width: 50%;
            height: 1000px;
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        #logo{
            height: 100px;
            width: 90%;
            background-color: red;
        }
        ul{
            list-style-type: none;
        }
        li{
            font-size: 20pt;
            font-family: sans-serif;
        }
        li a{
            text-decoration: none;
            color: black;
        }
        li a:hover{
            opacity: 0.3;
        }
        .linkSecundario{
            font-size: 17pt;
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
    </style>
    <title>Home</title>
</head>
<body id="geral">
    <div id="naveUm">
        <figure id="logo">

        </figure>
        <nav>
            <ul>
                <li><a href="#">< > Versa Empresas</a></li>
                <li>< > Versa Ocupações</li>
                <li>
                    <ul>
                        <li><a class="linkSecundario" href="#">< > Versa Formação</a></li>
                        <li><a class="linkSecundario" href="#">< > Versa Áreas GC</a></li>
                        <li><a class="linkSecundario" href="#">< > Versa Atividades</a></li>
                        <li><a class="linkSecundario" href="#">< > Versa Conhecimento</a></li>
                        <li><a class="linkSecundario" href="#">< > Versa Competência</a></li>
                        <li><a class="linkSecundario" href="#">< > Versa Habilidades</a></li>
                        <li><a class="linkSecundario" href="#">< > Versa Atitudes</a></li>
                        <li><a class="linkSecundario" href="#">< > Versa Certificações</a></li>
                    </ul>
                </li>
                <li><a href="#">Versa Colaboradores</a></li>
            </ul>
        </nav>
    </div>
    <div style="background-color: black; width: 50%; height: 1000px">
        <div id="perfil">
            <figure id="fotoPerfil">

            </figure>
            <div style="color: white">
                <h3 style="margin-bottom: -4px">Nome do Usuario</h3>
                <p>Perfil</p>
                <p>E-mail</p>
            </div>
        </div>
    </div>
</body>
</html>
