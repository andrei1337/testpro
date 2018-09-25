<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charse = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>{{config('app.name'), 'Players'}}</title>
        <link rel = "stylesheet" href = "{{asset('css/app.css')}}">
        <link href = "https://fonts.googleapis.com/css?family=Raleway:100,600" rel = "stylesheet" type = "text/css">
        <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous">  
        <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class = "container">
            <div id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                      <a class="nav-link" href="/teams">Teams</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/players">Players</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
      @yield('content')
      </body>
</html>