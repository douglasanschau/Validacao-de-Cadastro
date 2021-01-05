<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Clientes</title>
      <link href="{{asset('css/app.css')}}" rel="stylesheet">
      <meta name="csrf-token" content="{{ csrf_token()}}">
      <style> 
        body {
            padding:20px;
        }
      </style>
  </head>
  <body>
      <main role="main">
          <div class="row">
              <div class="container col-md-8 offset-md-2">
                  <div class="card border">
                      <div class="card-header">
                         <div class="card-title">Clientes Cadastrados</div>
                      </div>
                      <div class="card-body">
                          <table class="table table-bordered table-hover" id="tableClientes">
                             <thead>
                                 <tr>
                                     <th>Código</th>
                                     <th>Nome</th>
                                     <th>E-mail</th>           
                                     <th>Ações</th>
                                 </tr>
                             </thead>
                             <tbody>
                                @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->email}}</td>
                                    <td>
                                        <a href="clientes/info/{{$cliente->id}}" class="btn btn-success btn-sm">
                                             Info
                                        </a>
                                        <a href="clientes/edit/{{$cliente->id}}" class="btn btn-primary btn-sm">
                                            Editar
                                        </a>
                                       <a href="clientes/delete/{{$cliente->id}}" class="btn btn-danger btn-sm">
                                            Deletar
                                       </a>
                                    </td>
                                </tr>
                                @endforeach
                               </tbody>
                            </thead>
                          </table>
                      </div>
                      <div class="card-footer">
                          <a href="/clientes/cadastro" class="btn btn-success btn-sm">Novo Cliente</a>
                      </div>
                  </div>
              </div>
          </div>
      </main>
     <script src="{{ asset('js/app.js')}}" type="text/JavaScript"></script>
  </body>
</html>