<?php
    require("../Database/Database.php");
    //CASE#1 :  Inserting data using valid SQL insert command
    $database = new Database();
    echo "Test Case#1 result: ".$database->execute ("INSERT INTO user (name, email,username,password) VALUES('Llaguno, Jeytil','jeytilllaguno@gmail.com','jeylla','jeytil')")."</br>";

    //CASE#2 :   Updating data using valid SQL update command
    echo "Test Case#2 result: ".$database->execute ("UPDATE user set email = 'jeytil@gmail.com' where id = 1")."</br>";

    //CASE#3 :  Extracting data using valid SQL select command.
    $result = $database->execute ("SELECT * from user")."</br>";
    echo "Test Case#3 result: ".$result;

    //CASE#4 :  Deleting data using valid SQL delete command.
    echo  "Text Case#4 result: " .$database->execute ("DELETE from user where id=1")."</br>";

    //CASE#5:    Inserting data using invalid SQL insert command
    echo "Test Case#5 result: ".$database->execute ("INSERT INTO tbluser (name, email,username,password) VALUES('Llaguno, Jeytil','jeytilllaguno@gmail.com','jeylla','jeytil')")."</br>";

    //CASE#6:   Updating data using invalid SQL update command
    echo "Test Case#6 result: ".$database->execute ("UPDATE tbluser set email = 'jeytil@gmail.com' where id = 1")."</br>";

    //CASE#7: Extracting data using invalid SQL select command.
    $result = $database->execute ("SELECT * from tbluser")."</br>";
    echo "Test Case#7 result: ".$result;

    //CASE#8:   Deleting data using invalid SQL delete command.
    echo  "Text Case#8 result: " .$database->execute ("DELETE from tbluser where id=1")."</br>";

?>