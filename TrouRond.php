<?php 

class TrouRond {
    protected $rayon;

    public function __construct($rayon)
    {
        $this->rayon = $rayon;
    }
    

    /**
     * Get the value of rayon
     */ 
    public function getRayon()
    {
        return $this->rayon;
    }

    /**
     * Set the value of rayon
     *
     * @return  self
     */ 
    public function setRayon($rayon)
    {
        $this->rayon = $rayon;

        return $this;
    }

    public function Correspond($ChevilleRonde){
        if($this->rayon>= $ChevilleRonde->getRayon()){
            $result = true;
        }
        else{
            $result = false;
        }
        return $result;
    }
}