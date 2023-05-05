<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Agendamento de Serviços</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite([
            'resources/js/app.js',
            'resources/css/app.css',
            'node_modules/bootstrap/dist/css/bootstrap.min.css',
            'node_modules/bootstrap/dist/js/bootstrap.bundle.js' 
            ])

        <script>
			function confirmarDelete(url) {
				if (confirm("Deseja excluir o serviço?")) {
					document.location = url;
				}  
			}
		</script>    
           
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
                                    <a class="nav-link" href="{{ route('registrar_servico') }}">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </nav>
            </div>
            <div class="container">
                <div class="row">
                    <div class="mb-3">
                        &nbsp;
                        <h3>Consulta - Contatos Agendados</h3>
                    </div> 
                    <table class="table">   
                        <thead style="background-color: blue; text-align=center;">    
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Telefone</th>
                                <th scope="col">Origem</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Observação</th>
                                <th class="text-center" colspan="2" scope="col">Ação</th>
                            </tr>
                        </thead>                            
                        @foreach($servicos as $servico)
                            <tr scope="row">        
                                <td>{{ $servico->nome}}</td>
                                <td>{{ $servico->telefone }}</td>
                                <td>{{ $servico->origem }}</td>
                                <td>{{ $servico->data_contato }}</td>                                
                                <td>{{ $servico->observacao }}</td>
                                <td class="text-center">
                                    <div class="btn-group" class="d-flex">
                                        <form action="{{ route('show_servico', ['id'=>$servico->id]) }}" method="GET">
                                            <button type="submit" class="btn btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                </svg>
                                            </button> 
                                        </form>
                                        <form action="" method="POST">
                                            @csrf    
                                            @method('DELETE')
                                            <button type="button" onclick="confirmarDelete('/agendamentos/excluir/{{$servico->id}}')" class="btn btn-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16">
                                                    <path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/>
                                                </svg>
                                            </button> 
                                        </form>
                                    </div>    
                                   
                                </td>
                                
                                </br>
                            </tr>    

                               
                        @endforeach 

                    </table>           
                </div>
            </div>
        </div>    
    </body>
</html>    
