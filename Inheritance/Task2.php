<?php
class Acellularia {
}

class Cellularia {
}

class Prokaryota extends Cellularia {
}

class Eukaryota extends Cellularia {
}

class Unicellularia extends Eukaryota {
}

class Fungi extends Eukaryota {
}

class Plantae extends Eukaryota {
}

class Animalia extends Eukaryota {
}

echo "Acellularia\n";
echo "Cellularia\n";
echo "├── Prokaryota\n";
echo "└── Eukaryota\n";
echo "    ├── Unicellularia\n";
echo "    ├── Fungi\n";
echo "    ├── Plantae\n";
echo "    └── Animalia\n";
?>