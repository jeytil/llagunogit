<?php
    require("../Controller/UserController.php");
     //CASE#1 : Inserting record
        $userController = new UserController();
        $name = "Art";
        $email = "a@y.ocm";
        $username = "art123";
        $password = "testpassword";
        echo "Test Case#1 result: ";
        var_dump($userController->addUser($name,$email,$username,$password));
        echo "<br>";

     //CASE#2 : Updating record
        $name = "Artemio";
        $email = "art.ocm";
        $username = "art111";
        $password = "password";
	    $id = 5;
        echo "Test Case#2 result: ";
        var_dump($userController->updateUser($name,$email,$username,$password,$id));
        echo "<br>";

    //CASE#3 : Read all record
        echo "Test Case#3 result: ";
        var_dump($userController->getAllUser());
        echo "<br>";

    //CASE#4 : Delete record
        $id = 2;
        echo "Test Case#4 result: ";
        var_dump($userController->deleteUser($id));
        echo "<br>";
        
    //CASE#5 : Inserting record with 1 field empty
        $name = "Art";
        $email = "";
        $username = "art123";
        $password = "testpassword";
        echo "Test Case#5 result: ";
        var_dump($userController->addUser($name,$email,$username,$password));
        echo "<br>";

    //CASE#6 : Updating a record and setting 1 field as blank
        $name = "Artemio";
        $email = "art.ocm";
        $username = "";
        $password = "password";
        $id = 5;
        echo "Test Case#6 result: ";
        var_dump($userController->updateUser($name,$email,$username,$password,$id));
        echo "<br>";

    //CASE#7 : Update record with a non-existing id

        $name = "Artemio";
        $email = "art.ocm";
        $username = "art.ocm";
        $password = "password";
        $id = 0 ;
        echo "Test Case#7 result: ";
        var_dump($userController->updateUser($name,$email,$username,$password,$id));
        echo "<br>";

    //CASE#8 : Deleting a record with a non-existing id

        $id = 0;
        echo "Test Case#8 result: ";
        var_dump($userController->deleteUser($id));
        echo "<br>";
    
    

?>