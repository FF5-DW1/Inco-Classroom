<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="{{ asset('css/main.css')}}" type="text/css">
    <script src="https://kit.fontawesome.com/ec241ea00e.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <header>


        <div class='headerContainer'>
            <a href="/"><x-logo /></a>
            <div class='derecha'>
                <a class='link' href="/nosotros">Nosotros</a>
                <a class='link' href="/faq">FAQ</a>
                <x-signinbutton />
                <x-user />
            </div>
        </div>
    </header>



    <div class="mainContainerContent">
        @yield ('content')
    </div>

    




    <footer class='footer'>
            <div>
                <h4>Contactos:</h4>
                    <p>INCO Academy Spain: iaespana@inco-group.co</p>
                    <p>Coursera Apoyo: clientsupport@coursera.org</p>
                    <p>Qwiklabs Apoyo: support@qwiklabs.com</p>
            </div>
            <div>
                <x-logo />
            </div>
            <div class='footerDcha'>  
                    <p>2022 INCO Academy Spain - Todos los derechos reservados.</p>
                    <a href="">Condiciones de uso y declaración de privacidad</a>
            </div>
        
    </footer>










    </footer>


</body>

</html>