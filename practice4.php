<?php

// Function to generate the multiplication table
function generateMultiplicationTable($number) {
  echo "<table>";
  echo "<tr><th></th>";

  // Print column indexes
  for ($i = 1; $i <= $number; $i++) {
    echo "<th>$i</th>";
  }

  echo "</tr>";

  // Print table rows
  for ($i = 1; $i <= $number; $i++) {
    echo "<tr><th>$i</th>";

    // Print table cells
    for ($j = 1; $j <= $number; $j++) {
      echo "<td>" . ($i * $j) . "</td>";
    }

    echo "</tr>";
  }

  echo "</table>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the input from the form
  $name = $_POST["number"];

  // Process the input (in this case, just display it)
  echo "<h2>Multiplication Table for $name</h2>";
  generateMultiplicationTable($name);
}

?>
</body>
</html>
