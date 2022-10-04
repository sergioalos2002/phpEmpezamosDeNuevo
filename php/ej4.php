<!DOCTYPE html>
<html>
    <head>
        <style>
            <?php 
            $num1 = rand(1, 255);
            $num2 = rand(1, 255);
            $num3 = rand(1, 255);
            $num4 = rand(1, 255);
            $num5 = rand(1, 255); 
            $num6 = rand(1, 255);
            $valor1 = "background-color:rgb(\<?php echo \"$num1\"?\>, \<?php echo \"$num2\"?\>, \<?php echo \"$num3\" ?\>)";
            $valor2 = 'background-color:rgb(<?php echo "$num4"?>, <?php echo "$num5"?>, <?php echo "$num6" ?>)';
            
            
            ?>
           
        
            .container .box .box-cell.box1 {
                background-color:rgb(<?php echo "$num1"?>, <?php echo "$num2"?>, <?php echo "$num3" ?>);
                 /* background-color:rgb(100,150,200); */
                 float:left;
                 width: 200px;
                 height: 100px;
    
                
             }
            .container .box .box-cell.box2 {
              background-color:rgb(<?php echo "$num4"?>, <?php echo "$num5"?>, <?php echo "$num6" ?>); 
                /* background-color:rgb(100,150,200); */
                float:left;
                width: 200px;
                 height: 100px;
                
            }
        </style>
    </head>
    <body>
        <h1>Ejercicio4</h1>
        <div class="container">
            <div class="box">
                <div class="box-row">
                    <div class="box-cell box1"><?php echo"$valor1"?>
                    </div>
                    <div class="box-cell box2"><?php echo "$valor2"?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>