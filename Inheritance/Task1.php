<?php
class BaseObject {
    protected $x;
    protected $y;
    protected $z;
    
    public function __construct($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    
    public function get_coordinates() {
        return [$this->x, $this->y, $this->z];
    }
}

class Block extends BaseObject {
    public function shatter() {
        $this->x = null;
        $this->y = null;
        $this->z = null;
    }
}

class Entity extends BaseObject {
    public function move($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

class Thing extends BaseObject {
}


$block = new Block(10, 20, 30);
$entity = new Entity(5, 15, 25);
$thing = new Thing(1, 2, 3);

echo "Block coordinates: ";
print_r($block->get_coordinates());

echo "Entity coordinates: ";
print_r($entity->get_coordinates());

$entity->move(100, 200, 300);
echo "Entity after move: ";
print_r($entity->get_coordinates());

$block->shatter();
echo "Block after shatter: ";
print_r($block->get_coordinates());
?>