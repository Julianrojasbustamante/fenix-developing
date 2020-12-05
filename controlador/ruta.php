<?php
class Ruta_Controlador{
    public function raiz_controlador(){
        $respuesta = Ruta_Modelo::raiz_modelo();
        return $respuesta;
    }
}