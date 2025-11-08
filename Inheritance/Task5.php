<?php
class Animal {
    public function breathe() {
    }
    
    public function eat() {
    }
}

class Fish extends Animal {
    public function swim() {
    }
}

class Bird extends Animal {
    public function lay_eggs() {
    }
}

class FlyingBird extends Bird {
    public function fly() {
    }
}

echo "Иерархия классов животных:\n";
echo "Animal\n";
echo "├── Fish\n";
echo "└── Bird\n";
echo "    └── FlyingBird\n";
?>