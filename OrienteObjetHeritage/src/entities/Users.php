<?php
class Users{
    private $id;
    private $email;
    private $password;
    private $etat;
    private $personne;

    public function __construct($id,$email,$password,$etat,$personne)
    {
        $this->id=$id;
        $this->email=$email;
        $this->passworrd=$password;
        $this->etat=$etat;
        $this->personne=$personne;
    }
    public function set_id($id)
    {
        $this->id=$id;
    }
    public function get_id()
    {
        return $this->id;
    }
    public function set_email($email)
    {
        $this->email=$email;
    }
    public function get_email()
    {
        return $this->email;
    }
    public function set_password($password)
    {
        $this->passworrd=$password;
    }
    public function get_password()
    {
        return $this->password;
    }
    public function set_etat($etat)
    {
        $this->etat=$etat;
    }
    public function get_etat()
    {
        return $this->etat;
    }
    public function set_personne($personne)
    {
        $this->personne=$personne;
    }
    public function get_personne()
    {
        return $this->personne;
    }

}

?>