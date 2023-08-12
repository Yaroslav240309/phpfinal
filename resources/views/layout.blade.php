

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'> 
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor"></path></svg>
        <span class="fs-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sunpanam</font></font></span>
      </a>
        
      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/register"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Регистрация</font></font></a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/login"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Авторизация</font></font></a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/catalog"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Каталог</font></font></a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="/logout"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Выход</font></font></a>
      </nav>
    </div>
    <div class='container'>
        @yield('main_content')
    </div>
</body>
</html>
