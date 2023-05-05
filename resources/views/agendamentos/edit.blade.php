<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agendamento de Serviços</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/css/style.css">
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
                                    <a class="nav-link active" href="{{ route('criar_servico') }}">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('visualizar_servico') }}">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </nav>
            </div>
            <div class="row">
                
                <form action="{{ route('alterar_servico') }}" method="POST" style="padding: 0px 30px 20px 30px;">
                
                    @csrf
           
                    <div class="mb-3">
                        &nbsp;
                        <h3>Editar - Agendamento de Potenciais Clientes</h3>
                        <p>Altere as informações do agendamento do serviço.</p>
                    </div>    

                    <div class="mb-3  form-group">
						<label for="exampleFormControlInput1">ID (Não editável):</label>
						<input type="text" readonly class="form-control" name="id" required id="id" value="{{ $servico->id; }}">
					</div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{ $servico->nome; }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telefone:</label>
                        <input type="text" name="telefone" class="form-control" id="telefone" placeholder="(XX) XXXX-XXXX" value="{{ $servico->telefone; }}">
                    </div>
                    <div class="mb-3">
						<label for="inputState" class="form-label">Origem:</label>
						<select id="origem" name="origem" required class="form-select" value="{{ $servico->origem; }}">
							<option disabled>Escolha...</option>
							@if($servico->origem == 'Celular')
								<option selected>Celular</option>
							@else
								<option>Celular</option>
							@endif

                            @if($servico->origem == 'WhatsApp')
								<option selected>WhatsApp</option>
							@else
								<option>WhatsApp</option>
							@endif

                            @if($servico->origem == 'Telegram')
								<option selected>Telegram</option>
							@else
								<option>Telegram</option>
							@endif
						</select>	
					</div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data do Contato:</label>
                        <input type="date" name="data_contato" class="form-control" required id="dataContato" value="{{ $servico->data_contato; }}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Observação:</label>
                        <input type="text" name="observacao" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{ $servico->observacao; }}">
                    </div>
                    <button class="btn btn-primary">Alterar</button>

                
                </form>
                &nbsp;
            </div>
        </div>
    </body>
</html>    