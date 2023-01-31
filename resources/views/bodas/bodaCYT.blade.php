<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestra boda | C & T </title>
    <!-- font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--css-->
    <link rel="stylesheet" href="{{asset('assets/css/boda.css')}}">
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
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

</head>
<body>

    <div id="reaccionar" style="background-color: rgba(100, 100, 100, 0.5); width: 100%; height: 100%; z-index: 2; position: absolute; z-index: 20; top: 0; display: grid; ">

        <button id="ilove" class="inLove" style="background-color: transparent; border:none; margin:auto">
            <img class="inLove" src="{{asset('assets/img/MeEncanta.png')}}" alt="">
        </button>
        <script>
            $( "#ilove" ).click(function() {
                $('#audio')[0].play();
                $('#reaccionar').addClass('transitionOutFrameLove');
                $('body').css({'overflow-y':'scroll'});
            });
        </script>
    </div>

    <div class="contenedor" style="z-index: 1; height: 100%;">

        <audio id="audio" >
            <source src="{{asset('assets/img/cecy/Marry You Bruno Mars.mp3')}}" type="audio/mp3">
        </audio>

        <script>
            $(document).scroll(function() {
                $('#audio')[0].play();
            });
        </script>










        <div id="header" class="header logo_img" style="background: linear-gradient(to right, rgba(114, 113, 114, 0.5), rgba(114, 113, 114, 0.5)), url('{{ asset('assets/img/cecy/novios.jpeg') }}') fixed center;">
            <p class="Rouge-text evento">Nuestra boda</p>
            <p class="Rouge-text anfitrion">Cecy y Tony</p>
            {{--  <img src="{{asset('assets/img/valeria.png')}}"> --}}
            <div class="cuenta-div">
                <p class="faltan">Faltan</p>
                <div id="cuenta"></div>
            </div>
        </div>
       <div class="familiares">
            <div class="familiares-borde">
                <h4> Mis papás | Cecy</h4>
                <p>Esther Cantero</p><hr>
                <p>Chavez</p>
            </div>
            <div class="familiares-borde">
                <h4> Mis papás | Tony </h4>
                <p>m</p><hr>
                <p>p</p>
            </div>
            <div class="familiares-borde">
                <h4>Nuestros padrinos </h4>
                <p>p1</p><hr>
                <p>p2</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="carousel center-align">
                    <div class="carousel-item">
                        <h2>2007</h2>
                        <img src="{{asset('assets/img/cecy/n1.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <h2>Huasteca</h2>
                        <img src="{{asset('assets/img/cecy/n2.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <h2></h2>
                        <img src="{{asset('assets/img/cecy/n3.jpg')}}">
                    </div>
                    <div class="carousel-item">
                        <h2>2008</h2>
                        <img src="{{asset('assets/img/cecy/n4.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
        <div class="palabras">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore molestias mollitia soluta similique quos obcaecati ipsum? Assumenda, illum nisi fuga dicta quo doloremque ab, delectus blanditiis eius, ratione rerum! Lorem ipsum dolor sit amet consectetur adipisicing elit. Et dolore molestias mollitia soluta similique quos obcaecati ipsum? Assumenda, illum nisi fuga dicta quo doloremque ab, delectus blanditiis eius, ratione rerum!
            </p>
            <h4>Espero tu compañia </h4>
         </div>
        <div class="ubicaciones">
            <div>
                <h2>Templo</h2>
                <p> 16:00 hrs</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.6559650654995!2d-100.83457028575287!3d20.520324910317814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cbaf74fac2619%3A0x7f08e4c66df04ceb!2sTemplo%20Parroquial%20La%20Virgen%20de%20Los%20Pobres!5e0!3m2!1ses-419!2sus!4v1675124456732!5m2!1ses-419!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div>
                <h2>Salón</h2>
                <p> 18:00 hrs</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14948.192406092492!2d-100.82938519218747!3d20.504254300000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cba6562967cc3%3A0x974d002c9a1e963c!2sCasa%20de%20jasso%20Salon%20De%20Fiesta!5e0!3m2!1ses-419!2sus!4v1675124591922!5m2!1ses-419!2sus" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" ></iframe>
            </div>
        </div>

        <div class="container">
            <div class="cover">
                <h2>Consulta tu mesa</h2>
                <form action="{{route('shearch')}}" class="flex-form">
                    @csrf
                    <label for="from">
                        <i class="ion-location"></i>
                    </label>
                    <input style="text-transform:uppercase;" class="codigo-input" type="text" name="codigo" placeholder="Ingresa tu código">
                    <input type="submit" value="Buscar">
                </form>
            </div>
        </div>
        <div class="hastag">
            <p> Queremos que te la pases increible y poder recordar estos momentos en bellas fotos, usa el hastag</p>
            <h2>#CwT</h2>
            <p> en tus redes sociales y ayudanos a hacer el album más grande</p>
        </div>

    </div>
    <div class="footer">
        <p>Te esperamos (:</p>
    </div>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
    <!--contador-->
    <script src="{{asset('assets/js/simplyCountdown.min.js')}}"> </script>
    <script src="{{asset('assets/js/countdown.js')}}"> </script>
    <!--materialize-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="{{asset('assets/js/main.js')}}"></script>

    <script>
        var vAudio = document.getElementById("divAudio");
        var hasInit = false;
        function playMusic()
        {
           if(!hasInit)
           {
               hasInit = true;
               vAudio.play();
           }
        }
     </script>

</body>

</html>
