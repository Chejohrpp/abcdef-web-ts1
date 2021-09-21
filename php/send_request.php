<?php

if ($db->query($sql) === TRUE) {
    echo $message;
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}  
$db->close();

?>