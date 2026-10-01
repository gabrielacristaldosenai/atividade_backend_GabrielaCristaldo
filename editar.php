<?php
    include "config/conexao.php";

    $id = intval($_GET["id"]);

    $sql = "SELECT * from ordensservico where id = ?";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();

    $resultado = $stmt->get_result();
    $ordem = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Ordem</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Editar Ordem de Serviço</h1>
        <form action="atualizar.php" method="POST">
            <input
                type="hidden"
                name="id"
                value="<?php echo $ordem["id"];?>"
            >
            <label>Cliente</label>
            <input
                type="text"
                name="cliente"
                value="<?php echo htmlspecialchars($ordem["cliente"]);?>"
                required
            >
            <label>Equipamento</label>
            <input
                type="text"
                name="equipamento"
                value="<?php echo htmlspecialchars($ordem["equipamento"]);?>"
                required
            >
            <label>Problema</label>
            <textarea name="problema" required>
                <?php echo htmlspecialchars($ordem["problema"]);?>            
            </textarea>
            <label>Data de Entrada</label>
            <input
                type="date"
                name="dataEntrada"
                value="<?php echo $ordem["dataEntrada"];?>"
                required
            >
            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em Análise">Em Análise</option>
                <option value="Em manutenção">Em manutenção</option>
                <option value="Concluído">Concluído</option>
            </select>
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>