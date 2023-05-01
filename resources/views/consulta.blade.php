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
                                    <a class="nav-link" href="/">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" href="consulta">Consultar</a>
                                </li>
                            </ul>
                        </div>
                    </div>    
                </nav>
            </div>
            <div class="row">
                <div class="mb-3">
                    &nbsp;
                    <h3>Consulta - Contatos Agendados</h3>
                </div>    
                <table class="table">
                        <thead style="background-color: blue;">
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Origem</th>
                                <th scope="col">Contato</th>
                                <th scope="col">Observação</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            </tr>
                            <tr>
                            <th scope="row">3</th>
                            <td colspan="2">Larry the Bird</td>
                            <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                    
            </div>
        </div>
    </body>
</html>    
