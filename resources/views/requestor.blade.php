<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requestor</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row" style="margin: top 50px;">
            <div class="col-m-6 offset-md-3">
                <h1>Multi step form</h1><hr>
                @livewire('multi-step-form')
            </div>
        </div>
    </div>
    



    @livewireScripts
</body>
</html>