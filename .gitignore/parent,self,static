parent - вызываем родительский метод (не обязательно статичный), self - вызываем метод именно этого класса, 
static - вызываем метод текущего класса. Разница между self и static хорошо видна, например, 
когда вы делаете new self() или new static() - в первом случае будет создан объект класса, 
где упомянут self (т.е. создан родитель), во втором - объект того класса, где вызывается метод (т.е. потомок)


<?php
 
class A
{
    public function abc()
    {
        $a = '';
        $a .= self::test();
        $a .= static::test();
        return $a;
    }
 
    public static function test()
    {
        return 'A';
    }
 
    public function __toString()
    {
        return get_class($this) . "\n";
    }
 
    public static function createSelfObject()
    {
        return new self();
    }
 
    public static function createStaticObject()
    {
        return new static();
    }
}
 
class B extends A
{
    public function abc()
    {
        return parent::abc() . "\n";
    }
 
    public static function test()
    {
        return 'B';
    }
}
 
$a = new A();
echo "Class A: ";
echo $a->abc();
echo "***\n";
 
$b = new B();
echo "Class B: ";
echo $b->abc();
echo "***\n";
 
$a1 = A::createSelfObject();
echo 'A::createSelfObject() -> ' . $a1;
$a2 = A::createStaticObject();
echo 'A::createStaticObject() -> ' . $a2;
$b1 = B::createSelfObject();
echo 'B::createSelfObject() -> ' . $b1;
$b2 = B::createStaticObject();
echo 'B::createStaticObject() -> ' . $b2;
 
---------------------------------------------------------------
Class A: AA***
Class B: AB
***
A::createSelfObject() -> A
A::createStaticObject() -> A
B::createSelfObject() -> A
B::createStaticObject() -> B
