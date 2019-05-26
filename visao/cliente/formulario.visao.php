<div class="welcome-user">
	<img src="./publico/img/user/user.png" style="width: auto; height: 100%;">
	<h1>Cadastre-se</h1>
</div>
<form method="POST" action="" class="form-user">
	<label for="mail" class="label-user">E-mail<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. silvajoao@gmail.com" type="email" name="emailCliente" id="mail"><br>

	<div class="separador"></div>

	<label for="user-password" class="label-user">Senha<span>*</span></label><br>
	<input class="input-user" placeholder="Senha" type="password" name="senhaCliente" id="user-password"><br>

	<div class="separador"></div>

	<label for="cpf" class="label-user">CPF<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. 12345678910" type="number" name="cpfCliente" id="cpf"><br>

	<div class="separador"></div>

	<label for="complete-name" class="label-user">Nome Completo<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. João da Silva" type="text" name="nomeCliente" id="complete-name"><br>

	<div class="separador"></div>

	<label for="birthday" class="label-user">Data de Nascimento<span>*</span></label><br>
	<input class="input-user" type="date" name="nascCliente" id="birthday"><br>

	<div class="separador"></div>

	<label class="label-user">Sexo<span>*</span></label>
	<div class="sex-user">
		<div class="gender-user">
			<input type="radio" name="sexoCliente" value="Masculino" id="man">
			<label class="label-gender-user" for="man">Masculino</label>
		</div>
		<div class="gender-user">
			<input type="radio" name="sexoCliente" value="Feminino" id="woman">
			<label class="label-gender-user" for="woman">Feminino</label><br>
		</div>
	</div>

	<div class="separador"></div>

	<label for="user-phone-number" class="label-user">Telefone<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. 15996998899" type="tel" name="telCliente" id="user-phone-number"><br>

	<button type="submit" class="submit-button-user-register">Cadastrar</button>
</form>
<p class="question-register">Já tem um cadastro? <a href="./cliente/logarCliente/" style="color: #000; text-decoration: underline;">Entre</a></p>