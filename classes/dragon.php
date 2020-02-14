<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 11/02/2020
 * Time: 15:48
 */

class dragon extends personnage {



    /**
     * la constance 'const'n'est pas lié à l'instance mais à la classe en elle-même
     */
    const TYPE = "Dragon bleu (constance dans la classe DRAGON)<br>";

    public function __construct()
    {
        parent::__construct();  // les "::" fait référence au classe
        echo parent::TYPE; // si 'parent' au lieu de 'self', la const TYPE doit être défini dans la classe parent (personnage)
        $this->setNom(" Le dragon ");
        $this->setLife(500);

    }


    public function testAction()
    {

        $this->addAction();
    }

} 