<?php
require_once 'Animal.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Mamifero
 *
 * @author AAAA
 */
class Mamifero extends Animal {
    //put your code here
    protected $corPelo;
    
    
    public function emitirSom() {
        echo "<p>Som de Mamifero</p>";
    }

}
