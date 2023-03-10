<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>BOOTSTRAP WITH VITE</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js' 
            ])

           
    </head>
    <body style="background-color: #CCCCCC;">
        <div class="container" style="background-color: #FFFFFF;">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                    <div class="container">
                        <a class="navbar-brand" href="#">SISTEMA WEB</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="/index">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </nav>
            </div>
            <div class="row">
                <form style="padding: 0px 30px 20px 30px;">
                    <div class="mb-3">
                        &nbsp;
                        <h3>Cadastrar - Agendamento de Potenciais Clientes</h3>
                        <p>Sistema utilizado para agendamento de serviços.</p>
                    </div>    
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome:</label>
                        <input type="nome" class="form-control" id="nome" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefone:</label>
                        <input type="telefone" class="form-control" id="telefone" aria-describedby="emailHelp" placeholder="(XX) XXXX-XXXX">
                    </div>
                    <div class="mb-3">
						<label for="inputState" class="form-label">Origem:</label>
						<select id="cboEstado" name="cboEstado" class="form-select">
							<option selected>Escolha...</option>
							<option>Celular</option>
                            <option>WhatsApp</option>
                            <option>Telegram</option>
						</select>	
					</div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
                        <input type="date" class="form-control" required name="dataContato" id="dataContato">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
                &nbsp;
            </div>
        </div>
    </body>
</html>    