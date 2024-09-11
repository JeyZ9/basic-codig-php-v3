<?php
    foreach($query as $row){
        echo $row->id . " " . $row->code . " " . $row->name . " " . $row->price . " ";
        echo "<br>";
    }