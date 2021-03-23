<?php
class ResponsableTechnique extends Personne
{
  private $domaine;
  public function __construct($domaine)
  {
      $this->domaine=$domaine;
  }
  public function get_domaine()
  {
      return $this->domaine;
  }
}

?>