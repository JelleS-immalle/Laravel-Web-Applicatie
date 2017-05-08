# Laravel-Web-Applicatie
In deze repository vindt u mijn web-applicatie, gemaakt met Laravel.

### Deze web applicatie heb ik hiervoor ook zonder framework gemaakt, met weliswaar de foute database structuur.

[De repository van de web app zonder framework](https://github.com/JelleS-immalle/Web-Applicatie)

## 30-04-2017

+ Controller toegevoegd met functies per weekdag. Op deze manier zal er voor elke weekdag een view zijn.

+ Voor elke weekdag een view toegevoegd

+ Master layout bestand toegevoegd waarin de uurroosters per weekdag als content worden ingevuld

## 03-05-2017

+ Javascript functie toegevoegd die de inhoud van het inputvak opslaat als cookie... Deze cookie kan dan later uitgelezen worden door Laravel te gebruiken.

+ Geprobeerd een functie toe te voegen die gaat checken tot welke klas de ingegeven naam behoort... Niet gelukt.

## 05-05-2017

+ Nieuwe models, controllers en migrations toegevoegd en onderling verbindingen gelegd:

	+ Tussen teachers en subjects (= one to many)

	+ Tussen students en subjects (= many to many)

## 06-05-2017

+ Mogelijke oplossing toegevoegd voor het afprinten van uurroosters

## 07-05-2017

+ Eén view gemaakt die een forloop uitvoert die alle vakken afprint afhankelijk van het array dat wordt meegegeven met de id's in van de vakken

+ Functie toegevoegd aan WeekdagenController die de code een stuk korter zou kunnen maken, maar heb de functie nog niet kunnen laten werken

## 08-05-2017

+ Seeders toegevoegd die tabellen invullen [Probleem gevonden met het invullen van 'subeject' met id=0]

## Wordt in de toekomst toegevoegd...

+ ER-diagram aanpassen zodat er gebruik kan gemaakt worden van foreign-keys [04-05-2017]

+ Migration toevoegen aan de hand van het correcte ER-diagram [05-05-2017]

+ Invulvak laten werken wanneer een naam wordt ingegeven

+ Terug werken met cookies die naam en klas bijhouden
