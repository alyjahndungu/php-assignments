<?php
//demo program for checking the valid country codes
$phone = "+254741862008";

//first check if the provided contact has 13 characters.
switch ($phone) {
    case strlen($phone)>13 || strlen($phone)<13:
        echo "Invalid Number";
        break;

        case strlen($phone)==13:
            echo "valid number";
        break;
    
}

//start testing the country codes
switch ($phone) {
    //kenya code is +254
    case substr($phone, 0, 4) == +254 && strlen($phone)==13:
        echo "<br>This is for Kenya";
    break;

    //uganda code is +255
        case substr($phone, 0, 4) == +255 && strlen($phone)==13:
            echo "<br>This is for Uganda";
        break;
            case substr($phone, 0, 4) == +256 && strlen($phone)==13:
                echo "<br>This is for Tanzania";
            break;
                case substr($phone, 0, 4) == +257 && strlen($phone)==13:
                    echo "<br>This is for Rwanda";
                break;
    default:
       echo "<br>Inavalid Phone Number";
        break;
}
