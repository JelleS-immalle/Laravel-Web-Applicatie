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

        <?php
            /* Hier wordt gecontroleerd of de ingegeven naam in
            de tabel met leerlingen staat en in welke klas de leerling zit */
            
            $klasLeerling;

            if (isset($_POST['naamLeerling'])) {
                controleerNaamLeerling();
                header('Refresh:0');
            }

            function controleerNaamLeerling() {
                $naamLeerling = $_POST['naamLeerling'];
                setcookie("leerlingCookie", $naamLeerling);

                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $queryCheck = "SELECT KlasNaam, LeerlingNaam FROM Leerling WHERE LeerlingNaam LIKE '%{$naamLeerling}%'";
                $resultCheck = mysqli_query($link, $queryCheck);
                $rowCheck = mysqli_fetch_row($resultCheck);

                if(strpos($rowCheck[0], '6ITN') !==false) {
                    $GLOBALS['klasLeerling'] = "6ITN";
                    setcookie("klasCookie", $GLOBALS['klasLeerling']);
                } else if(strpos($rowCheck[0], '5ITN') !==false) {
                    $GLOBALS['klasLeerling'] = $GLOBALS['klasLeerling'];
                    setcookie("klasCookie", '5ITN');
                } else {
                    echo '<script language="javascript">';
                    echo 'alert("Gelieve een geldige naam in te geven.")';
                    echo '</script>';
                    /* Hieronder wordt de cookie met de klas naam
                    leeg gemaakt zodat het uurrooster niet wordt afgeprint */
                    setcookie("klasCookie", '');
                }
            }

            /* Hier worden de uurroosters afgeprint */

            if (isset($_GET['maandag'])) {
                if($_COOKIE['klasCookie'] == "6ITN") {
                    geefUurroosterMaandag6ITN();
                } else if($_COOKIE['klasCookie'] == "5ITN") {
                    geefUurroosterMaandag5ITN();
                } else {
                    echo '<h1>Geef een naam in zodat de web app weet in welke klas je zit</h1>';
                }
            }
            if (isset($_GET['dinsdag'])) {
                if($_COOKIE['klasCookie'] == "6ITN") {
                    geefUurroosterDinsdag6ITN();
                } else if($_COOKIE['klasCookie'] == "5ITN") {
                    geefUurroosterDinsdag5ITN();
                } else {
                    echo '<h1>Geef een naam in zodat de web app weet in welke klas je zit</h1>';
                }
            }
            if (isset($_GET['woensdag'])) {
                if($_COOKIE['klasCookie'] == "6ITN") {
                    geefUurroosterWoensdag6ITN();
                } else if($_COOKIE['klasCookie'] == "5ITN") {
                    geefUurroosterWoensdag5ITN();
                } else {
                    echo '<h1>Geef een naam in zodat de web app weet in welke klas je zit</h1>';
                }
            }
            if (isset($_GET['donderdag'])) {
                if($_COOKIE['klasCookie'] == "6ITN") {
                    geefUurroosterDonderdag6ITN();
                } else if($_COOKIE['klasCookie'] == "5ITN") {
                    geefUurroosterDonderdag5ITN();
                } else {
                    echo '<h1>Geef een naam in zodat de web app weet in welke klas je zit</h1>';
                }
            }
            if (isset($_GET['vrijdag'])) {
                if($_COOKIE['klasCookie'] == "6ITN") {
                    geefUurroosterVrijdag6ITN();
                } else if($_COOKIE['klasCookie'] == "5ITN") {
                    geefUurroosterVrijdag5ITN();
                } else {
                    echo '<h1>Geef een naam in zodat de web app weet in welke klas je zit</h1>';
                }
            }

            function geefUurroosterMaandag6ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo '<h1>Deze leerling zit in 6ITN</h1>';
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 1);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 2);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 3);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 4);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 5);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterMaandag5ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo "<h1>Deze leerling zit in 5ITN</h1>";
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterDinsdag6ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo '<h1>Deze leerling zit in 6ITN</h1>';
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 6);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 6);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 7);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 5);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 8);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 9);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 10);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 10);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 15.25-16.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterDinsdag5ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo "<h1>Deze leerling zit in 5ITN</h1>";
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterWoensdag6ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo '<h1>Deze leerling zit in 6ITN</h1>';
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 8);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 4);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 8);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 12);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterWoensdag5ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo "<h1>Deze leerling zit in 5ITN</h1>";
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterDonderdag6ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo '<h1>Deze leerling zit in 6ITN</h1>';
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 5);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 4);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 7);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 13);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 14);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 14);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 15.25-16.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterDonderdag5ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo "<h1>Deze leerling zit in 5ITN</h1>";
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterVrijdag6ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo '<h1>Deze leerling zit in 6ITN</h1>';
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 6);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 6);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 7);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 4);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 13);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 8);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 9);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
            function geefUurroosterVrijdag5ITN() {
                $link = mysqli_connect("localhost", "uurrooster", "uurrooster123", "Uurrooster-Web-App");

                $query = "SELECT VakID, Leerkracht, VakNaam FROM Vakken";

                if ($result = mysqli_query($link, $query)) {
                    echo "<h1>Ingegeven naam is: ".$_COOKIE['leerlingCookie'];
                    echo "<h1>Deze leerling zit in 5ITN</h1>";
                    echo "<table class='pure-table'>";
                    echo "<tr><th>Uur</th><th>Vak</th><th>Leerkracht</th></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 8.25u-9.15u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 9.15u-10.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";
                    
                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 10.15u-11.05u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 11.05u-11.55u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 12.45u-13.35u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr><td> 13.35-14.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    mysqli_data_seek($result, 0);
                    $row = mysqli_fetch_row($result);
                    echo "<tr class='pure-table-odd'><td> 14.35-15.25u </td><td>";
                    print_r($row[2]);
                    echo "</td><td>";
                    print_r($row[1]);
                    echo "</td></tr>";

                    /* free result set*/
                    mysqli_free_result($result);
                }

                $link->close();
            }
        ?>
    </body>
</html>