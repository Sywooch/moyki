
<?php
   class Human{


       public static $walk = '  I love walking';
       public static $lie = '  I love lieing';
       public static $stay = '  I love staying';
       public static $sit = '  I love sitting';
       public static $nothing = '  I love nothing doing';
       public static function Doing(){
           echo 'Ya delayou mnogo del. Naprimer:';
           return  self::$nothing;
       }

       public $run = '  and running  ';
       public $talk = '  and talking  ';
       public $silent = '  and to be silent  ';

       public function Dog()
       {
           return $this->silent;
       }

   }

            echo Human::Doing();
            $dog = new Human();
            echo $dog->Dog();
?>