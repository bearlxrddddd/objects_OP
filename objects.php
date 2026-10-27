<?PHP
//САМ ОБЪЕКТ
class Object
{
    public $var1;
    public $var2;
    public $var3;

    public function action1()
    {
        echo "Действие 1: " . $this->var1 . "\n";
    }

    public function action2()
    {
        echo "Действие 2: " . $this->var2 . "\n";
    }

    public function action3()
    {
        $this->var3 = "новое значение";
        echo "Действие 3: " . $this->var3 . "\n";
    }
}
//ЕГО ЗНАЧЕНИЯ
$obj = new Object();
$obj->var1 = "...";
$obj->var2 = "...";
$obj->var3 = "...";

$obj->action1();
$obj->action2();
$obj->action3();