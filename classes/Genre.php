<?php

// • Crea la classe Genre
class Genre
{
    // • Aggiungi delle variabili d’istanza
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

    // • Crea il costruttore per inizializzare le proprietà
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

        // settiamo l'array genere
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
}
