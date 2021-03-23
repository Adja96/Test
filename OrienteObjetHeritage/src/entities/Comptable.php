<?php
class Comptable extends Personne
{
    private $certification;
    public function set_certification($certification)
    {
        $this->certification=$certification;
    }
    public function get_certification()
    {
        return $this->certification;
    }
} 
?>