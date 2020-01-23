# validar_cedula_ecuador
Valida si el numero de cedula ingresado es correcto para ecuador, codigo documentado
# Leguaje de programacion:php 

# El proceso para la validación es el siguiente:

* La cédula ecuatoriana está formada por los dos primeros dígitos que corresponden a la provincia donde fue expedida, por lo cual, los dos primeros dígitos no serán mayores a 24 ni menores a 0.

* El tercer dígito es un número menor a 6 (0,1,2,3,4,5).

* Los siguientes hasta el noveno dígito son un número consecutivo.

* El décimo es el dígito verificador.

Los coeficientes usados para verificar el décimo dígito de la cédula, mediante el “Módulo 10”.
Coeficientes = 2.1.2.1.2.1.2.1.2

![Continuamos](https://github.com/eguastay08/validar_cedula_ecuador/blob/master/cedula.png)

