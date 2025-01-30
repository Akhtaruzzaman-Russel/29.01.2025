<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <?php
                /*

            $personName="Zaman";
            $personEmail="abc@gamail.com";

            $personPhone="017111111000";
            $personaddress = "Dhaka";


            echo  $personName ."</br>";
            echo $personEmail ."</br>";

            echo $personPhone ."</br>";
            echo $personaddress ;
  
            */


            // Globai Veriable 




            /*

              $personName= "Zaman";



            function getName(){

                     global $personName;

                      echo $personName;

            }
            getName();

                */



                           // Local Veriable 


                        /*

                           function personMobile(){

                            $mobileNumber="017111111";

                            echo $mobileNumber;


                           }

                           personMobile();

                           */



                           // Static Variable



                           function mySalary(){
                            static $salary=10;

                            echo "</br>" .$salary;

                            $salary ++ ;
                           }

                           mySalary();
                           mySalary();
                           mySalary();
                           mySalary();
  

        ?>


</body>
</html>