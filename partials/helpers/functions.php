<?php 

function passGen(){
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $downLetters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = strtoupper($downLetters);
    $numbers = '0123456789';
    if(isset($_GET['passLength'])){
        $passwordLength = $_GET['passLength'];
        $newPass = '';
        while(strlen($newPass) < $passwordLength){
            $availableValues = $symbols . $downLetters . $upLetters . $numbers;
            $newChar = $availableValues[rand(0, strlen($availableValues) - 1)];
            if(!strpos($newChar, $newChar)){
                $newPass .= $newChar;
            }
        }
        $_SESSION['password'] = $newPass;
        header('Location: index.php');
        die();
    }
    return false;
}

?>