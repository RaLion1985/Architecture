<?php


class Vacancy
{
    private $observed;
    private $vacancy;
    private static ?Vacancy $instance = null;

    private function __construct ()
    { }
    private function __wakepup() {}

    private function __clone() {}

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    public function register(Observed $observed,$vacancy) {
        $this->observed[$vacancy][] = $observed;

       /*foreach ( $this->observed[$vacancy]as $item) {
            echo "User-".$item->name." subscribed for vacation " . $vacancy . "<br>";
        }*/

    }
    public function unregister(Observed $observed,$vacancy) {
        $key = array_search($observed,$this->observed[$vacancy]);

        echo "Пользователь " . $this->observed[$vacancy][$key]->name . " отписался от вакансии " . $vacancy ."<br>";
        unset($this->observed[$vacancy][$key]);
        echo "<hr> Новый список пользователей подписанных на вакансию " . $vacancy . "<br>";

         foreach ( $this->observed[$vacancy]as $item) {
             echo "Пользователь - ".$item->name . "<br>";
         }

    }

    public function newVacation($vacancy): void
    {
        $this->vacancy=$vacancy;

        $this->notifyObserved($vacancy);
    }
    private function notifyObserved($vacancy)
    {
        foreach ($this->observed[$vacancy] as $observed) {
            $observed->notify($vacancy);
        }
    }
}