<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis XV años | Valeria </title>
    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--css-->
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}"> 
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rouge+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="{{asset('assets/img/rose.ico')}}">
    <!--materialize-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>
<body>
    <div class="headerdos">
                <p class="Rouge-text mis-xvdos">Mis XV años</p>
                <img src="{{asset('assets/img/valeria.png')}}">
    </div>
    <div class="mesas-div">
        <div class="content-mesas">
            <div>
                <H4>Personas  {{$consultar->personas}}</H4>
            </div>
            <div>
                <H4>Mesa {{$consultar->mesa}}</H4>
            </div>            
        </div>
        <div class="content-mesas">
            <div>
                <img src="{{asset('assets/img/mesas.JPEG')}}" style="width: 100%;">
            </div>
        </div>
    </div>


    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--contador-->
    <script src="{{asset('assets/js/simplyCountdown.min.js')}}"> </script>
    <script src="{{asset('assets/js/countdown.js')}}"> </script>
    <!--materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>
