@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="materia/update" method="POST">
                        {{ csrf_field() }}
                        @foreach ($h as $item)
                            
                        @endforeach
                        <div class="form-group">
                          <label for="exampleInputEmail1">Novo Post</label>
                          
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-default">Titulo</span>
                            </div>
                        <input name="titulo" style="width:400%;" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$item['Titulo_post']}}" >
                          </div>


                          <div class="mb-3">
                            <label for="validationTextarea">Materia</label>
                            <textarea name="text" style="height: 400px; width: 100%"class="form-control is-invalid" id="validationTextarea"  placeholder="Required example textarea" required>{{$item['post']}}</textarea>
                              Faça a Redação da materia antes de enviar.
                            </div>
                          
                        </div>
                        <input name="id" style="width:400%;" type="text" class="hidden" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$item['id_post']}}" >

                        <button type="submit" class="btn btn-primary">Enviar</button>
                      
                          
                      </form>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
