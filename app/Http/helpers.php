<?php
function flashMessage($title, $message, $type)
{
    $flashMessageClass = App('App\Http\Utilities\flashMessageClass');
    $flashMessageClass->flashMessageClassFunc($title, $message, $type);
}



