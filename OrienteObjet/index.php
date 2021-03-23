<?php
require_once 'src/entities/Roles.php';
require('src/entities/Users.php');
require_once 'src/entities/RolesUser.php';

$r=new Roles();
$r->set_id(1);
$r->set_libelle('caissiere');
echo "id:" . $r->get_id();
echo "<br>";
echo "libelle:" . $r->get_libelle();
echo"<br>";
echo"------------------------------------------------------------------------";
echo "<br>";
$u=new Users(2,"sy","adja","adja@isi","kkk");
 echo "id:" . $u->get_id();
 echo " nom:" . $u->get_nom();
 echo " prenom:" . $u->get_prenom();
 echo " email:" . $u->get_email();
 echo " etat:".$u->get_etat();
 echo"<br>";
echo"------------------------------------------------------------------------";
echo "<br>";
$ur=new RolesUser($r,$u);
echo "id Roles:".$ur->get_idR()->get_id(). "<br>";
echo " id Users:".$ur->get_idU()->get_id();

?>
