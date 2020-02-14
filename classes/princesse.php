<?php


class princesse extends personnage{


    private function addAction(){
        $this->actionsList[] = "votre personnage se deplace en :".$this->x.' / '.$this->y ;
    }
public function testAction(){
        $this->addAction();
}
}