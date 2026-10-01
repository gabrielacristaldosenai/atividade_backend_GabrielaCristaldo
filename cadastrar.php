<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Problema</title>
    <link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
    <div class="container">
        <h1>Nova Ordem de Serviço</h1>
        <form action="salvar.php" method="POST">
            <label>Cliente</label>
            <input type="text" name="cliente" required><br><br>

            <label>Equipamento</label>
            <input type="text" name="equipamento" required><br><br>

            <label>Problema Apresentado</label>
            <textarea name="problema" required></textarea><br><br>

            <label>Data de Entrada</label>
            <input type="date" name="dataEntrada" required><br><br>

            <label>Status</label>
            <select name="status">
                <option value="Recebido">Recebido</option>
                <option value="Em análise">Em Análise</option>
                <option value="Em manutenção">Em Manutenção</option>
                <option value="Concluído">Concluído</option>
            </select><br><br>
            <button type="submit">Cadastrar Ordem</button>
        </form>

        <a href="index.php">Voltar</a>
    </div>
</body>
</html>