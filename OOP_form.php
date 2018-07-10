
Создайте класс Form - оболочку для создания форм. Он должен иметь методы input, submit, password, textarea, open, close. 
Каждый метод принимает массив атрибутов.

<?php


class Form{

    public $value;


    private function format($value){

        foreach ($value as $key=>$val){

            $res =$key."='".$val."' ";

            $str[]=$res;
        }


        return  implode($str);

}

    function open($value)
    {

        $res = "<form " . $this->format($value) . ">";

        return $res;
    }


    function input($value){

        $res="<input ".$this->format($value).">";

        return $res;
    }

    function password($value){

        $res="<input ".$this->format($value).">";

        return $res;
    }

    function submit($value){

        $res="<input ".$this->format($value).">";

        return $res;
    }

    function close(){



        return "</form>";
    }


}

$form=new Form();
echo $form->open(['action'=>'index.php', 'method'=>'POST']);
echo $form->input(['type'=>'text', 'placeholder'=>'Ваше имя', 'name'=>'name']);
echo $form->password(['placeholder'=>'Ваш пароль', 'name'=>'pass']);
echo $form->submit(['type'=>'submit', 'value'=>'Отправить']);
echo $form->close();
