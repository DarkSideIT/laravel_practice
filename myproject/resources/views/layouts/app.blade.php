<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <title>Студенты</title>
</head>
<body>
    <style>
        h1{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        img{
            width: 50px;
            height: 50px;
        }

        body{
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        main{
            flex: 1;
        }

        footer{
            text-align: center;
            padding: 10px;
        }

        ul{
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 0;
        }
        li{
            list-style: none;
            margin-right: 10px;
            padding: 6px;

        }
        </style>
    <header>
        <h1><img src="{{ asset('imgs/americano.png') }}" alt="logo"></h1>
        <nav>
            <ul>
                <li><a href="/form">Форма заполнения</a></li>
                <li><a href="/data-table">Студенты</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Илья Цыдыпов</p>
    </footer>

</body>
</html>
