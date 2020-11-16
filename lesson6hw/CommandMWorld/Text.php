<?php


class Text
{
    private Editor $editor;
    private array $commands;
    private int $currentCommandNumber;

    public function __construct ()
    {
        $this->currentCommandNumber = 0;
        $this->editor = new Editor();
    }

    public function action ($operator,$filename,$begin=0,$end=0)
    {
        $command = new EditCommand($operator,$filename,$begin,$end,$this->editor);
        $command->execute();

        $this->commands[] = $command;
        $this->currentCommandNumber++;
    }

    public function down (int $levels)
    {
        echo "Отменить $levels операций <br>";
        for ($i = 0;$i< $levels; $i++)
        {
            if ($this->currentCommandNumber>0)
            {
                $this->commands[--$this->currentCommandNumber]->unExecute();
            }
        }
    }

    public function up(int $levels)
    {
        echo "Вернуть $levels операций <br>".PHP_EOL;

        for ($i = 0; $i < $levels; $i++)
        {
            if($this->currentCommandNumber < count($this->commands)){
                $this->commands[$this->currentCommandNumber++]->execute();
            }
        }
    }
}