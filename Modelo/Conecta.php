<?php

class Conecta {

    private $cn = null;

    function abre() {
        if ($this->cn == null) {
            $this->cn = mysqli_connect("localhost", "root", "", "bdproyecto");
        }
        return $this->cn;
    }

}
