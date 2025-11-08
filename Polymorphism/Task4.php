<?php
class MinStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = array();
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return min($this->numbers);
    }
}

class MaxStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = array();
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return max($this->numbers);
    }
}

class AverageStat {
    private $numbers;
    
    public function __construct() {
        $this->numbers = array();
    }
    
    public function add_number($number) {
        $this->numbers[] = $number;
    }
    
    public function result() {
        if (empty($this->numbers)) {
            return null;
        }
        return array_sum($this->numbers) / count($this->numbers);
    }
}

// Пример 1
$values = [1, 2, 4, 5];

$mins = new MinStat();
$maxs = new MaxStat();
$average = new AverageStat();
foreach ($values as $v) {
    $mins->add_number($v);
    $maxs->add_number($v);
    $average->add_number($v);
}

echo $mins->result() . " " . $maxs->result() . " " . number_format($average->result(), 3, '.', '') . "\n";

// Пример 2
$mins = new MinStat();
$maxs = new MaxStat();
$average = new AverageStat();

echo ($mins->result() === null ? "None" : $mins->result()) . " " . 
     ($maxs->result() === null ? "None" : $maxs->result()) . " " . 
     ($average->result() === null ? "None" : $average->result()) . "\n";

// Пример 3
$values = [1, 0, 0];

$mins = new MinStat();
$maxs = new MaxStat();
$average = new AverageStat();
foreach ($values as $v) {
    $mins->add_number($v);
    $maxs->add_number($v);
    $average->add_number($v);
}

echo $mins->result() . " " . $maxs->result() . " " . number_format($average->result(), 3, '.', '');
?>