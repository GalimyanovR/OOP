<?php
class Transport {
}

class WaterTransport extends Transport {
}

class Speedboat extends WaterTransport {
}

class Ship extends WaterTransport {
}

class AirTransport extends Transport {
}

class Airplane extends AirTransport {
}

class Helicopter extends AirTransport {
}

class GroundTransport extends Transport {
}

class RailTransport extends GroundTransport {
}

class Car extends GroundTransport {
}

class Bicycle extends GroundTransport {
}

class SpaceTransport extends Transport {
}

class Rocket extends SpaceTransport {
}


echo "Transport\n";
echo "├── WaterTransport\n";
echo "│   ├── Speedboat\n";
echo "│   └── Ship\n";
echo "├── AirTransport\n";
echo "│   ├── Airplane\n";
echo "│   └── Helicopter\n";
echo "├── GroundTransport\n";
echo "│   ├── Rail Transport\n";
echo "│   ├── Car\n";
echo "│   └── Bicycle\n";
echo "└── SpaceTransport\n";
echo "    └── Rocket \n";
?>