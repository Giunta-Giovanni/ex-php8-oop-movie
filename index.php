<?php
// •	Crea la classe Genre
class Genre
{
    // •	Aggiungi delle variabili d’istanza 
    public bool $isAction;
    public bool $isAdventure;
    public bool $isComedy;
    public bool $isDrama;
    public bool $isFantasy;
    public bool $isHorror;
    public bool $isMystery;
    public bool $isRomance;
    public bool $isSci_fi;
    public bool $isThriller;
    public bool $isAnimation;
    public bool $isDocumentary;

    public $allMovieGenre = [];


    // ?? i due punti interrogativi stanno ad identificare l'operatore di coalescenza nulla
    // esso restituisce il primo operando che non è null

    // •	Crea il costruttore per inizializzare le proprietà
    // Il parametro passato può essere un booleano (true o false) oppure null, e se non viene passato, il valore predefinito sarà null.
    public function __construct(
        ?bool $_isAction = null,
        ?bool $_isAdventure = null,
        ?bool $_isComedy = null,
        ?bool $_isDrama = null,
        ?bool $_isFantasy = null,
        ?bool $_isHorror = null,
        ?bool $_isMystery = null,
        ?bool $_isRomance = null,
        ?bool $_isThriller = null,
        ?bool $_isAnimation = null,
        ?bool $_isDocumentary = null
    ) {
        $this->isAction = $_isAction ?? false;
        $this->isFantasy = $_isFantasy ?? false;
        $this->isComedy = $_isComedy ?? false;
        $this->isDrama = $_isDrama ?? false;
        $this->isFantasy = $_isFantasy ?? false;
        $this->isHorror = $_isHorror ?? false;
        $this->isMystery = $_isMystery ?? false;
        $this->isRomance = $_isRomance ?? false;
        $this->isThriller = $_isThriller ?? false;
        $this->isAnimation = $_isAnimation ?? false;
        $this->isDocumentary = $_isDocumentary ?? false;

        if ($_isAction) {
            array_push($this->allMovieGenre, "Action");
        }
        if ($_isAdventure) {
            array_push($this->allMovieGenre, "Adventure");
        }
        if ($_isComedy) {
            array_push($this->allMovieGenre, "Comedy");
        }
        if ($_isDrama) {
            array_push($this->allMovieGenre, "Drama");
        }
        if ($_isFantasy) {
            array_push($this->allMovieGenre, "Fantasy");
        }
        if ($_isHorror) {
            array_push($this->allMovieGenre, "Horror");
        }
        if ($_isMystery) {
            array_push($this->allMovieGenre, "Mystery");
        }
        if ($_isRomance) {
            array_push($this->allMovieGenre, "Romance");
        }
        if ($_isThriller) {
            array_push($this->allMovieGenre, "Thriller");
        }
        if ($_isAnimation) {
            array_push($this->allMovieGenre, "Animation");
        }
        if ($_isDocumentary) {
            array_push($this->allMovieGenre, "Documentary");
        }
    }

    // function genre()
    // {

    // }
}


// 	•	Crea la classe Movie
class Movie
{
    // •	Aggiungi almeno tre variabili d’istanza (es. $title,$year, $genre)
    public string $title;
    public int $year;
    public $genre;

    // •	Crea il costruttore per inizializzare le proprietà
    function __construct($_title, $_year, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre->allMovieGenre;
    }

    // •	Crea almeno un metodo (es. getInfo() che restituisce una stringa descrittiva del film)
    public function getInfo()

    {
        $stringGenre = join(", ", $this->genre);
        return "Il film si intitola $this->title, è uscito nel $this->year e appartiene ai generi: $stringGenre";
    }
};

// vengono istanziati almeno due oggetti ‘Movie’
$guardianOfGalaxyGenre = new Genre(1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0);
$guardianOfGalaxy = new Movie("guardiani della galassia", 2018, $guardianOfGalaxyGenre);
$ironManGenre = new Genre(1, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0);
$ironMan = new Movie("Iron Man", 2003, $ironManGenre);
// e stampati a schermo i valori delle relative proprietà
var_dump($guardianOfGalaxy, $ironMan);

echo $guardianOfGalaxy->getInfo();


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex-php8-oop-movie</title>
</head>

<body>

</body>

</html>