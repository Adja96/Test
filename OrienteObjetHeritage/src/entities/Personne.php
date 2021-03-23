<?php
class Personne
{
    private $nom;
    private $prenom;

    public function set_prenom($prenom)
    {
         $this->prenom=$prenom;
    }
    public function set_nom($nom)
    {
        $this->nom=$nom;
    }
    public function get_nom()
    {
        return $this->nom;
    }
    public function get_prenom()
    {
        return $this->prenom;
    }
}

?>