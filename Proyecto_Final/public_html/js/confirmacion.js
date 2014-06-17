function getConfirmation(total){
    var total;
    var retVal = confirm("El total de su compra es"+ total +" XXXX ¿seguro que desea pagar?");
    if( retVal == true ){
        self.location=("https://www.google.cl");
        return true;
    }else{
        return false;
    }
}
