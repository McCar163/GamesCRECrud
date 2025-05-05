<?php
class User{
    
    public $userName;
    public $userEmail;
    public $userNumber;
    public $userAddress;
    
    // Access Modifiers
    public function setUserName($userName){
        $this->userName = $userName;
    }
    public function getUserName() {
        return $this->userName;
    }
	
    public function setUserEmail($userEmail) {
        $this->userEmail = $userEmail;
    }
    public function getUserEmail()
	{  return $this->userEmail;
    }
    public function setUserNumber($userNumber)  {
        $this->userNumber = $userNumber;
    }
    public function getUserNumber() {
        return $this->userNumber;
    }
    public function setUserAddress($userAddress) {
        $this->userAddress = $userAddress;
    }
    public function getUserAddress()  {
        return $this->userAddress;
    }
	
	
    // Method declarations
    public function displayUser() {
        echo "<br>----------------------";
        echo "<br>USER DETAILS";
        echo "<br>-----------------------"; 
        echo "<br> Username: " . $this->getUserName(); 
        echo "<br> User Email: " . $this->getUserEmail(); 
        echo "<br> User Phone Number: " . $this->getUserNumber(); 
        echo "<br> User Address: " . $this->getUserAddress(); 
    }
}
?>