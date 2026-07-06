<?php

    include "../classes/User.php";

    // create an object

    $user = new User;

    // call the method
    $user->login($_POST);
?>

    /*
        public function login($request){
        $username = $request['username'];
        $password = $request['password'];

        $sql = "SELECT * FROM users WHERE username = '$username'";

        $result = $this->conn->query($sql);

        // check the username
        if($result->num_rows == 1){
            // check if the password is correct
            $user = $result->fetch_assoc();
            
            if(password_verify($password, $user['password'])){
                // SESSIOM
                session_start();
                $_SESSION['id']         = $user['id'];
                $_SESSION['username']   = $user['username'];
                $_SESSION['full_name']  = $user['first_name'] . " " . $user['last_name'];

                header("location: ../views/dashboard.php");
                exit;
            }else{
                die;("Password is incorrect");
            }
        }else{
            die;("username not found.");
            }
        }

        public function logout(){
            session_start();
            session_unset();
            session_destroy();

            header("location: ../views");
            exit;
        }

        public function getAllUsers(){
            $sql = "SELECT * FROM users";

            if($result = $this->conn->query($sql)){
                return $result;
            }else{
                die("Error retrieving all users: " . $this->conn->error);
            }
        }

        public function getUser($id){
            $sql = "SELECT * FROM users WHERE id = $id";

            if($result = $this->conn->query($sql)){
                return $result->fetch_assoc();
            }else{
                die("Error retrieving the user: " . $this->conn->error);
            }
        }
    */

