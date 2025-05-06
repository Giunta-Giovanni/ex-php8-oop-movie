<?php
// creiamo un traits
trait Describable
{
    // rendiamo la description privata
    protected string $description = "";

    // settiamo la descrizione
    public function setDescription(string $_description)
    {
        $this->description = $_description;
    }

    // rilasciamo la descrizione
    public function getDescription()
    {
        return $this->description;
    }
}
