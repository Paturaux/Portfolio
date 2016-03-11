<?php

class Home extends Controller {

    public function __construct() {
        parent::callView('home', 'Accueil');
    }

    public function generer_lipsum() {
        return file_get_contents('http://loripsum.net/api/1');
    }
}
