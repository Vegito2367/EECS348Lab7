<?php

function generateMultiplicationTable($number) {
  echo "<table>";
  echo "<tr><th></th>";

  #Column Indexes
  for ($i = 1; $i <= $number; $i++) {
    echo "<th>$i</th>";
  }

  echo "</tr>";

  for ($i = 1; $i <= $number; $i++) {
    echo "<tr><th>$i</th>";


    for ($j = 1; $j <= $number; $j++) {
      echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
  }

  echo "</table>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $name = $_POST["number"];

  echo "<h2>Multiplication Table for $name</h2>";
  generateMultiplicationTable($name);
}

?>
</body>
</html>
