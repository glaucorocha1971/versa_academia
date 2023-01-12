<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
      body{
        
        padding: 9px;
        background:  rgb(239, 237, 237);
        font-size: 23px;
        color:rgb(231, 170, 11);
        font-weight:bolder;
      }
    .form-control{
      width: 525px;

      
     
    }
    #btn{
      position: absolute;
      width: 500px;
      top:72%;
      left:36%;
      animation-name:

    }
    #container{
      position:absolute;
      width: 800px;
      height: 600px;
      top:14%;
      left:36%;
      display:grid;

    }
    h1{
      border-radius:10px;
      text-shadow: 2px 3px black;
      font-family:'Oswald';
      background:rgb(84, 86, 86);
      width:520px;
      height:56px;
      display:flex;
      justify-content: center;
}
 #img{
  border-radius:10px;
 }     
  </style>
</head>
<body>
<section id="container">
<img src="topo.jpg" width=526 id="img"alt="">
<h1>Versa Empresas</h1>
<form>
    <label for="nome"  class="label">Nome Fantasia</label>
    <input type="text" class="form-control">

    <label for="nome" class="label">Razão Social></label>
    <input type="text" class="form-control">

    <label for="nome" class="label">CNPJ</label>
    <input type="text" class="form-control">

    <label for="email" class="label">E-MAIL</label>
    <input type="email" class="form-control">

    <label for="whatsapp" class="label">whatsapp</label>
    <input type="text" class="form-control">
    </section>
   
   <!--<div> <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" >
    </div>-->
    
</form>
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-primary" id="btn"type="button" >OK</button>
</div>
</section>

</body>
</html>