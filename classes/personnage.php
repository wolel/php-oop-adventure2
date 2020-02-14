<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 10:42
 */

class personnage {

    use personnageUtils;

    protected $x=0;
    protected $y=0;
    protected $actionsList = [];
    protected $nom;
    protected $life;
    //le nom d'instance de la classe personnage. Conter le nom d'instance qu'on lance:
    protected static $numInstances = 0;
    //===============================================//   CONSTANTES définies
    //déclarer pr modifier juste 1 seule fois le type du 'dragon'
    const TYPE = "Dragon Bleu";

    //definr un constante position x=, y=....
    //elle n'est pas lié à l'instance mais à la classe en elle-même
    const MIN_POSITION = 0;
    const MAX_POSITION = 10;


    public function __construct()
    {
        $this->setNom("Votre personnage");
        $this->setLife(100);
        self::$numInstances++;

    }
    //===============================================// NUM INSTANCE
    public static function getNumInstance(){
        return self::$numInstances;
    }

    //===============================================//   LIFE
    public function setLife($life){
        $this->life = $life;
    }
    public function getLife(){
        return $this->life;
    }

 //===============================================//   NOM
    public function setNom($nom){
            $this->nom = $nom;
    }
    public function getNom(){
            return $this->nom;
    }
    protected function setX($value){
        if ($value >= self::MIN_POSITION and $value <= self::MAX_POSITION){
            $this->x = $value;

        }
    }
    protected function setY($value){
        if ($value >= self::MIN_POSITION and $value <= self::MAX_POSITION){
            $this->y = $value;
        }
    }
//===============================================// MOVES

    public function moveTop()
    {
        if($this->checkMoveY()) {
            $this->setY($this->y - 1);
            $this->addAction();
        }
    }
//-------------------
    public function moveLeft()
    {
        if($this->checkMoveX()) {
            $this->setX($this->x - 1);
            $this->addAction();
        }
    }
//-------------------
    public function moveRight()
    {
        if($this->checkMoveX()){
            $this->x = $this->x + 1;
            $this->addAction();
        }

    }
//-------------------
    public function moveBottom()
    {
        if($this->checkMoveY()){
            $this->setY($this->y + 1);
            $this->addAction();
        }

    }

//===============================================// POSITIONS
    public function getPosition()
    {
        return [
            "x"=>$this->x,
            "y"=>$this->y
        ];
    }
//===============================================// ACTIONS
    protected function addAction()
    {
        $this->actionsList[] = $this->nom.' '.'se déplace en : '.' '.$this->x."/".$this->y;
    }

    public function getActions()
    {
        return $this->actionsList;
    }

    //===============================================// check MOVES
    private function checkMoveX()
    {
        return ($this-> x >= self::MIN_POSITION and $this-> x <= self::MAX_POSITION);
        //if (($this->x>self::MIN_POSITION) && ($this->x<=self::MAX_POSITION) === true){
            //return ($this->x>self::MIN_POSITION)+ ($this->x<self::MAX_POSITION);

    }

    private function checkMoveY()
    {
        return (($this-> y >= self::MIN_POSITION)&&($this-> y <= self::MAX_POSITION));
    }

} 