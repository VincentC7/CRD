
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JustJob</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background: url('{{ asset('/img/background.jpg') }}') center no-repeat;
                background-size: 100% 100%;
                color: black;
                font-weight:bold;
                font-family: 'Raleway', serif;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .welcome {
                padding : 2%;
                background-color : white;
                background-size: 100%;
            }

            .website {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="welcome">
                <div class="content">
                    <div class="title m-b-md">
                        JustJob
                    </div>
                    <div class="website">
                        Bienvenue dans JustJob!
                        <br>
                        <br>
                        <form method="GET" action="{{ route('home') }}">
                            <button type="submit" class="btn-success">Visiter notre site</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
