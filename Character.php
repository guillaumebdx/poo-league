<?php


class Character
{
    private $name;

    private $life;

    private $attack;


    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return ucfirst($this->name);
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLife()
    {
        return $this->life;
    }

    /**
     * @param mixed $life
     */
    public function setLife($life)
    {
        if ($life > 100) {
            $this->life = 100;
        } else {
            $this->life = $life;
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAttack()
    {
        return $this->attack;
    }

    /**
     * @param mixed $attack
     */
    public function setAttack($attack)
    {
        $this->attack = $attack;
        return $this;
    }

    public function isAlive() : bool
    {
        $result = true;
        if ($this->life <= 0) {
            $result = false;
        }
        return $result;
    }
}
