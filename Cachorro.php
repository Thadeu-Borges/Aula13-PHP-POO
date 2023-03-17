<?php
require_once 'Lobo.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Cachorro
 *
 * @author AAAA
 */
class Cachorro extends Lobo {
    //put your code here
    function emitirSom() {
        echo "<p>Au! Au! Au! </p>";
    }
    
    function reagirFrase($frase) {
        if ($frase == "Toma Comida" || $frase == "olá") {
            echo "<p>Abanar e Latir</p>";
        } else {
            "<p>Rosnar</p>";
        }
    }
    
    function reagirHora($hora, $min) {
        if ($hora < 12) {
            echo "<p>Abanar</p>";
        } elseif ($hora >= 18) {
            echo "<p>Ignorar</p>";
        } else {
            echo "<p>Abanar e Latir</p>";
        }
    }
    
    function reagirDono($dono) {
        if ($dono) {
            echo "<p>Abanar</p>";
        } else {
            echo "<p>Rosnar e Latir</p>";
        }
    }
    
    function reagirIdadePeso($idade, $peso) {
        if ($idade < 5) {
            if ($peso < 10) {
                echo "<p>Abanar</p>";
            } else {
                echo "<p>Latir</p>";
            }
        } else {
            if ($peso < 10) {
                echo "<p>Rosnar</p>";
            } else {
                echo "<p>Ignorar</p>";
            }
        }
    }
}
