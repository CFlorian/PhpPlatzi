<?php

/**
 * Ejercicio 1  
 * Escribe el código necesario para generar la cadena final usando el arreglo dado
 */

 echo "<h3> Ejercicio 1 </h3>";

$arreglo = [
	'keyStr1' => 'lado',
	0 => 'ledo',
	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'

];

//Forma 1
foreach ($arreglo as $element) {
	echo"$element, ";
}
echo'<br> decirlo al revés lo dudo <br>';
foreach (array_reverse($arreglo) as $element) {
	echo"$element, ";
}
echo'<br> ¡Qué trabajo me ha costado!<br>';


//Forma2
echo "<br>";
echo implode(", ",$arreglo);
echo'<br> decirlo al revés lo dudo <br>';
echo implode(", ",array_reverse($arreglo));
echo'<br> ¡Qué trabajo me ha costado!<br>';


/**
 * Ejercicio 2
 * Crea un arreglo que contenga como clave los nombres de
 *  países y como valor otro arreglo con 3 ciudades que pertenezcan a ese país, 
 * después utiliza un ciclo foreach, para imprimir el nombre del país 
 * seguido de las ciudades que definiste
 */

echo "<h3> Ejercicio 2 </h3>";

$arrCountries = [
'Guatemala'=> [
    'Xela',
    'Antigua',
    'Chimal'
],
'Mexico'=>[
    'DF',
    'Puebla',
    'Monterrey'
],
'España'=>[
    'Madrid',
    'Barcelona',
    'Sevilla'
]
];

foreach ($arrCountries as $country => $cities) {
    echo"$country <br>";
    if (is_array($cities)) {
        foreach ($cities as $city) {
            echo"- $city <br>";
        }
    }
}

/**
 * Ejercicio 3
 * Escribe el código necesario para encontrar 
 * los 3 números más grandes y los 3 números más bajos de la siguiente lista
 */

echo "<h3> Ejercicio 3 </h3>";

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];
rsort($valores); // Ordena el array de mayor a menor
echo "Los tres valores mas altos son: ";
for ($i=0; $i < 3; $i++) { 
	echo "<br>$valores[$i] ";
}
echo "<br>Los tres valores mas bajos son: ";
sort($valores); // Ordena el array de menor a mayor
echo "Los tres números más pequeños son: ";
for ($i=0; $i < 3; $i++) { 
    echo "<br>$valores[$i],";
}


?>