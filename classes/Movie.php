<?php
require_once __DIR__ . '/../traits/Describable.php';
require_once __DIR__ . '/Genre.php';

// 	•	Crea la classe Movie
class Movie
{
    // usiamo il trait descrizione
    use Describable;

    // Aggiungi almeno tre variabili d’istanza (es. $title,$year, $genre)
    public string $title;
    public int $year;
    public $genres;

    // funzione di costruzione
    function __construct($_title, $_year, Genre ...$_genres)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genres = $_genres;
    }

    // funzione per ricavarsi i generi formato stringa
    public function getGenres()
    {
        // salva i generi nell'array
        $array = [];
        // cicliamo sull'array di generi trovando il singolo genere
        foreach ($this->genres as $genre) {
            // ricaviamo il nome del genere con la funzione creata nella classe genre
            $genreName =  $genre->getName();
            // inserire il nome all'interno dell'array
            array_push($array, $genreName);
        }
        // ritorno l'array trasformato in stringa
        return join(', ', $array);
    }
};











// 	•	Crea la classe Movie
// class Movie
// {
//     // usiamo il trait descrizione
//     use Describable;

//     // •	Aggiungi almeno tre variabili d’istanza (es. $title,$year, $genre)
//     public string $title;
//     public int $year;
    // attributo che mi dice quali generi ha il film
    // public isGenre $isgenre;
    // attributo generi
    // protected $genres = [];

    // •	Crea il costruttore per inizializzare le proprietà
    // function __construct($_title, $_year, Genre $genre)
    // {
    //     $this->title = $_title;
    //     $this->year = $_year;
    //     // $this->genre = $is_genre;
    // }
    // public function getGenres()
    // {
    //     // creiamo un arri vuoto 
    //     $genres = [];

    //     // se il genere è true inseriamolo nell'array

    //     if ($this->isgenre->isAction) {
    //         array_push($genres, "Action");
    //     }
    //     if ($this->isgenre->isAdventure) {
    //         array_push($genres, "Adventure");
    //     }
    //     if ($this->isgenre->isComedy) {
    //         array_push($genres, "Comedy");
    //     }
    //     if ($this->isgenre->isDrama) {
    //         array_push($genres, "Drama");
    //     }
    //     if ($this->isgenre->isFantasy) {
    //         array_push($genres, "Fantasy");
    //     }
    //     if ($this->isgenre->isHorror) {
    //         array_push($genres, "Horror");
    //     }
    //     if ($this->isgenre->isMystery) {
    //         array_push($genres, "Mystery");
    //     }
    //     if ($this->isgenre->isRomance) {
    //         array_push($genres, "Romance");
    //     }
    //     if ($this->isgenre->isThriller) {
    //         array_push($genres, "Thriller");
    //     }
    //     if ($this->isgenre->isAnimation) {
    //         array_push($genres, "Animation");
    //     }
    //     if ($this->isgenre->isDocumentary) {
    //         array_push($genres, "Documentary");
    //     }


    //     return $genres;
    // }

    // //  // settiamo l'array genere


    // •	Crea almeno un metodo (es. getInfo() che restituisce una stringa descrittiva del film)
//     public function getGenre()
//     {
//         // return join(", ", $this->genre);
//     }
// };
