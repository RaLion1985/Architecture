<?php

class EditCommand extends Command {
    public $operator;
    public $begin;
    public $end;
    public $filename;
    public Editor $editor;


    public function __construct($operator,$filename, $begin, $end, Editor $editor)
    {
        $this->operator = $operator;
        $this->begin = $begin;
        $this->end = $end;
        $this->filename= $filename;
        $this->editor = $editor;
    }


    public function execute()
    {
        $this->editor->operation($this->operator,$this->filename,$this->begin,$this->end);
    }

    public function unExecute()
    {
        echo "<br> begin = " . $this->begin . " end"  .$this->end ." operand ".$this->reverse($this->operator) ."<br>";
        $this->editor->operation($this->reverse($this->operator),$this->filename,$this->begin,$this->end);
    }
    protected function reverse($operator)
    {
        $downOperator="";
        switch ($operator) {
            case 'copy' : $downOperator = 'copy'; break;
            case 'cut' : $downOperator = 'paste'; break;
            case 'paste' : $downOperator = 'undopaste'; break;
        }
        return $downOperator;
    }
}