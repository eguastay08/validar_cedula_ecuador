<?php

class Validar_cedula {

    /**
     * Verfica si el numero de cedula de un ecuatoriano es correcto
     * 
     * @author Eduardo Guastay <eduardoguastay1999@gmail.com>
     * @param type $cedula Numero de cedula de un ecuatoriano
     * @return boolean Si la cedula es correcta retorna verdadero, caso contrario falso;
     */
    public function isCedula($cedula) {
        if (is_numeric($cedula)) {//verificamos si el dato ingresado es un numero
            $cedula = $arr1 = str_split($cedula); //transformamos en vector el numero ingresado
            if (count($cedula) == 10 && $cedula[0] . $cedula[1] <= 24 && $cedula[0] . $cedula[1] >= 0 && $cedula[3] < 6) {//verificamos si son 10 numeros ingresados,si los dos primeros corresponden a una provincia de ecuador entre 0 y 24,si el tercer digito es menor a 6 y mayor o igual a 0
                $tot = 0; //variable en la que se almacenara el ultimo digito generado mediante la suma del producto de los digitos[0]y[8]*2 o *1 para compara con el decimo numero que es el verificador
                for ($i = 0; $i < 9; $i++) {//iniciamos un for para optener los 9 primerosdigitos del vector
                    if ($i % 2 == 0) {//optenemos el modulo de $i para verficar si multiplicamos por 2 o por 1
                        $pro = $cedula[$i] * 2; // multiplicamos el digito por 2
                    } else {
                        $pro = $cedula[$i] * 1; //multiplicamos el digito por 1
                    }
                    if ($pro >= 10)//si el producto es mayor o igual a 10 restamos 9 al resultado
                        $pro = $pro - 9;

                    $tot = $tot + $pro; //sumamos los productos
                }

                $tot = $tot - $tot - ($tot % 10) + 10; //restamos a la decena superior de la suma de los productos la suma de los productos

                if ($tot == 10) { //si la resta es 10 el ultimo digito sera 0
                    $tot = 0;
                }
                if ($tot == $cedula[9]) {//verificamos que el ultimo digito generado sea igual al ingresado
                    return true; //retornamos correcto ya que la cedula es valida
                } else {
                    return false; //retornamos incorrecto ya que la cedula es invalida
                }
            } else {
                return false; //retornamos incorrecto ya que no son 10 digitos ingresados
            }
        } else {
            return false; //retornamos incorrecto ya que no es un numero 
        }
    }

}
