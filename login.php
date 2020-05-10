<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
	</head>
	<body>
		<center>
			<form action="validacaoLogin.php" method="POST" >
				<H2>
					<hr><br><h1>Sistema EEEP. Walter Ramos<h1><br><hr>
					Email:
					<input type="text" name="email" placeholder="Digite seu email" required>
					Senha:
					<input type="password" name="senha" placeholder="Digite a senha" required>
					<button type="submit" name="btn-entrar"> Entrar </button> 
					<button type="reset" name="btn-limpar"> Limpar </button>
					<br><h2>Caso você naum tenha cadastro clique aqui: <a href="loginCadastro.php">Cadastro</a></h>
					<br><h2>Esqueceu sua senha? Clique aqui:<a href="loginRecuperacao.php">Recuperação</a></h2>
				</H2>
			</form>
		</center>
	</body>
</html>


<style type="text/css">
	*{
	margin: 0px;
	padding:0px;

}
body{
		background:url("projeto.jpg") no-repeat ;
		color:white;
		background-position: 60% 40%;
		font-family: Arial;
		background-size: 1950px 1550px;
		position: relative;
	}
input{
	background-color: white;
	display: block;
	height: 55px;
	width: 400px;
	margin: 10px;
	border-radius: 15px;
	border:1px solid white;
	font-size: 16pt;
	padding: 5px 7px;
	background-color: rgba(255,255,255,0.01);
	color: white;
	outline: none;
}
button{
	height: 55px;
	width: 190px;
	margin: 10px;
	border-radius: 10px;
	border:1px solid black;
	font-size: 16pt;
	padding: 10px 20px;
	outline: none;
}
a{
		color: white;
	
}
button[type=submit]{
	background-color:#708090; 
}
button[type=reset]{
	background-color:#708090; 
}
</style>