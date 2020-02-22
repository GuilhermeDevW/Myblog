<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">My Blog</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" style="margin-top:8px;" href="{{ url('/posts') }}">POST'S</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link"  style="margin-top:8px;" href="{{ url('/') }}">Adicionar</a>
            </li>  
          </ul>
        </div>
      </nav>
        <section>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-3">
                  @foreach ($a as $item)
                    <div class="col mb-4">
                      <div class="card">

                        <div class="card-body">
                        <h5 class="card-title"><{{$item['Titulo_Post']}}</h5>
                        <p class="card-text">{{ mb_strimwidth($item['post'], 0, 200 ,"...")}}</p>
                        </div>
                      </div>
                      <form style=" float: left;
                      margin-right: 25px;"action={{ url('/materia') }} method="POST">
                        {{ csrf_field() }}
                            <td><input type="hidden" name="id" value={{$item['id_post']}}>
                            <input type="submit"  class="btn btn-primary" value="Atualizar">
                            </td>
                      </form> 
                      <form action={{ url('/delete') }} method="POST">
                        {{ csrf_field() }}
                            <td><input type="hidden" name="id" value={{$item['id_post']}}>
                            <input type="submit"  class="btn btn-danger" value="Excluir">
                            </td>
                      </form> 
                    </div>
                    
                     @endforeach
                </div>
                </div>
            
      </section>
      
</body>
</html>