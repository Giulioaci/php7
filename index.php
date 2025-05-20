<?php

function checklength($string){
    if(strlen($string)>=8){
        return true;
    }
    echo "la password deve contenere almeno 8 caratteri \n";
    return false;
}




function checkuppercase($string){
    for($i=0;  $i<strlen($string); $i++){
        if(ctype_upper($string[$i])){
           return true;
        }
    }
    echo "manca una lettera maiuscola \n";
            return false;
}



function checknumber($string){
    for($i=0;  $i<strlen($string); $i++){
        if(is_numeric($string[$i])){
           return true ;
        }
    }
    echo "almeno un numero \n";
            return false;
}



function checkspecial($string){
    $chars = ['&','?', '#','!'];
    for($i=0;  $i<strlen($string); $i++){
        if(in_array($string[$i],$chars)){
            return true;
        }
    }
    echo "almeno un carattere speciale \n";
    return false;
}



function checkpassword($string){
    $check = checklength($string);
    $check2 = checkuppercase($string);
    $check3 = checknumber($string);
    $check4 = checkspecial($string);

    if($check && $check2 && $check3 && $check4){
        echo "password accettata \n";
    }
     return $check && $check2 && $check3 && $check4;
}


do{
    $password = readline("inserisci password: \n");
}while(!checkpassword($password));






