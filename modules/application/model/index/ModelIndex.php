<?php
/**
 * Created by PhpStorm.
 * User: alejandro.gomez
 * Date: 07/09/2017
 * Time: 05:18 PM
 */

namespace modules\application\model;


class ModelIndex
{

    public function MsgSaludo($Mensaje = null){

        if($Mensaje == null){
            return "Hola Mundo";
        }elsE{
            return $Mensaje;
        }

    }

}