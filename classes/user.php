<?php

require "database.php";
class User extends Database{
    public function createUser($first_name, $last_name, $username, $password){
        $password = password_hash($password, PASSWORD_DEFAULT);
        
        //SQL / qesry
        $sql = "INSERT INTO `users`(`first_name`, `last_name`, `username`,`password`) VALUES ('$first_name','$last_name', '$username', '$password')";
        

        //Execution
        if($this->conn->query($sql)){
            header("location: ../views"); //go to index.php inside views forder
            exit;                                   //same as die()
        }else {
            die("Error creating user: " . $this->conn->error);
            // terminate the current script + show a message
        }
    }

    public function login($username, $password){
        $sql = "SELECT `user_id`, `username`, `password` FROM users WHERE username = '$username' ";

        if($result = $this->conn->query($sql)){
            //Check if the suername is existing
            //Check if the password is correct
            //Go to dashboard.php
            if($result->num_rows==1){
                $user_details = $result->fetch_assoc();
                if(password_verify($password,$user_details['password'])){

                    session_start();
                    $_SESSION['user_id'] = $user_details['user_id'];
                    $_SESSION['username']= $user_details['username'];
                    header("location: ../views/dashboard.php" );
                    exit;
                }else {
                    die("Password is incorrect.");
                }
            }else {
                die("Uasername not found.");
            }
        }else {
            die ("Error: " . $this->conn->error);
        }
    }

    public function getAllUsers(){
        $sql = "SELECT `user_id`, first_name, last_name, username FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else {
            die ("Error retrieving all users: " . $this->conn->error);
        }
    }

    public function getUser($user_id){
        $sql = "SELECT * FROM users WHERE  `user_id` = $user_id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else {
            die("Error retrieving user: " . $this->conn->error);
        }
    }

    public function updateUser($user_id,$first_name, $last_name,$username){
        // redirect to dashboard if successful
        $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', username= '$username' WHERE `user_id` = '$user_id' ";

        if($this->conn->query($sql)){
            header( "location: ../views/dashboard.php");
            exit;
        }else {
            die ("Error updating user: " . $this->conn->error);
        }
    }

    public function deleteUser($user_id){
        $sql="DELETE FROM users WHERE `user_id`= $user_id";

        if($this->conn->query($sql)){
            header("location: ../views/dashboard.php");
            exit;
        }else{
            die("Error deleting user: " .$this->conn->error);
        }
    }
}
?>