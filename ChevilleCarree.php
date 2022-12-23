<?php

class ChevilleCarree {
    protected $cote;

    public function __construct($cote)
    {
        $this->cote = $cote;
    }
    

    /**
     * Get the value of cote
     */ 
    public function getCote()
    {
        return $this->cote;
    }

    /**
     * Set the value of cote
     *
     * @return  self
     */ 
    public function setCote($cote)
    {
        $this->cote = $cote;

        return $this;
    }
}