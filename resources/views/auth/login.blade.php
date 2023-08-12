
@extends('layout')

@section('title')Авторизация@endsection

@section('main_content')
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Авторизация</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
  


     <div class="container my-3">
        <h1 class="text-center">Авторизация</h1>
        <div class="col-sm-6 mx-auto">
            <form method="POST" action="/login">
            @csrf
               
                <div class="mb-3">
                    <input placeholder="E-mail" name="email" type="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input placeholder="Пароль" name="password" type="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary form-control" value="Войти">
                </div>
            </form>
        </div>
     </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>



@endsection






