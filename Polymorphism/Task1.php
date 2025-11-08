<?php
class Selector {
    private $values;
    
    public function __construct($values) {
        $this->values = $values;
    }
    
    public function get_odds() {
        $result = array();
        foreach ($this->values as $value) {
            if ($value % 2 != 0) {
                $result[] = $value;
            }
        }
        return $result;
    }
    
    public function get_evens() {
        $result = array();
        foreach ($this->values as $value) {
            if ($value % 2 == 0) {
                $result[] = $value;
            }
        }
        return $result;
    }
}

$values = [11, 12, 13, 14, 15, 16, 22, 44, 66];
$selector = new Selector($values);
$odds = $selector->get_odds();
$evens = $selector->get_evens();
echo implode(' ', $odds) . "\n";
echo implode(' ', $evens);
?>