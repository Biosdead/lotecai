<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css"/>
</head>
<body>


    <section class="hero">
        <div class="hero-body">
            <div class="container notification is-danger has-text-centered">
                <h1 class="title">
                    Selecione o Concurso desejado
                </h1>
                <h2 id="concurso" class="subtitle">
                    Boa Sorte!
                </h2>
            </div>
        </div>
    </section>

     

<form action="controller.php" method="post">
  <div class="field has-text-centered">
    <div class="control">
      <div class="select is-danger is-large">
        <select name="concurso">
        <?php
       require_once 'bd_conexao.php';
       
        $dados = consultar("SELECT concurso FROM `concursos`");
       
    
            foreach ($dados as $key) {
                echo '<option value="'.$key.'">'.$key.'</option>';
            }
        ?>
       
          <option value="1">Cadastrar Concurso</option>
        </select>
      </div>
     
      <button  type="submit">Enviar</button>

    </form>



    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>Criado</strong> por Lennon SF
                </p>
            </div>
        </div>
    </footer>
    
   
</body>
</html>