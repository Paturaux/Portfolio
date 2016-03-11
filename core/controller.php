<?php

abstract class Controller {

    protected function callModel($name) {
        require_once('models/' . $name . '.php');
        return new $name();
    }

    protected function callView($view, $title, $variables = array(), $import = array()) {
        // $this->track();
        foreach ($variables as $var) {
            ${key($variables)} = $var;
            next($variables);
        }
        include_once('views/head.php');
        include_once('views/' . $view . '.php');
    }

    protected function track() {
        $tracking = $this->callModel('tracking');
        if (!isset($_COOKIE['TAG'])) {
            $tag = $tracking->insertTag();
            $time = time() + 3600 * 2;
            setcookie('TAG', $tag, $time);
            $tracking->insertTrack($tag);
        } else {
            $tracking->insertTrack($_COOKIE['TAG']);
        }
    }

}
