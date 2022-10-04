<!DOCTYPE html>
<html>
    <head>  
    </head>
    <body>
    <?php
    //funciones
    function CrearDatosJugador(){
        $listaJugadores = [];
       for ($i=0; $i < 3; $i++) { 
        $numAlea = rand(1, 6);
        $listaJugadores[$i] = $numAlea;
       }
       return $listaJugadores;


    }
    function sacarPareja($valor1,$valor2,$valor3){



        if ($valor1 == $valor2) {
            return $valor1;
        }elseif ($valor2 == $valor3) {
            return $valor2;
        }elseif ($valor1 == $valor3) {
            return $valor1;           
        }else{
            return -1;
        }

    }
    function sacarTrio($valor1,$valor2,$valor3){

        if ($valor1 == $valor2 && $valor2 == $valor3) {
            return $valor1;
        } else{
            return -1;
        }
    }
    function pintarDados($listaDadosGanador,$listaDadosPerdedor){

        
        
        for ($i=0; $i < 2; $i++) { 
            
            if ($i == 0) {
                for ($x=0; $x < 3; $x++) { 
                
                    if ($listaDadosGanador[$x] == 1) {
                        echo "<div style='background-color:red'><img src='../../imagenes/img/img/1.svg'></div>";
                    }elseif ($listaDadosGanador[$x] == 2) {
                        echo "<div style='background-color:red'><img src='../../imagenes/img/img/2.svg'></div>";
                    }elseif ($listaDadosGanador[$x] == 3) {
                        echo "<div style='background-color:red'><img src='../../imagenes/img/img/3.svg'></div>";
                    }elseif ($listaDadosGanador[$x] == 4) {
                        echo "<div style='background-color:red'><img src='../../imagenes/img/img/4.svg'></div>";
                    }elseif ($listaDadosGanador[$x] == 5) {
                        echo "<div style='background-color:red'><img src='../../imagenes/img/img/5.svg'></div>";
                    }elseif ($listaDadosGanador[$x] == 6) {
                        echo "<div style='background-color:red'><img src='../../imagenes/img/img/6.svg'></div>";
                        
                    }
                    
                }  

            }else{
                for ($x=0; $x < 3; $x++) { 
                    if ($listaDadosPerdedor[$x] == 1) {
                        echo "<div style='background-color:blue'><img src='../../imagenes/img/img/1.svg'></div>";
                    }elseif ($listaDadosPerdedor[$x] == 2) {
                        echo "<div style='background-color:blue'><img src='../../imagenes/img/img/2.svg'></div>";
                    }elseif ($listaDadosPerdedor[$x] == 3) {
                        echo "<div style='background-color:blue'><img src='../../imagenes/img/img/3.svg'></div>";
                    }elseif ($listaDadosPerdedor[$x] == 4) {
                        echo "<div style='background-color:blue'><img src='../../imagenes/img/img/4.svg'></div>";
                    }elseif ($listaDadosPerdedor[$x] == 5) {
                        echo "<div style='background-color:blue'><img src='../../imagenes/img/img/5.svg'></div>";
                    }elseif ($listaDadosPerdedor[$x] == 6) {
                        echo "<div style='background-color:blue'><img src='../../imagenes/img/img/6.svg'></div>";
                        
                    }
                }

            }


            

        }

    }

    function sacarEquipoVencedor($listaDeValoresEquipo1,$listaDeValoresEquipo2){

        
        $tiene_Pareja_Equipo_1 = -1;
        $tiene_Trio_Equipo_1 = -1;
        $tiene_Pareja_Equipo_2 = -1;
        $tiene_Trio_Equipo_2 = -1;



        $tiene_Pareja_Equipo_1 = sacarPareja($listaDeValoresEquipo1[0],$listaDeValoresEquipo1[1],$listaDeValoresEquipo1[2]);
        $tiene_Trio_Equipo_1 = sacarTrio($listaDeValoresEquipo1[0],$listaDeValoresEquipo1[1],$listaDeValoresEquipo1[2]);
        $tiene_Pareja_Equipo_2 = sacarPareja($listaDeValoresEquipo2[0],$listaDeValoresEquipo2[1],$listaDeValoresEquipo2[2]);
        $tiene_Trio_Equipo_2 = sacarTrio($listaDeValoresEquipo2[0],$listaDeValoresEquipo2[1],$listaDeValoresEquipo2[2]);
        

        

        if ($tiene_Trio_Equipo_1 !=-1 && $tiene_Trio_Equipo_2 !=-1) {

            if ($tiene_Trio_Equipo_1 > $tiene_Trio_Equipo_2) {
                
                pintarDados($listaDeValoresEquipo1,$listaDeValoresEquipo2);


                echo "El trio del equipo 1 $tiene_Trio_Equipo_1  es mayor al del equipo 2 $tiene_Trio_Equipo_2";
            }else{
                pintarDados($listaDeValoresEquipo1,$listaDeValoresEquipo2);
                echo "El equipo 2 $tiene_Trio_Equipo_2 tiene una trio que el equipo 1";
            }
            



        } else if ($tiene_Pareja_Equipo_1 != -1 && $tiene_Pareja_Equipo_2 != -1) {
            if ($tiene_Pareja_Equipo_1 > $tiene_Pareja_Equipo_2) {
                pintarDados($listaDeValoresEquipo1,$listaDeValoresEquipo2);
                echo "El equipo 1 $tiene_Pareja_Equipo_1 tiene una pareja mayor al equipo 2";
                
            }else if ($tiene_Pareja_Equipo_1 < $tiene_Pareja_Equipo_2) {
                pintarDados($listaDeValoresEquipo2,$listaDeValoresEquipo1);
                echo "El equipo 2 $tiene_Pareja_Equipo_2 tiene una pareja mayor al equipo 1";
            }

        
        }else{
            $totalEquipo1 = $listaDeValoresEquipo1[0] + $listaDeValoresEquipo1[1] + $listaDeValoresEquipo1[2];
            $totalEquipo2 = $listaDeValoresEquipo2[0] + $listaDeValoresEquipo2[1] + $listaDeValoresEquipo2[2];
            if ($totalEquipo1 > $totalEquipo2) {
                pintarDados($listaDeValoresEquipo1,$listaDeValoresEquipo2);
                echo "El equipo 1 $totalEquipo1 tiene una  mayor valor al equipo 2";
            }else{
                pintarDados($listaDeValoresEquipo1,$listaDeValoresEquipo2);
                echo "El equipo 2 $totalEquipo2 tiene una  mayor valor al equipo 1";
            }
        }
        
    }
        
    


    
   
    //codigo directo
    $listaDeValoresEquipo1 = CrearDatosJugador();
    $listaDeValoresEquipo2 = CrearDatosJugador();
    
    

    sacarEquipoVencedor($listaDeValoresEquipo1,$listaDeValoresEquipo2);
    
    ?>
    

    </body>
</html>