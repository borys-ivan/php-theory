Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного 
объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в 
следующие значения - имя 'Вася', возраст 26, зарплата 2000.Выведите на экран сумму зарплат Ивана и Васи. 
Выведите на экран сумму возрастов Ивана и Васи.

<?php
Class Worker
{

    public $name;
    public $age;
    public $salary;

    public $resSalary;
    public $resAge;

    function Worker($name, $age, $salary)
    {

        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

 /*   function set($name,$age,$salary){

        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;

    }

    function get(){

       echo "<br>".$this->name;
       echo "<br>".$this->age;
       echo "<br>".$this->salary;
    }*/
   /* public function __construct($name,$age,$salary)
    {
        $this->name=$name;
        $this->age=$age;
        $this->salary=$salary;
    } */

   function view()
   {

       echo "<br>" . $this->name;
       echo "<br>" . $this->age;
       echo "<br>" . $this->salary;

   }

     function amountSalary($amount)
     {
         echo "Amount salary" . $resSalary = +$this->amount=$amount;
     }

     function amountAge()
     {
         echo "Amount age" . $resAge =+ $this->age;
     }


}

/*$res1 = new Worker("Ivan", 25, 1000);
$res1->view();*/

/*$res1=new Worker();
$res1->set("Ivan",25,1000);
$res1->get();

$res2=new Worker();
$res2->set("Petro",26,2000);
$res2->get();*/

$res1 = new Worker("Ivan", 25, 1000);
$array[]=$res1->salary;
$res2 = new Worker("Petro", 26, 2000);
$array[]=$res2->salary;


/*$result=0;

foreach ($array as $res){

    $result+=$res;
}

echo $result;*/

echo array_sum($array);


//print_r($array);

?>



Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и 
следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

<?php

Class Worker
{

    private $name;
    private $age;
    private $salary;


    function Worker($name, $age, $salary)
    {

        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function setName($name)
    {

        $this->name = $name;

    }

    public function setAge($age)
    {

        $this->age = $age;

    }

    public function setSalary($salary)
    {

        $this->salary = $salary;
    }


    public function getName()
    {

        return $this->name;

    }

    public function getAge()
    {

        return $this->age;

    }

    public function getSalary()
    {

        return $this->salary;

    }

}

$result1 = new Worker("Ivan", 25, 1000);
$array['salary'][] = $result1->getSalary();
$result2 = new Worker("Petro", 26, 2000);
$array['salary'][] = $result2->getSalary();

echo array_sum($array['salary']);

?>




 Дополните класс Worker из предыдущей задачи private методом checkAge, 
 который будет проверять возраст на корректность (от 1 до 100 лет). 
 Этот метод должен использовать метод setAge перед установкой нового возраста 
 (если возраст не корректный - он не должен меняться).

<?php


Class Worker
{

    private $name;
    private $age;
    private $salary;



    function Worker($name, $age, $salary)
    {

        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    private function checkAge($age)
    {

        if (2 < $age && $age < 100) {

            return true;

        } else {

            return false;
        }

    }

    public function setName($name)
    {

        $this->name = $name;

    }

    public function setAge($age)
    {

        if($this->checkAge($age)) {
            $this->age = $age;
        }else{
            echo "Не коректний вік";
        }

    }

    public function setSalary($salary)
    {

        $this->salary = $salary;
    }


    public function getName()
    {

        return $this->name;

    }

    public function getAge()
    {

        return $this->age;

    }

    public function getSalary()
    {

        return $this->salary;

    }

}

$result1 = new Worker("Ivan", 25, 1000);

$result1->setAge(1);

?>
