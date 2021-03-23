<?php
class User{
private $id;    
private $nom;
private $prenom;
private $email;
private $password;
private $etat;

public function __construct($id,$nom,$prenom,$email,$password,$etat){
    $this->id=$id;
    $this->nom=$nom;
    $this->prenom=$prenom;
    $this->email=$email;
    $this->password=$password;
    $this->etat=$etat;
}
public function get_id(){
    return $this->id;
}
public function get_nom(){
    return $this->nom;
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