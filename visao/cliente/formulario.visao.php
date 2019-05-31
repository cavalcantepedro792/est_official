<div class="welcome-user">
	<img src="./publico/img/user/user.png" style="width: auto; height: 100%;">
	<h1>Cadastre-se</h1>
</div>
<form method="POST" action="" class="form-user">
	<label for="mail" class="label-user">E-mail<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. silvajoao@gmail.com" type="email" name="email" id="mail"><br>

	<label for="user-password" class="label-user">Senha<span>*</span></label><br>
	<input class="input-user" placeholder="Senha" type="password" name="senha" id="user-password"><br>

	<label for="cpf" class="label-user">CPF<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. 12345678910" type="number" name="cpf" id="cpf"><br>

	<label for="first-name" class="label-user">Nome<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. João" type="text" name="nome" id="first-name"><br>

	<label for="second-name" class="label-user">Sobrenome<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. da Silva" type="text" name="sobrenome" id="second-name"><br>

	<label for="birthday" class="label-user">Data de Nascimento<span>*</span></label><br>
	<div class="birthday-user">
		<select class="input-user" name="day">
			<option value="default">Dia</option>
			<?php for ($i=1; $i < 31 ; $i++):?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php endfor;?>
		</select>
		<select class="input-user" name="month">
			<option value="default">Mês</option>
			<?php for($m=1; $m<=12; ++$m):?>
				<option value="<?=$i?>"><?=date('F', mktime(0, 0, 0, $m, 1))?></option>
			<?php endfor;?>
		</select>
		<select class="input-user" name="year">
			<option value="default">Ano</option>
			<?php for ($i=date("Y"); $i >= 1960 ; $i--):?>
				<option value="<?=$i?>"><?=$i?></option>
			<?php endfor;?>
		</select>
	</div>
	<!-- <input class="input-user" type="date" name="data_de_nascimento" id="birthday"><br> -->

	<label class="label-user">Sexo<span>*</span></label>
	<div class="sex-user">
		<div class="gender-user">
			<input type="radio" name="sexo" value="M" id="man"  checked="checked">
			<label class="label-gender-user" for="man">Masculino</label>
		</div>
		<div class="gender-user">
			<input type="radio" name="sexo" value="F" id="woman">
			<label class="label-gender-user" for="woman">Feminino</label><br>
		</div>
	</div>

	<label for="user-phone-number" class="label-user">Telefone<span>*</span></label><br>
	<input class="input-user" placeholder="Ex. 15996998899" type="tel" name="telefone" id="user-phone-number"><br>

	<button type="submit" class="submit-button-user-register">Cadastrar</button>
</form>
<p class="question-register">Já tem um cadastro? <a href="./login/" style="color: #000; text-decoration: underline;">Entre</a></p>