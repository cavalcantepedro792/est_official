<h1>Cadastre-se</h1>
<form method="POST" action="">
	<label for="mail">E-mail<span>*</span></label><br>
	<input type="email" name="emailCliente" id="mail"><br>

	<label for="user-password">Senha<span>*</span></label><br>
	<input type="password" name="senhaCliente" id="user-password"><br>

	<label for="cpf">CPF<span>*</span></label><br>
	<input type="number" name="cpfCliente" id="cpf"><br>

	<label for="complete-name">Nome Completo<span>*</span></label><br>
	<input type="text" name="nomeCliente" id="complete-name"><br>

	<label for="birthday">Data de Nascimento<span>*</span></label><br>
	<input type="date" name="nascCliente" id="birthday"><br>

	<h3>Sexo<span>*</span></h3>
	<input type="radio" name="sexoCliente" value="Masculino" id="man">
	<label for="man">Masculino</label>
	<input type="radio" name="sexoCliente" value="Feminino" id="woman">
	<label for="woman">Feminino</label><br>

	<label for="user-phone-number">Telefone<span>*</span></label><br>
	<input type="tel" name="telCliente" id="user-phone-number"><br>

	<button type="submit">Cadastrar</button>
</form>
<p>Já tem um cadastro? <a href="." style="color: #000;">entrar</a></p>