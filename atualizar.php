<?php
    include "config/conexao.php";

    $id = intval($_POST["id"]);
    $cliente = $_POST["cliente"];
    $equipamento = $_POST["equipamento"];
    $problema = $_POST["problema"];
    $dataEntrada = $_POST["dataEntrada"];
    $status = $_POST["status"];

    $sql = "UPDATE ordensservico
            SET cliente = ?,
                equipamento = ?,
                problema = ?,
                dataEntrada = ?,
                status = ?
            WHERE id = ?";

    $stmt = $conexao -> prepare($sql);

    $stmt -> bind_param(
        "sssssi",
        $cliente,
        $equipamento,
        $problema,
        $dataEntrada,
        $status,
        $id
    );

    if ($stmt->execute()){
        header("Location: index.php");
        exit;
    } else {
        echo "Erro ao atualizar.";
    }    
?>