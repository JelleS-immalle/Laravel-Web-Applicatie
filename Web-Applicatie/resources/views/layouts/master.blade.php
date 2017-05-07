<!DOCTYPE html>
<html>
    <head>
        <title>Web Applicatie J. Swaelen</title>
        <link rel="icon" type="image/png" href="img/favicon.ico" />
        <link href="https://fonts.googleapis.com/css?family=Bangers|Oxygen" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/pure/0.6.0/pure-min.css">
        <link rel="stylesheet" href="/css/default.css">
        <script src="/js/script.js"></script>
    </head>
    <body>
        <div>
            <h1>Geef hieronder je naam in</h1>
                <div class="InputDiv">
                    <input type="text" id="NaamLeerling" />
                    <input type="button" name="submit" value="Verifieer via naam!" onclick="SaveName()"/>
                    <br>
                </div>
            <div class="center">
                <a href="/maandag">Maandag</a>
                <a href="/dinsdag">Dinsdag</a>
                <a href="/woensdag">Woensdag</a>
                <a href="/donderdag">Donderdag</a>
                <a href="/vrijdag">Vrijdag</a>
            </div>
            <div id="table">
                @yield('content')
            </div>
        </div>
    </body>
</html>