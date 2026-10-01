<?php
    include "config/conexao.php";
    // post recebe dados enviados pelo fomulario
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $dataEntrada = $_POST["dataEntrada"];
    $status = $_POST["status"];

    $sql = "INSERT into ordensservico (cliente, equipamento, problema, dataEntrada, status) values (?, ?, ?, ?, ?)";
    
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param(
        "sssss",
        $cliente,
        $equipamento,
        $problema,
        $dataEntrada,
        $status
    );

    if ($stmt->execute()){
        header("Location: index.php");
        exit;
    } else{
        echo "Erro ao cadastrar ordem de serviço.";
    }
?>