<?php
class Actors
{
 private $name;
 private $apellido;
 private $peliculas;

 public function __construct($name, $apellido, $peliculas)
 {
   $this->name = $name;
   $this->apellido = $apellido;
  $this->peliculas = $peliculas;
 }

 public function setID($name)
 {
   $this->name = $name;
 }

 public function getID()
 {
   return $this->name;
 }
 public function setID($apellido)
 {
   $this->apellido= $apellido;
 }

 public function getID()
 {
   return $this->apellido;
 }
 
 public function setID($peliculas)
 {
   $this->peliculas = $peliculas;
 }

 public function getID()
 {
   return $this->peliculas;
 }
 ?>
