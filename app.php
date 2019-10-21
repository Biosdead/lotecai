<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.0/css/bulma.css" />
    <title>Loteca 1.0</title>
</head>

<body>

    <section class="hero">
        <div class="hero-body">
            <div class="container notification is-danger has-text-centered">
                <h1 class="title">
                    Programa de jogos da Loteca
                </h1>
                <h2 id="concurso" class="subtitle">
                    LSF
                </h2>
            </div>
        </div>
    </section>


    
    <div class="columns has-text-centered">
            <div class="column">
                <a class="button is-danger is-large is-fullwidth" onclick="GerarJogoAleatorio()">Gerar Jogo Aleatório</a>
            </div>
            <div class="column">
                <a class="button is-danger is-large is-fullwidth" onclick="GerarJogoAleatorioProvavel()">Gerar Jogo Aleatório Provável</a>
            </div>
            <div class="column">
                    <a class="button is-success is-large is-fullwidth" onclick="GravarJogo()">Gravar Jogo</a>
            </div>
            <div class="column">
                <a class="button is-warning is-large is-fullwidth" onclick="VerHistorico()">Ver Histórico</a>
            </div>
            <div class="column">
                    <a class="button is-info is-large is-fullwidth" onclick="ConferirResutlado()">Conferir Resultado</a>
            </div>
        </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>Jogo</p>
        </div>
        <div class="column">
            Time 1
        </div>
        <div class="column">
            Empate
        </div>
        <div class="column">
            Time 2
        </div>
    </div>

    <div class="columns has-text-centered">
        <div class="column">
            <p>1</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <p id="time1">Paysandu </p>
                <input id="checkbox1" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox2" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time2">Remo </span>
                <input id="checkbox3" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>2</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time3">Paysandu </span>
                <input id="checkbox4" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox5" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time4">Remo </span>
                <input id="checkbox6" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>3</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time5">Paysandu </span>
                <input id="checkbox7" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox8" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time6">Remo </span>
                <input id="checkbox9" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>4</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time7">Paysandu </span>
                <input id="checkbox10" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox11" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time8">Remo </span>
                <input id="checkbox12" type="checkbox">
            </label>
        </div>
    </div>

    <div class="columns has-text-centered">
        <div class="column">
            <p>5</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time9">Paysandu </span>
                <input id="checkbox13" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox14" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time10">Remo </span>
                <input id="checkbox15" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>6</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time11">Paysandu </span>
                <input id="checkbox16" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox17" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time12">Remo </span>
                <input id="checkbox18" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>7</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time13">Paysandu </span>
                <input id="checkbox19" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox20" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time14">Remo </span>
                <input id="checkbox21" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>8</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time15">Paysandu </span>
                <input id="checkbox22" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox23" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time16">Remo </span>
                <input id="checkbox24" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>9</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time17">Paysandu </span>
                <input id="checkbox25" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox26" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time18">Remo </span>
                <input id="checkbox27" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>10</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time19">Paysandu </span>
                <input id="checkbox28" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox29" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time20">Remo </span>
                <input id="checkbox30" type="checkbox">
            </label>
        </div>
    </div>



    <div class="columns has-text-centered">
        <div class="column">
            <p>11</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time21">Paysandu </span>
                <input id="checkbox31" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox32" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time22">Remo </span>
                <input id="checkbox33" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>12</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time23">Paysandu </span>
                <input id="checkbox34" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox35" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time24">Remo </span>
                <input id="checkbox36" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
        <div class="column">
            <p>13</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time25">Paysandu </span>
                <input id="checkbox37" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox38" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time26">Remo </span>
                <input id="checkbox39" type="checkbox">
            </label>
        </div>
    </div>

    <div class="columns has-text-centered">
        <div class="column">
            <p>14</p>
        </div>
        <div class="column">
            <label class="checkbox">
                <span id="time27">Paysandu </span>
                <input id="checkbox40" type="checkbox">
            </label>
        </div>
        <div class="column">
            <label class="checkbox">
                <input id="checkbox41" type="checkbox">
            </label>
        </div>
        <div class="column" >
            <label class="checkbox" >
                <span id="time28" >Remo </span>
                <input id="checkbox42" type="checkbox">
            </label>
        </div>
    </div>


    <div class="columns has-text-centered">
            <div class="column">
                <p id="valorAposta" class="notification is-info" >Valor da Aposta: </p>
            </div>
            <div class="column">
                <p id="Acertos" class="notification is-warning">Acertos: </p>
            </div>
            <div class="column">
                <p id="QtdUnos" class="notification is-danger">Qtd de Unos: </p>
            </div>
            <div class="column">
                <p id="QtdDuplos" class="notification is-black">Qtd de Duplos: </p>
            </div>
            <div class="column">
                <p id="QtdTriplos" class="notification is-light">Qtd de Triplos: </p>
            </div>
        </div>

        <div class="columns has-text-centered">
            <div class="column">
                <a class="is-dark button is-large is-fullwidth" onclick="contaJogo()">Atualiza</a>
            </div>
        </div>


        <div class="columns has-text-centered">
            <div class="column">
                <a class="is-info button is-large is-fullwidth" onclick="InserirResultado()">Inserir Resultado</a>
            </div>
        </div>



    <footer class="footer">
        <div class="container">
            <div class="content has-text-centered">
                <p>
                    <strong>Criado</strong> por Lennon SF
                </p>
            </div>
        </div>
    </footer>


    <?php 
    require_once 'bd_conexao.php';
    $concursoSelecionado = array_keys($_GET)[0];
    $dados = consultar("SELECT * FROM `concursos` WHERE concurso = ".$concursoSelecionado."");
    // var_dump($dados);
    ?>

</body>



<script src="loteca.js"></script>

<script type="text/javascript">
var arr_bd = <?php echo json_encode($dados) ?>;
window.onload=tratarDadosBanco(arr_bd);
</script>

</html>