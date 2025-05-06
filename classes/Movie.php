<?php
require_once __DIR__ . '/../traits/Describable.php';
require_once __DIR__ . '/Genre.php';

// 	•	Crea la classe Movie
class Movie
{
    // usiamo il trait descrizione
    use Describable;

    // •	Aggiungi almeno tre variabili d’istanza (es. $title,$year, $genre)
    public string $title;
    public int $year;
    protected $genre;

    // •	Crea il costruttore per inizializzare le proprietà
    function __construct($_title, $_year, Genre $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre->allMovieGenre;
    }

    // •	Crea almeno un metodo (es. getInfo() che restituisce una stringa descrittiva del film)
    public function getGenre()
    {
        return join(", ", $this->genre);
    }
};
