<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="recebeinfo.php" method="post">
        <input type="text" name="nome" id="nome">
        <input type="date" name="data" id="data">
        <input type="text" name="renda" id="renda">
        <input type="submit" value="enviar">
    </form>
    <form action="edicao.php" method="post">
        <label for="alter"> Digite qual usuário você deseja alterar as informações <br> </label>
        <input type="text" name="alter" id="alter">
        <input type="text" name="nome" id="nome">
        <input type="date" name="data" id="data">
        <input type="text" name="renda" id="renda">
        <input type="submit" value="editar">
    </form>
</body>
</html>