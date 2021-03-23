<?php
class Produit{
private $ref;
private $nomP;
private $qtStock;
private $id;

public function __construct($id,$ref,$nomP,$qtStock){
    $this->id=$id;
    $this->ref=$ref;
    $this->nomP=$nomP;
    $this->qtStock=$qtStock;

}

public function set_ref($ref){
    $this->ref =$ref;

}
public function set_nomP($nomP){
  $this->nomP=$nomP;
}
public function set_qtStock($qtStock){
  $this->qtStock=$qtStock;
}
public function set_id($id){
    $this->id=$id;
}
public function get_ref(){
    return $this->ref=$ref;
}
public function get_nomP(){
    return $this->nomP=$nomP;
}
public function get_qtSock(){
 return $this->qtStock=$qtStock;
}
public function get_id(){
 return $this->id=$id;
}

}
?>