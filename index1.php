<html>
    <head>
        <title>
            Custom PHP with HTML
        </title>
    </head>
<body>
        <h2><?php echo "index php page"; ?></h2>
        <?php
            
            /* 
            1
            1	2
            1	2	
            1	2	3	4
            1	2	3	4	5
            */
            echo "Using For loop" . "<br>";
            for ($i=1; $i<=5; $i++) { 
                for ($j=1; $j<=$i ; $j++) { 
                    echo $j ." ";
                }
                    echo "<br>";
            }

            echo "<br>";
            echo "Using While loop and Do...While loop" . "<br>";

            $i = 1;
            while($i<=5){
                $j = 1;
                do{
                    echo $j . " ";
                    $j++;
                }while($j<=$i);
                echo "<br>";
                $i++;
            }
            echo  "++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";
             
           /*
            5
            4	3
            2	1	0
            -1	-2	-3	-4
            -5	-6	-7	-8	-9 */

            echo "Using For loop" . "<br>";
            $num = 5;
            for($i=0; $i<=5;$i++){
                for($j=0; $j<=$i;$j++){
                        echo $num. " ";
                        $num--;
                }
                echo "<br>";
            }

            echo "<br>";

            echo "Using Do...While loop" . "<br>";
            $num = 5;
            $i = 0;
            while($i<=5){
                 $j = 0;
                do{
                    echo $num. " ";
                    $num--;
                    $j++;
                }while($j<= $i);
                $i++;
                echo "<br>";
            }
            echo "<br>";
            echo  "++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";

            /* 
            *
            1	2
            *	*	*
            1	2	3	4
            *	*	*	*	*
            */

            echo "Using For loop" . "<br>";
            $k = 4;
            for ($i=0; $i <=$k ; $i++) { 
                
                for ($j=0; $j <= $i ; $j++) { 
                    if($i%2==0){
                        echo  "*". " ";  
                    }
                    else{
                        echo $j+1 . " ";
                    }
                        
                }
                echo "<br>";
            }

            echo "<br>";

            echo "Using Do...While loop" . "<br>";

            $k = 4;
            $i =0;
            do{
                $j= 0;
                while($j<=$i){
                    if($i%2 == 0){
                        echo "*" . " ";
                    }
                    else{
                        echo $j+1 . " ";
                    }
                    $j++;
                }
                echo "<br>";
                $i++;
            }while($i<=$k);


            echo "<br>";

            echo  "++++++++++++++++++++++++++++++++++++++++++++++++++++" . "<br>";
            /*
           
            9
            9	8
            9	8	7
            9	8	7	6
            9	8	7	6	5 */
            echo "Using For loop" . "<br>";
            
            for ($i=9; $i>=5 ; $i--) { 
                for ($j=9; $j >=$i ; $j--) { 
                   echo $j. " ";
                }
                echo "<br>";
            }

            echo "<br>";
            echo "Using Do...While loop" . "<br>";

            $i = 9;
            do{
                $j = 9;
                while($j>=$i){
                    echo $j . " ";
                    $j--;
                }
                echo "<br>";
                $i--;
               
            }while($i>=5);
            
            

        ?>
    </body>
</html>