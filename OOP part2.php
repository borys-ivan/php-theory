Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия,
курс, а также геттеры и сеттеры для них.

<?php
Class Worker
{

    protected $name;
    protected $age;
    protected $salary;



     function __construct($name, $age, $salary)
    {

        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }



    public function getName()
    {

        return $this->name;

    }


    public function getSalary()
    {

        return $this->salary;

    }

    public function getAge()
    {

        return $this->age;

    }


    public function setSalary($salary)
    {

        $this->salary=$salary;

    }

    public function setAge($age)
    {

        $this->age=$age;

    }

}


Class Student extends Worker{

    private $agree;
    private $course;

    function  __construct($name,$age,$salary,$agree,$course)
    {

parent::__construct($name,$age,$salary);


        $this->agree = $agree;
        $this->course = $course;
    }

    public function getAgree()
    {

        return $this->agree;

    }

    public function getCourse()
    {

        return $this->course;

    }


    public function setAgree($agree)
    {

        $this->agree=$agree;

    }

    public function setCourse($course)
    {

        $this->course=$course;

    }


}



$result1=new Student("ivan",25,2000,"bak",2);

echo $result1->getName();
echo $result1->getAge();
echo $result1->getSalary();
echo $result1->getAgree();
echo $result1->getCourse();

?>

