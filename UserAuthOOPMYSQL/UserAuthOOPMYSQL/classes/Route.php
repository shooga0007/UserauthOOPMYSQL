<?php
    include_once('userauth.php');

    class Formcontoller extends userAuth{
        private $fullname;
        private $email;
        private $password;
        private $confirmpassword;
        private $country;
        private $gender;

        public function __construct(){
            $this->db = new Dbh();
        }
        public function handleform(){
            switch(true) {
                case isset($_post['register']):
                    //unpack all data for registering
                    $this->fullame = $_POST['fullnames'];
                    $this->email = $_POST['email'];
                    $this->password = $_POST['password'];
                    $this->confirmPassword = $_POST['confirmPassword'];
                    $this->gender = $_POST['gender'];
                    $this->country = $_POST['country'];
                    $this->register($this->fullname, $this->email, $this->password, $this->confirmPassword, $this->country, $this->gender);
                    break;
                 case isset($_POST['login']):  
                    //unpack all data for login
                    $this->email = $_POST['email'];
                    $this->password = $_POST['password'];
                    $this->login($this->email, $this->passsword);
                    break;
                case isset($_POST['logout']):
                    //unpack all data for logout
                    $this->email = $_POST['email'];
                    $this->logout($this->email);
                    break;
                case isset($_POST['delete']): 
                   //unpack all data for delete
                   $this->email = $_POST['email'];
                   $this->password = $_POST['password'];
                   $this->deleteuser($this->email);
                   break; 
                   case isset($_POST['reset']): 
                    //unpack all data for updating password
                    $this->email = $_POST['email'];
                    $this->password = $_POST['password'];
                    $this->updateuser($this->email, $this->password);
                    break; 
                    case isset($_POST['all']):
                    //unpack all data for gettin all users
                    $this->getAllUsers();
                    break;
                default:
                   echo 'No form was submitted';
                   break;
              }

           }
        }


