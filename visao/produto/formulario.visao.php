<h2>Cadastro de Produto</h2>
<form method="POST" action="">
    <input type="text" name="nome_P" placeholder="Nome"><br>
    <input type="number" name="preco_P" placeholder="Preço"><br>
    <input type="text" name="marca_P" placeholder="Marca"><br>
    <input type="text" name="modelo_P" placeholder="Modelo"><br>
    <input type="number" name="code_P" placeholder="Código"><br>
    <select name="aliment_P">
        <option>Alimentação</option>
        <option value="110v">110</option>
        <option value="220v">220</option>
        <option value="bivolt">Bivolt</option>
    </select><br>
    <textarea name="desc_P" placeholder="Descrição"></textarea><br>
    <button type="reset">Refazer</button>
    <button type="submit">Cadastrar</button>
</form>