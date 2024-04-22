<?php

    session_start();

    $servidor = '10.1.3.94';
    $usuario  = 'setur';
    $senha    = 'setur201522';
    $banco    = 'raffledb';

    $mysqli = new mysqli ($servidor, $usuario, $senha, $banco);

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $texto = $_POST['texto'];
    $fotos = $_FILES['fotos'];
    $datta = $_POST['datta'];

echo $titulo;
exit;

    if(isset($_FILES['fotos']))
    {
        $arquivo = $_FILES['fotos']['name'];
        
        $extensao = strtolower(pathinfo($arquivo, PATHINFO_EXTENSION));

        $novo_nome = md5(time()).".".$extensao;

        $diretorio = "fotosNoticias/";

        move_uploaded_file($_FILES['fotos']['tmp_name'], $diretorio . $novo_nome);
    }

    mysqli_query($mysqli,"INSERT INTO tb_noticias(titulo, descricao, texto, fotos, datta) VALUES ('$titulo', '$descricao', '$texto', '$novo_nome', '$datta')");

    mysqli_close($mysqli);

    header('Location: ../index.php');

    die();
?>