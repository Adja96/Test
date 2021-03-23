<?php
require_once 'src/entities/Personne.php';
require_once 'src/entities/Comptable.php';
require_once 'src/entities/ResponsableTechnique.php';
require_once 'src/entities/Users.php';

$rt=new ResponsableTechnique('marketing');
$rt->set_nom('sy');
$rt->set_prenom('adja');
 echo $rt->get_domaine()."<br>";
 echo $rt->get_nom()."<br>";
 echo $rt->get_prenom()."<br>";
 echo "-------------------------------------------------------------"."<br>";
 $cm=new Comptable();
 $cm->set_certification('banque');
 $cm->set_nom('sy');
$cm->set_prenom('fatou');
 echo $cm->get_certification()."<br>";
 echo $cm->get_nom()."<br>";
 echo $cm->get_prenom()."<br>";
 echo "-------------------------------------------------------------"."<br>";
 $p=new Personne();
 $p->set_nom('sy');
 $p->set_prenom('kine');
 $u=new Users(1,'isi@','password','etat',$p);

 echo $u->get_personne()->get_nom()."<br>";
 echo $u->get_personne()->get_prenom()."<br>";
 echo $u->get_id()."<br>";
 echo $u->get_email();


?>