<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
	<h2>IMC</h2>
	<form method="post" action="imc.php">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" required><br><br>

		<label for="peso">Peso:</label>
		<input type="number" name="peso" required><br><br>

		<label for="altura">Altura:</label>
		<input type="number" name="altura" step="0.01" required><br><br>

		<input type="submit" value="Calcular">
	</form>
</body>
</html>