<!--Formulario de envio dos dados de cadastro-->
<!--TROCAR O NOME DO BD DE ACORDO COM O NOME DO BD DO PROJETO OFCIAL-->
<h1>CADASTRO</h1>
<form action="?pg=cadastrobd" method="post">
    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>
    <div class="mb-3">
        <label>Login</label>
        <input type="text" name="login" class="form-control">
    </div>
    <div class="mb-3">
        <label>senha</label>
        <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>