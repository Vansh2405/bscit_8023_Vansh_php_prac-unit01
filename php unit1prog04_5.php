<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $month = 6;
        echo "SWITCH CASE</br>";
        switch($month):

        
            case 1: 
                echo "january";     
                break;
            case 2:
                echo "febuary ";
                break; 
            case 3:
                echo "march";
                break; 
            case 4:
                echo "april";
                break;
            case 5:
                echo "may";
                break;
            case 6:
                echo "june";
                break;
            case 7:
                echo "july";
                break;
            case 8:
                echo "augest";
                break;
            case 9:
                echo "september";
                break;
            case 10:
                echo "october";
                break;
            case 11:
                echo "november";
                break;
            case 12:
                echo "december";
                break;
            
            default:
                echo "invalid month";                            
                break;
            endswitch;
            
            
        ?>
</body>
</html>