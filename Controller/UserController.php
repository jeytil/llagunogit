<?php
require("../Controller/UserModel.php");
class UserController{
    private $userModel;

    public function __construct(){
        $this->userModel = new UserModel();
    }
    public function addUser($name, $email,$username, $password){
        //perform data validation
        $this->userModel->name = $name;
        $this->userModel->email = $email;
        $this->userModel->username = $username;
        $this->userModel->password = $password;
        if($name!=null&&$email!=null&&$username!=null&&!empty($password)){
            $this->userModel->insert();
	    return TRUE;
         }
        else
            return ("Please fill up required fields");        
    }

    public function updateUser($name, $email,$username, $password,$id){
        $this->userModel->name = $name;
        $this->userModel->email = $email;
        $this->userModel->username = $username;
        $this->userModel->password = $password;
        $result = $this->userModel->readAll();
        while ($data = mysqli_fetch_assoc($result)){
            if($data ["id"]==$id){
                if($name!=null&&$email!=null&&$username!=null&&!empty($password)&&$id!=null)
                    return $this->userModel->update($id);
                else 
                    return ("Cannot update with empty values"); 
            }
            
        }
	    
        return ("Cannot update! User does not exist");           
    }
	
    public function getAllUser(){
        return $this->userModel->readAll();
    }

    public function deleteUser($id){
        $result = $this->userModel->readAll();
        while ($data = mysqli_fetch_assoc($result)){
            if($data ["id"]==$id){
                return $this->userModel->delete($id);
            }
        }   
       return ("Cannot delete! User does not exist");
    }

    public function __destruct(){
        unset($this->userModel);
    }
}

?>