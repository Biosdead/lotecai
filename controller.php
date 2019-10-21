<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        $concurso = $_POST['concurso'];
        if (isset($concurso)) {
            if ($concurso == 1) {
                header('Location: ./cadastrar.html');
            } else {
                header('Location: ./app.php?'.$_POST['concurso']);
            }
            
        } else {
            echo 'valor não configurado';
        }
        
    ?>

</body>
</html>