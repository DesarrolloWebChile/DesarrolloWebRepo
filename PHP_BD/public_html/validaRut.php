<?php

function validaRut($rut,$dv) {

    $strlen=strlen($rut);
    $j=2;
    $suma=0;

    for ($i=0; $i<$strlen;$i++){
        $resto=$rut%10;
        $nuevoRut=intval ($rut/10);
        $rut=$nuevoRut;
        $multiplicacion=$j*$resto;
        $suma=$suma+$multiplicacion;
        $j++;
        if($j==8){
            $j=2;
        }
    }
    $resto=$suma%11;
    $valida_dv=11-$resto;
    
    if ($valida_dv==10){
        $valida_dv=0;
    }else{
        if($valida_dv==11){
            $valida_dv='k';
        }else{
            $valida_dv=$valida_dv;
        }
    }
    
    if($dv==$valida_dv){
        $msg=1;
    }else
    {
        $msg=0;
    }
    return $msg;
}
?>


