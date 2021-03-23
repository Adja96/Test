<?php
class Users{
    public $id;
    public $nom;
    public $prenom;
    public $email;
    public $etat;
     
    public function __construct($id,$nom,$prenom,$email,$etat){
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->email=$email;
        $this->etat=$etat;

    }
   public function set_nom($nom){
        $this->nom=$nom;
    }
   public function set_prenom($prenom){
        $this->prenom=$prenom;
    }
   public function set_email($email){
        $this->email=$email;
    }
    public function set_password($password){
        $this->password=$password;
    }
    public function set_etat($etat){
        $this->etat=$etat;
    }
    public function get_nom(){
        return $this->nom;
    }
   public function get_id(){
        return $this->id;
    }
    public function get_prenom(){
        return $this->prenom;
    }
    public function get_email(){
        return $this->email;
    }
    public function get_password(){
        return $this->password;
    }
    public function get_etat(){
        return $this->etat;
    }
}
?>