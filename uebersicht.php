<?php
$user = "friendly_user";
$password = getenv("FRIENDSHIP_DB_PASSWORD");
$database = "digital_friendship_book";
$table = "friendship_entry";

try {
        $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
        echo "<h2>TODO</h2><ol>";
        foreach($db->query("SELECT name, knownthrough FROM $table") as $row) {
        echo "<li>" . $row['name'] . " " . $row['knownthrough'] . "</li>";
        }
        echo "</ol>";
} catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
}
?> 