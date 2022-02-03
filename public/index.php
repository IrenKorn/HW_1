<?php
 echo 'hello world!';
 
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
















































