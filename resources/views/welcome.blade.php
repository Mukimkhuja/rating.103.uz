<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rating system</title>

            <!--<link rel="shortcut icon" href="/public/css/images/ambulance.ico">-->


        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: #fafafa;*/
                background-image: url("/public/css/images/backgroung.png");
                color: #596064;
                font-family: 'Times New Roman', sans-serif;
                font-weight: 200;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #434b4f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class="alert-info text-danger" >
        <marquee>Тизим тест режимида ишламоқда!!!</marquee></div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">My Account</a>
                    @else
                        <a href="{{ route('login') }}">Тизимга кириш</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Рўйхатдан ўтиш</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <i>Rating ambulance (103) system</i>
                </div>

                <div class="links">
                    <a href="{{route('show_page')}}">Маълумотларни кўриш</a>

                    <a href="https://kun.uz/covid19" target="_blank">Covid-19</a>
                    <a href="https://kun.uz" target="_blank">Янгиликлар</a>
                    <a href="https://www.emerge-centre.uz/" target="_blank">РШТЁИМ расмий сайти</a>
                    <a href="https://minzdrav.uz" target="_blank">Ўз ССВ расмий сайти</a>
                </div>
            </div>
        </div>
    </body>
</html>
