<!doctype html>
<html lang="{{ app()->getLocale() }}" style="background-color: ivory;">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
    <title>{{ config('app.name', 'MINISITE') }}</title>
    
</head>

<body style="background-color: ivory;">
    <div class="container" style="background-color:ivory;">      
        <div class="card text-white bg-danger mb-3" style="max-width:200px; margin: 50px auto;">
            <div class="card-header">
                Error
            </div>
            <div class="card-body">
                <h4 class="card-title">404</h4>
                <p class="card-text">Page Not Found!!!</p>
            </div>
        </div>
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>
</body>
</html>
