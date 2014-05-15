<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<?php
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    $dirección=$_GET['direccion'];
    $comuna=$_GET['comuna'];
    $sexo=$_GET['sexo'];
    $mail=$_GET['mail'];
    $interes=$_GET['interes'];
    $cont=0;
    
        if ($nombre == Null){
        echo "No ha ingresado Nombre";
    }    
    else
    {
        if ($apellido == Null)
        {
            echo "No ha ingresado Apellido";
        }
        else
        {
            if ($dirección == Null)
            {
                echo "No ha ingresado Dirección";   
            }
            else
            {
                if ($sexo == Null)
                {
                    echo "No seleccino Sexo";
                }
                else
                {
                    if ($mail==NULL)
                    {    
                        echo "No ha ingresado Correo";
                    }
                    else
                    {
                        echo "Hola ".$nombre." ".$apellido. " su solicitud  ha sido ingresada con los siguientes datos: <br/>" ;
                        echo "Su dirección es ".$dirección.", ".$comuna."<br/>";
                        echo "Su sexo es: ".$sexo."<br/>";
                        echo "Correo Electonico: ".$mail. "<br/>";
                        foreach ($interes as $value)
                        {
                            $cont++;
                        }    
                        IF ($cont>0)
                        {
                            echo "Los Intereses seleccionados son: ";
                            foreach ($interes as $value)
                            {
                            echo $value. " ";
                            }
                        }
                        else
                        {    
                            "No selecciono intereses ";
                        }
                    }
                }
            }
        }
    }
?>