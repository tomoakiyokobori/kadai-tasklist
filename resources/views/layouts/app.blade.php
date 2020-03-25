<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>Tasklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>

    <body>
<<<<<<< HEAD
            @include('commons.navbar')
=======
        <header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="/">Tasklist</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav">
                        
                     @if (Auth::check())
                        <li class="nav-item">{!! link_to_route('tasks.create', '新規タスクの追加', [], ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item">{!! link_to_route('logout.get', 'Logout', [], ['class' => 'nav-link']) !!}</li>
                        
                        
                     @else
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                     @endif
                    </ul>
                </div>
            </nav>
        </header>
>>>>>>> 56c3f64f58bf0554cc26fac7a1a41ed8bc47e827
        
        <div class="container">
            @include('commons.error_messages')
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>