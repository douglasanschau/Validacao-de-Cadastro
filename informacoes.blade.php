<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Informações</title>
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
                         <div class="card-title">Informações de Cadastro</div>
                      </div>
                      <div class="card-body">
                          
                          <label>Nome do Cliente: {{$cliente->nome}}</label><br>
                          <label>Idade do Cliente: {{$cliente->idade}}</label> <br>
                          <label>Endereço do Cliente: {{$cliente->endereco}}</label> <br>
                          <label>E-mail do Cliente: {{$cliente->email}} </label> <br>
                          
                      </div>
                      <div class="card-footer">
                          <a href="/clientes/edit/{{$cliente->id}}" class="btn btn-sm btn-primary">Editar</a>
                          <a href="/clientes"class="btn btn-dark btn-sm">
                            Voltar
                          </a>
                      </div>
                  </div>
              </div>
          </div>
      </main>
     <script src="{{ asset('js/app.js')}}" type="text/JavaScript"></script>
  </body>
</html>