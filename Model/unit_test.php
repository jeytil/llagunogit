<?php
    require("../Model/Model.php");
     //CASE#1 : Inserting record
        $userModel = new UserModel();
        $userModel->name = "Art";
        $userModel->email = "a@y.ocm";
        $userModel->username = "art123";
        $userModel->password = "testpassword";
        echo "Test Case#1 result: ";
        var_dump($userModel->insert());
    
    //CASE#2 :  Updating record
        echo "Test Case#2 result: ";
        var_dump($userModel->update(6));
        
    //CASE#3 :  Read All record
        echo "Test Case#3 result: ";
        var_dump($userModel->readAll());

    //CASE#4 :  Delete record
        echo "Test Case#3 result: ";
        var_dump($userModel->delete(4));   

     //CASE#5 : Inserting record with 3 missing fiels
        echo "Test Case#5 result: ";
        var_dump($userModel->insert());

    //CASE#6 :  Updating record with non-existing id
        echo "Test Case#6 result: ";
        var_dump($userModel->update("h"));

    //CASE#7 :  Delete record with non-existing id
        echo "Test Case#7 result: ";
        var_dump($userModel->delete("w")); 

?>