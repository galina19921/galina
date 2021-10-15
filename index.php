<?php 


/*1) Создать родительский (главный класс)
Класс должен содержать 2 свойства
Каждое свойство должно иметь геттеры и сеттеры*/
 
class Student {
	private $name ='Mark', $age=19;
		public function getAge()
	{
	return $this->age;
	}
	public function setAge(int $val)
	{
			$this->age = $val;
	}
	public function getName()
	{
	return $this->name;
	}
	public function setName(string $val)
	{
			$this->name = $val;
	}
}
$student = new Student();

$student->setAge(25);
echo $student->getAge();

$student->setName('Maria');
echo $student->getName();


