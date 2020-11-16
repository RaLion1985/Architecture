<?php


class Editor
{
    public $buffer;


     public function operation ($operator,string $filename,int $begin,int $end)
     {
         $text=file_get_contents($filename);
         switch ($operator) {
             case 'copy':
                 $this->buffer = substr($text,$begin,$end-$begin);
                 $this->text=$text;
                 Echo "Скопировано ".$this->buffer." <br><br>";
                 break;
             case 'cut':
                 $this->buffer = substr($text,$begin,$end-$begin);
                 $text = substr($text,0,$begin).substr($text,$end);
                 echo "Вырезано ". $this->buffer .  "<br> Новый текст - ".$text ."<br><br>";
                 file_put_contents($filename,$text);
                 break;

             case 'paste':
                 $text = substr($text,0,$begin).$this->buffer.substr($text,$begin);
                 echo "Вставка ".$this->buffer."<br> Новый текст - $text <br><br>";
                 file_put_contents($filename,$text);

                 break;
             case 'undopaste':
                 $len=strlen($this->buffer);
                 $text = substr($text,0,$begin).substr($text,$begin+$len);
                 echo "Вырезано ". $this->buffer .  "<br> Новый текст - ".$text ."<br><br>";
                 file_put_contents($filename,$text);
                 break;
         }
         return $this;
     }
}