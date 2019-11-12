<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Website</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-image: linear-gradient(0deg, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.85) 100%), url('{{asset('welcome.jpg')}}');
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
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
                color: #fff;
            }


            .m-b-md {
                margin-bottom: 30px;
            }


            .button1{
                border-width: 0;
                cursor: pointer;
                font-size: 14px;
                font-weight: 700;
                letter-spacing: 2px;
                line-height: 1.625;
                padding: 19px 30px 16px;
                text-align: center;
                text-decoration: none!important;
                text-transform: uppercase;
                white-space: normal;
                width: auto;
                display: inline-block;
                transition: all 0.1s ease-in-out;
                background-color: #fff;
                color: #333;
            }
            .button2{
                background-color: #a86500;
                border-width: 0;
                color: #fff;
                cursor: pointer;
                font-size: 14px;
                font-weight: 700;
                letter-spacing: 2px;
                line-height: 1.625;
                padding: 19px 30px 16px;
                text-align: center;
                text-decoration: none!important;
                text-transform: uppercase;
                white-space: normal;
                width: auto;
                display: inline-block;
                transition: all 0.1s ease-in-out;
            }

            .button1:hover{
                background-color: #333;
                border-width: 0;
                color: #fff;
            }
            .button2:hover{
                background-color: #333;
                border-width: 0;
                color: #fff;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                    Welcome To Our Website
                </div>

                <div class="links">
                    <a href="{{ route('register') }}" class="button1">Register</a>
                    <a href="{{ route('login') }}" class="button2">Login</a>
                </div>
            </div>
        </div>
    </body>
</html>
