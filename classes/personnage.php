<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 10:42
 */

class personnage {

    protected $x=0;
    protected $y=0;
    protected $actionsList = [];
    protected $nom;

    // Propriété nom et on va définir un setter et un getter

    public function __construct()
    {

    }

    public function moveTop()
    {
        if($this->checkMoveY()) {
            $this->y = $this->y - 1;
            $this->addAction();
        }
    }

    public function moveLeft()
    {
        if($this->checkMoveX()) {
            $this->x = $this->x - 1;
            $this->addAction();
        }
    }

    public function moveRight()
    {
        $this->x = $this->x + 1;
        $this->addAction();
    }

    public function moveBottom()
    {
        $this->y = $this->y + 1;
        $this->addAction();
    }

    public function getPosition()
    {
        return [
            "x"=>$this->x,
            "y"=>$this->y
        ];
    }

    public function getActions()
    {
        return $this->actionsList;
    }

    private function addAction()
    {
        $this->actionsList[] = "Votre personnage se déplace en ".$this->x."/".$this->y;
    }

    private function checkMoveX()
    {
        return ($this->x>0);
    }

    private function checkMoveY()
    {
        return ($this->y>0);
    }

} 