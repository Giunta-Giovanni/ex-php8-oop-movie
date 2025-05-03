<?php



// 	•	Crea la classe Movie
class Movie
{
    // •	Aggiungi almeno tre variabili d’istanza (es. $title,$year, $genre)
    public string $title;
    public int $year;
    public string $genre;

    // •	Crea il costruttore per inizializzare le proprietà
    function __construct($_title, $_year, $_genre)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->genre = $_genre;
    }

    // •	Crea almeno un metodo (es. getInfo() che restituisce una stringa descrittiva del film)
    public function getInfo()
    {
        return "Il film si intitola $this->title, è uscito nel $this->year e appartiene ai generi: $this->genre.";
    }
};

// vengono istanziati almeno due oggetti ‘Movie’ 
$guardianOfGalaxy = new Movie("guardiani della galassia", 2018, "fantasy");
$ironMan = new Movie("Iron Man", 2003, "Action");
// e stampati a schermo i valori delle relative proprietà
var_dump($guardianOfGalaxy, $ironMan);


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