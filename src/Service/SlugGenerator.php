<?php
namespace App\Service;

class SlugGenerator {

    public function generarSlug($texto) {
        // reemplaza los espacios por "-"
        $t = str_replace(' ', '-', $texto);
        $t = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_\-] remove; Lower()', $t);
        return $t;
    }

} 
