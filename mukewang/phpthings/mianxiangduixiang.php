<?php
date_default_timezone_set("PRC");
class NbaPlayer
{
    function __construct($name, $height, $weight, $team, $playerNumber) {
       $this->name = $name; // $this是php里面的伪变量，表示对象自身
       $this->height = $height; // 通过$this可以设置对象的属性值
       $this->weight = $weight;
       $this->team = $team;
       $this->playerNumber = $playerNumber;
    }

    // 析构函数，用于清理程序中使用的系统资源，比如释放打开的文件等等
    // 析构函数在该对象不会再被使用的情况下自动调用
    function __destruct() {
       print "Destroying " . $this->name . "\n";
    }

    public function run() {
        echo "Running\n";
    }

    public function jump(){
        echo "Jumping\n";
    }
    public function dribble(){
        echo "Dribbling\n";
    }
    public function shoot(){
        echo "Shooting\n";
    }
    public function dunk(){
        echo "Dunking\n";
    }
    public function pass(){
        echo "Passing\n";
    }
}
$jordan = new NbaPlayer("Jordan", "198cm", "98kg", "Bull", "23");
// 访问对象的属性使用的语法是->符号，后面跟着属性的名称
echo $jordan->name."\n";
echo "<br>";
// 调用对象的某个方法使用的语法是->符号，后面跟着方法的名称和一对括号
$jordan->run();
echo "<br>";
$jordan->pass();
echo "<br>";
$james = new NbaPlayer("James", "203cm", "120kg", "Heat", "6");

echo $james->name."\n";
echo "<br>";
// 当对象变量被赋值为Null的时候，对象的析构函数会被自动调用
// 同一个类的其他对象不受影响
$james = null; 
echo "From now on James will not be used anymore.\n";
// 当程序执行结束时，所有类的对象的析构函数都会自动被调用
