<?php
class Student {
    private $name;
    private $grade;
    
    public function __construct($name) {
        $this->name = $name;
        $this->grade = 0;
    }
    
    public function set_grade($new_grade) {
        if ($new_grade >= 1 && $new_grade <= 5) {
            $this->grade = $new_grade;
        }
    }
    
    public function get_info() {
        return $this->name . " - оценка: " . $this->grade;
    }
    
    public function get_name() {
        return $this->name;
    }
}


$student = new Student("Анна");
echo $student->get_info() . "\n";
$student->set_grade(3);
echo $student->get_info() . "\n";
$student->set_grade(5);
echo $student->get_info() . "\n";
$student->set_grade(10); // Значение вне диапазона 1-5, значит оценка не изменится
echo $student->get_info() . "\n";


$student = new Student("Анна");
echo $student->name;     // Нельзя получить имя напрямую
$student->grade = 4;    // Нельзя изменить оценку напрямую
?>