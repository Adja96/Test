<?php
class RolesUser {
    public $idR;
    public $idU;
public function __construct($idR,$idU){
    $this->idR=$idR;
    $this->idU=$idU;
}
public function set_idR($idR){
    $this->idR=$idR;
}
public function set_idU($idU){
    $this->idU=$idU;
}
public function get_idR(){
    return $this->idR;
}
public function get_idU(){
    return $this->idU;
}
}
?>