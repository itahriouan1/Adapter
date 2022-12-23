<?php

class ChevilleCarreeAdapter extends ChevilleRonde {
    protected $chevilleCarree;

    public function __construct($chevilleCarree)
    {
        $this->chevilleCarree = $chevilleCarree;
    }

    public function getRayon()
    {
        $cote = $this->chevilleCarree->getCote();
        return sqrt(2*pow(($cote/2),2));
    }
}