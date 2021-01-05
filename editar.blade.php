<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <title>Edição de Cadastro</title>
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
                         <div class="card-title">Editar Cadastro</div>
                      </div>
                      <div class="card-body">
                          <form action="/clientes/{{$cliente->id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome do Cliente</label>
                                <input type="text" id="nome"  value={{$cliente->nome}} class="form-control {{$errors->has('Nome') ? 'is-invalid' : 'is-valid'}}" name="Nome" placeholder="Nome">
                                @if($errors->has('Nome'))
                                    <div class="invalid-feedback">
                                      {{$errors->first('Nome')}}
                                     </div>
                                 @endif
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade do Cliente</label>
                                <input type="number" id="idade" value={{$cliente->idade}} class="form-control {{$errors->has('Idade') ? 'is-invalid' : 'is-valid'}}" name="Idade" placeholder="Idade">
                                @if($errors->has('Idade'))
                                <div class="invalid-feedback">
                                  {{$errors->first('Idade')}}
                                 </div>
                             @endif
                            </div>
                            <div class="form-group">
                                <label for="endereco">Endereço do Cliente</label>
                                <input type="text" id="endereco" value={{$cliente->endereco}} class="form-control {{$errors->has('Endereço') ? 'is-invalid' : 'is-valid'}}"" name="Endereço" placeholder="Endereço">
                                @if($errors->has('Endereço'))
                                <div class="invalid-feedback">
                                    {{$errors->first('Endereço')}}
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail do Cliente</label>
                                <input type="text" id="email" value={{$cliente->email}} class="form-control {{$errors->has('Email') ? 'is-invalid' : 'is-valid'}}"" name="Email" placeholder="teste@teste.com">
                                @if($errors->has('Email'))
                                  <div class="invalid-feedback">
                                      {{$errors->first('Email')}}
                                  </div>
                                @endif
                            </div>
                            <button class="btn btn-primary btn-sm" type="submit">Salvar</button>
                            <a href="/clientes" class="btn btn-danger btn-sm">Cancelar</a>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      </main>
     <script src="{{ asset('js/app.js')}}" type="text/JavaScript"></script>
  </body>
</html>