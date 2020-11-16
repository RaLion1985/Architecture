<?php


class Employee implements Observed
{
    public $name;
    public $email;
    public $experience;



    public function __construct($name, $email, $experience)
    {
        $this->name = $name;
        $this->email = $email;
        $this->experience = $experience;

    }

    public function subscribe($vacancy)
    {
        Vacancy::getInstance()->register($this,$vacancy);
    }
    public function unsubscribe($vacancy)
    {
        Vacancy::getInstance()->unregister($this,$vacancy);
    }
    function notify($vacancy)
    {
        echo "Уважаемый ".$this->name." появилась вакансия " . $vacancy ."<br>";
        echo "Ваша почта " . $this->email ." <br>";
        echo "Ваш опыт " . $this->experience ." <hr>";
    }
}