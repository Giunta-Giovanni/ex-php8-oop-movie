<?php
// • Crea la classe isGenre
class isGenre
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
        $this->isAdventure = $_isAdventure ?? false;
        $this->isComedy = $_isComedy ?? false;
        $this->isDrama = $_isDrama ?? false;
        $this->isFantasy = $_isFantasy ?? false;
        $this->isHorror = $_isHorror ?? false;
        $this->isMystery = $_isMystery ?? false;
        $this->isRomance = $_isRomance ?? false;
        $this->isThriller = $_isThriller ?? false;
        $this->isAnimation = $_isAnimation ?? false;
        $this->isDocumentary = $_isDocumentary ?? false;
    }
};
