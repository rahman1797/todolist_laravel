<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
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
            }

            .links > a {
                color: #636b6f;
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
       
        <form action="/list/add" method="POST">
            {{ csrf_field() }}
            <input type="date" name="tanggal" required="required">

            <input type="text" name="catatan" required="required">

            <input type="hidden" name="status" value="0" required="required">

            <button type="submit">Simpan</button>

        </form>


        <h1>List Kegiatan</h1>

        @foreach($catatan as $c) 
            <p>{{$c->todolist_tanggal}} - {{$c->todolist_catatan}} : {{$c->todolist_status}}</p>

            <a href="/list/edit/{{$c->todolist_ID}}"><button>Edit</button></a>
            <a href="/list/delete/{{$c->todolist_ID}}"><button>Delete</button></a>

        @endforeach

    </body>
</html>
