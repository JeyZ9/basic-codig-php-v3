<?php
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Code</th><th>Name</th><th>Price</th></tr>";
    
    foreach($query as $row) {
        echo "<tr>";
        echo "<td>" . $row->id . "</td>";
        echo "<td>" . $row->code . "</td>";
        echo "<td>" . $row->name . "</td>";
        echo "<td>" . $row->price . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    