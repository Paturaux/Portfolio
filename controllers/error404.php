<?php

class Error404 extends Controller {

    public function __construct() {
        parent::callView('Erreur 404');
    }

}