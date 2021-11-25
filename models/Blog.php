<?php

namespace Model;

class Blog extends ActiveRecord{
    protected static $tabla = 'blog';
    protected static $columnasDB = ['id', 'titulo', 'creado', 'descripcion', 'imagen', 'descripcionlong'];
    public $id;
    public $titulo;
    public $creado;
    public $descripcion;
    public $imagen;
    public $descripcionlong;

}