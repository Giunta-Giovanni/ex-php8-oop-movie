<?php
include_once '../ex-php8-oop-movie/classes/Genre.php';
include_once '../ex-php8-oop-movie/classes/Movie.php';
include_once '../ex-php8-oop-movie/traits/Describable.php';

// vengono istanziati almeno due oggetti ‘Movie’
// prima istanza
$guardianOfGalaxyGenre = new Genre(1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0);
$guardianOfGalaxy = new Movie("Guardiani Della Galassia", 2018, $guardianOfGalaxyGenre);
$guardianOfGalaxy->setDescription("Un gruppo di improbabili eroi spaziali si unisce per salvare la galassia da una minaccia cosmica. Tra azione travolgente, umorismo tagliente e una colonna sonora nostalgica, Guardians of the Galaxy mescola fantascienza, avventura e cuore in un viaggio epico tra le stelle.");

// echo $guardianOfGalaxy->getDesctiption();


// seconda istanza
$ironManGenre = new Genre(1, 0, 1, 0, 0, 0, 0, 0, 0);
$ironMan = new Movie("Iron Man", 2008, $ironManGenre);
$ironMan->setDescription("
Iron Man è un film d’azione e fantascienza che segna l’inizio dell’universo cinematografico Marvel. Diretto da Jon Favreau e interpretato da Robert Downey Jr., il film racconta la trasformazione del geniale, miliardario e carismatico industriale Tony Stark. Dopo essere sopravvissuto a un rapimento in Afghanistan grazie a un’armatura costruita da lui stesso, Stark decide di abbandonare la produzione di armi e perfezionare la sua invenzione: un’armatura tecnologica avanzata. Nasce così Iron Man, un eroe che combatte contro le ingiustizie con intelligenza, ironia e tecnologia. Con un mix esplosivo di azione, effetti speciali e humor, Iron Man ha ridefinito il concetto di supereroe al cinema.");
