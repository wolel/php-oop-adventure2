<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 15:48
 */

class dragon extends personnage {

    private function addAction()
    {
        $this->actionsList[] = "Le dragon se déplace en ".$this->x."/".$this->y;
    }

    public function testAction()
    {
        $this->addAction();
    }

} 