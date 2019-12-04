<?php
//My Dice game demo Turny Dice
$diceNumber = mt_rand(1,6);

$numText ="";

//calling switch case

switch ($diceNumber) {
    case 1:
        $numText = "One";
        break;

        case 2:
            $numText = "Two";
            break;
 case 3:
    case 4:
    //case 3 & 4 goes to this line
            
                $numText = "Three or Four";
                break;

                case 5:
                    $numText = "Five";

                    echo $numText;

                    //break; let it continue to execute the next case

                    case 6:
                        $numText ="Six";

                        echo $numText;
                    break;
    
    default:
     $numText = "unknown";
}

//show results
echo 'Dice show number'.$numText.'.';

?>