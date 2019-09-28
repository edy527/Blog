<?php
class Usuario
{
  private $id;
  private $nombre;
  private $email;
  private $password;
  private $fecha_registro;
  private $activo;

  public function __construct($id, $nombre, $email, $password, $fecha_registro, $activo)
  {
    $this -> id = $id;
    $this -> nombre = $nombre;
    $this -> email = $email;
    $this -> password = $password;
    $this -> fecha_registro = $fecha_registro;
    $this -> activo = $activo;
   }

   public function obtenerId(){
     return  $this ->id;
   }
}
