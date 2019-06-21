<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>kanban</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
<!--     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!--Bootstrap4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link href="{{asset('css/sign_up.css')}}" rel="stylesheet">
    <link href="{{asset('css/sign_in.css')}}" rel="stylesheet">
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('css/top.css') }}" rel="stylesheet">
    <link href="{{asset('css/button.css') }}" rel="stylesheet">
    <link href="{{asset('css/common.css') }}" rel="stylesheet">
    <link href="{{asset('css/header.css') }}" rel="stylesheet">
    <link href="{{asset('css/card_edit.css') }}" rel="stylesheet">
    <link href="{{asset('css/card_new.css') }}" rel="stylesheet">
    <link href="{{asset('css/card_show.css') }}" rel="stylesheet">
    <link href="{{asset('css/list_new.css') }}" rel="stylesheet">
    <link href="{{asset('css/list_edit.css') }}" rel="stylesheet">
</head>
<body>
    <!--ログインしている場合のみヘッダーを表示する-->
    @auth
    <header class="header">
        <nav class="nav">
            <ul class="header_menu">
                <li class="nav-link">{{Auth::user()->name}}さん</li>
                <li class="header_menu_title">
                    <a class="nav-link listNew" href="">kanban</a>
                </li>
                <li>
                    <ul class="header_menu_inner">
                <li>
                    <a class="nav-link listNew" href="{{route('new')}}">リストを作成</a>
                </li>
                <li>
                    <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">ログアウト</a>
                    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
                        {{csrf_field()}}
                    </form>
                </li>
            </ul>
                </li>
                    </ul>  
        </nav>
    </header>
    @endauth
    @yield('content')
</body>
</html>
