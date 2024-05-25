<?php

for ($i=0; $i <= 10; $i++) { 
    echo "$i ";
}

echo "<br><br>";

for ($i=20; $i >= 10; $i--) { 
    echo "$i ";
}
echo "<br><br>";

for ($i=0; $i <= 50; $i++) { 
    if ($i === 5) {
        continue;
    }

    echo "$i ";
}
echo "<br><br>";

for ($i=1; $i <= 10; $i++) { 
        echo "$i ";
        for ($j=1; $j <= 10; $j++) { 
        echo "$j ";
    }
    echo "<br>";
}

$names = ["Harry", "Ron", "Hermione"];

echo "<br>";
for ($i=0; $i < count($names); $i++) { 
    echo "$names[$i]<br>";
}