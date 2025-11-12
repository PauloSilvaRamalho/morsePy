<?php
header('Content-Type: text/plain; charset=utf-8');

$conexao = mysqli_connect('paparella.com.br', 'paparell_prof', '@Senai2025', 'paparell_iot');
if (!$conexao) {
    die('Erro ao conectar: ' . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // ======= CONTROLE DO LED =======
    $morse = $_POST['morse'] ?? '';
    $codigo = isset($_POST['codigo']) ? intval($_POST['codigo']) : 0;
    $query = $conexao->prepare("INSERT INTO morse_iot (morse, traducao) VALUES (?, ?)");
    $query->bind_param("si", $nome, $estado);
    $query->execute();
    }

   

//Dados do Banco de dados (morse_iot):
//id_morse int auto_increment primary key
//morse varchar(255) not null
//traducao varchar(255) not null 


mysqli_close($conexao);
?>



