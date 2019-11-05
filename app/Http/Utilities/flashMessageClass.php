<?php
/**
 * Created by PhpStorm.
 * User: Arash Rostami
 * Date: 11/4/2019
 * Time: 4:50 PM
 */

namespace App\Http\Utilities;


class flashMessageClass
{

    public function flashMessageClassFunc($title, $message, $type)
    {
        session()->flash('alertJS',[
            'title' => $title,
            'message' => $message,
            'type' => $type,
        ]);

    }
}