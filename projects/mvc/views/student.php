<?php

foreach($data as $student) {
    echo "<hr/>";
    echo "<h1>$student->name $student->surname</h1>";
    echo "<p>Age: $student->age</p>";
    echo "<p>Phone: $student->phone</p>";
    echo "<p>Email: $student->email</p>";
}