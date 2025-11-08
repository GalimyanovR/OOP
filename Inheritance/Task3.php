<?php
class User {
}

class Student extends User {
}

class Teacher extends User {
}

class Admin extends User {
}

class SuperAdmin extends Admin {
}

echo "User\n";
echo "├── Student\n";
echo "├── Teacher\n";
echo "└── Admin\n";
echo "    └── SuperAdmin\n";
?>