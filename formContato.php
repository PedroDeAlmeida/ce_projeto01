<div class="container">
    <div class="page-header">
        <h1>Contato</h1>
    </div>

    <form name="formulario" role="form" method="post" action="/contato">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" name="email">
        </div>

        <div class="form-group">
            <label for="assunto">Assunto:</label>
            <input type="text" class="form-control" name="assunto">
        </div>

        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <input type="text" class="form-control" name="mensagem">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
    </form>
</div>