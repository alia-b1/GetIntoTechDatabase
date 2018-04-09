<?php

spl_autoload_register(function ($classname){
    include "C:\xampp\htdocs\LibraryApp".str_replace("\\", "/", "$classname").".php";
});
