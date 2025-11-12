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
// <?php
// // Lê os dados brutos do corpo da requisição
// $input = file_get_contents("php://input");

// // Converte de JSON para array associativo
// $dados = json_decode($input, true);

// // Agora você pode usar as variáveis normalmente
// $nome = $dados["nome"];
// $idade = $dados["idade"];

// echo "Recebi nome: $nome e idade: $idade";

mysqli_close($conexao);
?>



