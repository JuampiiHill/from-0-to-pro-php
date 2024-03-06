<?php 

if ( !isset( $_COOKIE["example_cookie"] ) ) {

    setcookie(
        name: "example_cookie", // nombre de la cookie
        value: "Una coockie", // Valor
        expires_or_options: 0, //en cuanto tiempo expira la cookie. 0 la coockie expira en cuanto se cierre la pestaña - Otro valor usar funcion time()*
        path: "/config", // Indica en cual path de la url va a estar disponible. **
        domain: "localhost", // En cual dominio quiero que la coockie este disponible. Usualmente usamos nuestro dominio ej: mydomain.com
        secure: false, // Si le ponemos true estamos diciendo que la coockie poedra definirse solamente si el dominio inicia con https
        httponly: true // Si ponemos true el dominio puede ser accedida desde el front. Lenguaje como javascript puede leer su contenido
    );

    // * time() devuelve el momento justo de ahora. Si quiero que expire en 1 min ponemos time() + 60, si queremos en una hora time() + 60 * 60 y asi si
    // si queremos que expire en un dia o un mes.
    // ** Si dejamos solo una / la coockie va a estar disponible en cualquier path

}

echo "coockie creada";
echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';
?>
