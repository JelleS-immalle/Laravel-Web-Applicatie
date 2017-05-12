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
                <form action=studentLessen>
                    <input type="text" name="naamLeerling"/>
                    <input type="submit" value="Welke lessen volg ik?"/>
                </form>
            </div>
            <h1>Of kies een weekdag waarvan je de uurrooster wilt weten</h1>
            <div class="center">
                <a href="/maandag">Maandag</a>
                <a href="/dinsdag">Dinsdag</a>
                <a href="/woensdag">Woensdag</a>
                <a href="/donderdag">Donderdag</a>
                <a href="/vrijdag">Vrijdag</a>
            </div>
            <div id="table">
                @yield('content')
                @yield('studentContent')
            </div>
        </div>
    </body>
</html>