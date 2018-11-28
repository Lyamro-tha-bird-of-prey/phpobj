<?php
class Dog {
    private $dateNaissance = "2000-01-01";
    private $age;
    /**
     * @return string
     */
    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }
    //mes fonctions
    public function setAge($dateNaissance) {
       $this->age = date_diff($dateNaissance, date());
    }
    public function getAge() {
      return date->format("Y");
    }
}
$dog = new Dog();
var_dump(strtotime($dog->getDateNaissance()));
// Comparer la différence entre la date de naissance et la date actuel
// Convertir en Nombre d'années
// date()
var_dump(strtotime($dog->getAge()));
