<?php
class Shape {
}

class Polygon extends Shape {
}

class Triangle extends Polygon {
}

class IsoscelesTriangle extends Triangle {
}

class EquilateralTriangle extends IsoscelesTriangle {
}

class Quadrilateral extends Polygon {
}

class Parallelogram extends Quadrilateral {
}

class Rectangle extends Parallelogram {
}

class Square extends Rectangle {
}

echo "Shape\n";
echo "└── Polygon\n";
echo "    ├── Triangle\n";
echo "    │   └── IsoscelesTriangle\n";
echo "    │      └── EquilateralTriangle\n";
echo "    └── Quadrilateral\n";
echo "        └── Parallelogram\n";
echo "            └── Rectangle\n";
echo "                └── Square\n";
?>