<!-- <h2>Acesse o sistema</h2>

<form method="POST" action="">


    <label for="login">email:</label>
    <input id="login" class="form-control" type="text" name="email">

    <label for="passwd">senha:</label>
    <input id="passwd" class="form-control" type="password" name="senha">

    <button type="submit" class="btn btn-primary">vai login</button>

</form> -->
<div class="login">
	<div class="welcome-user">
		<img src="./publico/img/user/user.png" style="width: auto; height: 100%;">
		<h1>Login do cliente</h1>
	</div>
	<form action="" method="POST" class="form-login">
		<label class="login-label" for="email"><h3>E-mail:<span>*</span></h3></label><br>
		<input class="login-input" type="text" name="username" id="email" placeholder="E-mail"><br>
		<label class="login-label" for="senha"><h3>Senha:<span>*</span></h3></label><br>
		<input class="login-input" type="password" name="userpassword" id="senha" placeholder="Senha"><br>
		<button type="submit" class="login-button">Entrar</button>
	</form>
	<p style="font-size: 18px;">Não tem cadastro? <a href="./cliente/adicionar"  style="color: #000; text-decoration: underline;">Cadastre-se</a></p>
</div>