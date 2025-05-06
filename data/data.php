<?php
include_once '../ex-php8-oop-movie/classes/Genre.php';
include_once '../ex-php8-oop-movie/classes/Movie.php';
include_once '../ex-php8-oop-movie/traits/Describable.php';



// istanze della classe Genre
$Action = new Genre('Action', 'Film ricchi di scene dinamiche, combattimenti e inseguimenti.');
$Adventure = new Genre('Adventure', 'Storie avvincenti ambientate in luoghi esotici o pericolosi.');
$Animation = new Genre('Animation', 'Film realizzati con tecniche di animazione digitale o tradizionale.');
$Biography = new Genre('Biography', 'Racconti basati sulla vita di personaggi reali.');
$Comedy = new Genre('Comedy', 'Film con situazioni umoristiche pensati per far ridere.');
$Crime = new Genre('Crime', 'Trame basate su crimini, indagini e ambienti criminali.');
$Documentary = new Genre('Documentary', 'Film informativi o educativi su fatti reali.');
$Drama = new Genre('Drama', 'Storie emozionali e profonde con personaggi complessi.');
$Family = new Genre('Family', 'Film adatti a tutte le età, con contenuti per famiglie.');
$Fantasy = new Genre('Fantasy', 'Avventure ambientate in mondi immaginari con elementi magici.');
$History = new Genre('History', 'Film ispirati a eventi storici realmente accaduti.');
$Horror = new Genre('Horror', 'Film pensati per spaventare e creare tensione.');
$Music = new Genre('Music', 'Film incentrati su artisti, band o esperienze musicali.');
$Mystery = new Genre('Mystery', 'Trame piene di enigmi, indagini e colpi di scena.');
$Romance = new Genre('Romance', 'Storie d’amore e relazioni sentimentali.');
$SciFi = new Genre('Sci-Fi', 'Film di fantascienza con tecnologia, spazio e futuri alternativi.');
$Sport = new Genre('Sport', 'Film che raccontano storie legate al mondo dello sport.');
$Thriller = new Genre('Thriller', 'Film pieni di suspense, tensione e colpi di scena.');
$War = new Genre('War', 'Film ambientati durante conflitti armati, spesso realistici.');
$Western = new Genre('Western', 'Film ambientati nel Far West con cowboy e sparatorie.');



// istanze della classe Movie
// 1
$guardianOfGalaxy = new Movie("Guardiani Della Galassia", 2018, $Action, $Adventure, $Horror);
$guardianOfGalaxy->setDescription("Un gruppo di eroi spaziali si unisce per salvare la galassia da una minaccia cosmica.");

// 2
$ironMan = new Movie("Iron Man", 2008, $Action);
$ironMan->setDescription("Tony Stark diventa Iron Man, un eroe tecnologico contro le ingiustizie.");

// 3
$inception = new Movie("Inception", 2010, $Action, $SciFi, $Thriller);
$inception->setDescription("Un ladro esperto si infiltra nei sogni per impiantare idee nella mente delle persone.");

// 4
$titanic = new Movie("Titanic", 1997, $Drama, $Romance, $History);
$titanic->setDescription("Una storia d’amore tragica a bordo del celebre transatlantico affondato.");

// 5
$shrek = new Movie("Shrek", 2001, $Animation, $Comedy, $Fantasy);
$shrek->setDescription("Un orco scorbutico parte per un'avventura per salvare una principessa.");

// 6
$darkKnight = new Movie("The Dark Knight", 2008, $Action, $Crime, $Drama);
$darkKnight->setDescription("Batman affronta il Joker in una lotta morale per il futuro di Gotham.");

// 7
$gladiator = new Movie("Il Gladiatore", 2000, $Action, $Drama, $History);
$gladiator->setDescription("Un generale romano cerca vendetta contro l’imperatore che ha ucciso la sua famiglia.");

// 8
$laLaLand = new Movie("La La Land", 2016, $Romance, $Music, $Drama);
$laLaLand->setDescription("Un musicista e un’attrice si innamorano mentre inseguono i loro sogni a Los Angeles.");

// 9
$interstellar = new Movie("Interstellar", 2014, $SciFi, $Drama, $Adventure);
$interstellar->setDescription("Un team di astronauti viaggia attraverso un wormhole alla ricerca di una nuova casa per l’umanità.");

// 10
$parasite = new Movie("Parasite", 2019, $Drama, $Thriller, $Comedy);
$parasite->setDescription("Una famiglia povera si infiltra nella vita di una famiglia ricca con conseguenze imprevedibili.");


// crea un array contenenti le istanze
$movies = [$guardianOfGalaxy, $ironMan, $inception, $titanic, $shrek, $darkKnight, $gladiator, $laLaLand, $interstellar, $parasite];
