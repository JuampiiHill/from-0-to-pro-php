<!-- Cuando utilizar comillas simples y dobles -->
<?php 

echo 'Podemos imprimir texto utilizando comillas simples. 
Pero si queremos utilizar comillas dentro de nuestro texto, PHP nos arrojará un error.' . '<br>' .
'Esto se soluciona usando backslash. Ejemplo: \'Mas texto\'. 
No podremos imprimir variables utilizando comillas simples ya que este lo tomará como un texto más
$variable' . '<br> <br>';

$name = 'Juan';
echo "Para poder imprimir variables dentro de comillas debemos utilizar las comillas dobles. Mi nombre es $name.
Juan es mi varibale <br>";
echo  'Si necesitara imprimir mi  variable con comillas simple tendre que usar un punto (.) que sirve para concatenar.
Por ejemplo: \'Mi nombre es\' . $name' . '<br>';
echo "Utilizar comillas dobles deja mas limpio mi codigo ya que tambien puedo utilizar saltos de lineas simples utilizando <br>
la etiqueta de html br <br>";

$courses = [
    'backend' => [
        'PHP',
        'Laravel',
        'Ingles'
    ]
];

echo "Cuando una estructura es compleja necesitamos utilizar llaves {} al <br>
momento de iniciar y al momento de finalizar Ejemplo: {$courses['backend'][0]} <br> <br>";

echo "Tambien tenemos la posibilidad de mostrar diferentes datos mas complejos como un objeto. Por ejemplo tengo una clase User <br>
 con una variable name con mi nombre. Si yo quiero imprimir este elemento, tengo que colocar antes de colocar el mensaje, la cracion <br>
 de un objecto user = new User; que es el nombre de mi clase. <br>
 Si lo quiero imprimir utilizaria el nombre de mi objeto en este caso user seguido de -> y la propiedad name. <br>
 ejemplo: <br>";

class User 
{
    public $name = 'Juan';
}

$user = new User;

echo "$user->name quiere aprender {$courses['backend'][2]} <br><br>";

echo "Variable variable <br>";
echo "Tengo la variable student que es igual a juan y la variable juan con un string que dice estudiante de PHP <br>
Si quiero acceder de manera dinamica a la variable juan accedo de esta manera <br>";

$student = 'juan';
$juan = 'Estudiante de PHP';

echo "$student es ${$student} <br>";
echo "Otra forma de trabajar utilizando una estructura compleja. Tengo una funcion sencilla getTeacher() que retorna 'teacher' <br>
y tengo la variable teacher por fuera de la funcion que tiene como valor 'italo' <br>";

function getTeacher() {
    return 'teacher';
}
$teacher = 'italo';

echo "Para imprimir este elemento colocamos comillas dobles sigo de dolar y dentro de las {} nuestra funcion getTeacher() <br>
Para tener una mejor legibilidad podemos colocar 2 llaves adicionales {} para que no se interprete como un string y podamos leerlo de mejor manera <br>";

echo "{${getTeacher()}} enseña PHP";

