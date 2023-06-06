<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requestor</title>
    <link rel="stylesheet" href="{{asset('bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('app.css')}}">
    <link rel="stylesheet" href="{{asset('nav.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @livewireStyles
</head>
<body>
<nav>
    <img src="{{asset('images/logo22.png')}}" class=img alt="" srcset="">
    <a href="#" class="nav-item active">Illinois Name Check</a>
    <a href="#" class="nav-item">Code Verifier</a>
    </nav>
    <ul class="stepper">
        <li class="stepper__item complete"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" srcset="" > Intro
        <li class="stepper__item"><img src="{{asset('images/tick.png')}}" class="tick" alt="tickimg" srcset="" >Disclosure</li>
        <li class="stepper__item current"><img src="{{asset('images/3-blue.png')}}" class="tick" alt="tickimg" srcset="" >Requestor</li>
        <li class="stepper__item"><img src="{{asset('images/4-grey.png')}}" class="tick" alt="tickimg" srcset="" >Subject</li>
        <li class="stepper__item"><img src="{{asset('images/5-grey.png')}}" class="tick" alt="tickimg" srcset="" >Review</li>
      </ul>
      
      <div class="box">
        <p><b>Request Information</b></p>
        <p class="textcss">Contact Information for the person requesting the name check. Results will be sent to the email address below.</p><hr>
        <div class="row">
            <div class="column">
            @livewire('multi-step-form')
            </div>
            <div class="column">
              <p><img src="{{asset('images/insyc.svg')}}" alt="" srcset="" class="imgside"></p>
            </div>
          </div>
      </div>
    @livewireScripts
</body>
</html>