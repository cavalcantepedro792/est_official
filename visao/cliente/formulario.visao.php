<div class="welcome-user">
	<img src="./publico/img/user/user.png" style="width: auto; height: 100%;">
	<h1>Cadastre-se</h1>
</div>
<form method="POST" action="" class="form-user">
	<label for="mail" class="label-user">E-mail<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. silvajoao@gmail.com" type="email" name="email" id="mail"><br>

	<div class="separador"></div>

	<label for="user-password" class="label-user">Senha<span>*</span></label><br>
	<input class="input-user" placeholder="Senha" type="password" name="senha" id="user-password"><br>

	<div class="separador"></div>

	<label for="cpf" class="label-user">CPF<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. 12345678910" type="number" name="cpf" id="cpf"><br>

	<div class="separador"></div>

	<label for="first-name" class="label-user">Nome<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. João" type="text" name="nome" id="first-name"><br>

	<div class="separador"></div>

	<label for="second-name" class="label-user">Sobrenome<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. da Silva" type="text" name="sobrenome" id="second-name"><br>

	<div class="separador"></div>

	<label for="birthday" class="label-user">Data de Nascimento<span>*</span></label><br>
	<input class="input-user" type="date" name="data_de_nascimento" id="birthday"><br>

	<div class="separador"></div>

	<label class="label-user">Sexo<span>*</span></label>
	<div class="sex-user">
		<div class="gender-user">
			<input type="radio" name="sexo" value="M" id="man">
			<label class="label-gender-user" for="man">Masculino</label>
		</div>
		<div class="gender-user">
			<input type="radio" name="sexo" value="F" id="woman">
			<label class="label-gender-user" for="woman">Feminino</label><br>
		</div>
	</div>

	<div class="separador"></div>

	<label for="user-phone-number" class="label-user">Telefone<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. 15996998899" type="tel" name="telefone" id="user-phone-number"><br>

	<button type="submit" class="submit-button-user-register">Cadastrar</button>
</form>
<p class="question-register">Já tem um cadastro? <a href="./login/" style="color: #000; text-decoration: underline;">Entre</a></p>