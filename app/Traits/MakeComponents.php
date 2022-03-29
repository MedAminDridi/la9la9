<?php

namespace App\Traits;


trait MakeComponents{
    private function keyboardBtn($option){
        $keyboard = [
            'inline_keyboard' =>$option,
        ];
        $keyboard = \json_encode($keyboard);
        return $keyboard;

    }

    
}