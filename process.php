<?php 


if ($_POST['name']) {
    if ($_POST['email']) {
        if ($_POST['address']) {
            if ($_POST['password']) {
                if ($_POST['confirmPassword']) {
                    if ($_POST['password'] == $_POST['confirmPassword']) {
                        echo "Success!". "<br/>";
                        echo $_POST['name']. "<br/>"; 
                        echo $_POST['email']. "<br/>"; 
                        echo $_POST['address']. "<br/>"; 
                        echo $_POST['password']. "<br/>"; 
                        echo $_POST['confirmPassword']. "<br/>"; 
                    }else{
                        echo "You suck!";
                    }
                }else{
                    echo "ConfirmPassword sucks!";
                }
            }else{
                echo "Password sucks!";
            }
        }else{
            echo "Address sucks!";
        }
    }else{
        echo "Email sucks!";
    }
}else{
    echo "Name sucks!";
}


?>