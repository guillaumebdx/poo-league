<?php


class Arena
{
    /**
     * @var Character
     */
    private $character1;

    /**
     * @var Character
     */
    private $character2;

    public function __construct($character1, $character2)
    {
        $this->character1 = $character1;
        $this->character2 = $character2;
    }

    public function fight()
    {
        while ($this->character1->isAlive() && $this->character2->isAlive()) {
            $this->character2->setLife($this->character2->getLife() - $this->character1->getAttack());
            $this->character1->setLife($this->character1->getLife() - $this->character2->getAttack());
        }
    }
    /**
     * @return Character
     */
    public function getCharacter1()
    {
        return $this->character1;
    }

    /**
     * @param Character $character1
     */
    public function setCharacter1(Character $character1) : void
    {
        $this->character1 = $character1;
    }

    /**
     * @return Character
     */
    public function getCharacter2()
    {
        return $this->character2;
    }

    /**
     * @param Character $character2
     */
    public function setCharacter2($character2)
    {
        $this->character2 = $character2;
    }


}
