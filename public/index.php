<?php
 
 ///1. Создать класс StringFunction и добавить в него 3 функции replace, firstPosition, stringLength. Внутри каждой функции реализовать вызов базовых функций работы со строками.
 
 
 /*
 
 class StringFunction {
 	public function replace ($search, $replays, $subject) {
 		$resultReplace = str_replace($search, $replays, $subject,$count);
 		return $resultReplace;
 		return $count;
 	}
 	public function firstPosition ($haystack, $needle) {
 		$resultFirstPosition = strpos($haystack, $needle);
 		return $resultFirstPosition;
 	}
 	public function stringLength ($string) {
 		$resultStringLength = mb_strlen($string);
 		return $resultStringLength;
 	}
 
} 


*/


 ///2. Создать дерево наследующих друг друга объектов отражающие структуру сотрудников на фирме. Можете придумать свою сферу из биологии, техники, космоса и т.д. наделите свойствами объекты, обращая внимание что потомки наследуют родителей.


/*

class Employee{
	public $name;
	public $surname;
	public $birthday;
	public $dateStart;
	public $gender;
}

class Territory extends Employee{
	public $mainOffice;
	public $subsidiaryStPetersburg;
	public $subsidiaryYekaterinburg;
}

class Position extends Territory{
	public $general;
	public $deputyGeneral;
	public $departmentHead;
	public $worker;
}

class Worker extends Position{
	public $department;
	public $salary;
}

class DepartmantHead extends Worker{
	 public $head;
	 public $deputyHead;
}

class DepytyGeneral extends DepartmantHead{
	public $departmatsCurator;
}

class General extends DepytyGeneral{}


*/


///3. Добавить класс MathFunctions и абстрактный класс MathData от которого наследуем 2 класса MathInt и MathFloat в каждом реализуем метод setValue и getValue. В классе MathFunctions реализуем функции summ, diff, multy, div, которые принимают 2 объекта MathData в ответ получаем новый объект.

///4. К предыдущему заданию добавьте класс StringData. Добавьте интерфейс Concatenable с функцией getValue. Имплементируйте интерфейс в классы MathData и StringData. В класс StringFunction добавьте функцию которая в аргументах принимает объекты Concatenable, возвращает функция конкатинированное значени двух классов (сшиваете 2 значения с помощью точки).


/*


interface Concatenable{
	public function getValue();
} 

class MathFunctions{
	public $summ;
	public $diff;
	public $multi;
	public $div;
	public function summ($mathInt,$mathFloat){
		$summ=$mathInt+$mathFloat;
		$this->summ=$summ;
	}
	public function diff($mathInt,$mathFloat){
		$diff=$mathInt-$mathFloat;
		$this->diff=$diff;
	}
	public function multi($mathInt,$mathFloat){
		$multi=($mathInt-$mathFloat)*2;
		$this->multi=$multi;
	}
	public function div($mathInt,$mathFloat){
		$div=intdiv($mathInt, $mathFloat);
		$this->div=$div;
	}	
}

abstract class MathData implements Concatenable{
	public $someInt;
	public $someFloat;		
}

class MathInt extends MathData{
	public function setValue($num){
		$this->someInt=$num;
	}
	public function getValue(){
		return $this->someInt;
	}
}

class MathFloat extends MathData{
	public function setValue($num){
		$this->someFloat=$num;
	}
	public function getValue(){
		return $this->someFloat;
	}	
}




class StringData implements Concatenable{
	public $first = 'class StringData';
	public function getValue(){
		return $this->first;
	}
}

 
class StringFunction{
	public function Toget(Concatenable $MInt, Concatenable $MFloat, Concatenable $SStr){
		print_r ($MInt->someInt . $MFloat->someFloat . $SStr->first);
	}
}


$exp = new MathInt();
$exp->setValue(3);
$any = new MathFloat();
$any->setValue(1.22);
//print_r($any);
$many = new MathFunctions();
$many->summ($exp->someInt,$any->someFloat);
$many->diff($exp->someInt,$any->someFloat);
$many->multi($exp->someInt,$any->someFloat);
$many->div($exp->someInt,$any->someFloat);
//print_r($many);

$strD = new StringData();
$str = new StringFunction();
//print_r($strD);
$str->Toget($exp,$any,$strD);

*/


















































