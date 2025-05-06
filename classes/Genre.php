<?php
class Genre
{
    //nome del genere
    protected $name;
    protected $description;

    function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }

    // funzione per ricavarmi solo i generi
    public function getName()
    {
        return $this->name;
    }
}
