<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $valor = $_POST['valor'];


    $mensajes = [
        "igualdad" => [
            "mensaje" => b"La educación sexual integral es un puente hacia un futuro donde la igualdad no sea solo una meta, sino una realidad palpable. Nos enseña a ver y a valorar la diversidad de géneros, cuerpos y deseos, derribando prejuicios que limitan el potencial humano.",
            "alumno" => "Diego",
            "img" => "igualdad.webp"

        ],

        "diversidad" => [
            "mensaje" => "El respeto por la diversidad implica asumir una actitud que supere la idea de “tolerancia”: “soporto al otro/a y sus elecciones porque no me queda alternativa”, es decir, significa asumir que todas las personas somos distintas e iguales en derechos. ",
            "alumno" => "Ruan",
            "img" => "diversidad.webp"
        ],

        "derechos" => [
            "mensaje" => "Los derechos son principios legales, sociales o éticos de libertad o titularidad.La ESI reconoce a los niños, niñas y adolescentes como sujetos de derecho, esto implica que tienen derecho, por ejemplo, a recibir información científicamente validada, a vivir sin violencia y sin discriminación de género y por orientación sexual, derecho a decir “no” frente a situaciones de presión de pares o de adultos, etc.",
            "alumno" => "Odila",
            "img" => "derechos.jpg"
        ],
    ];

   
if (array_key_exists($valor, $mensajes)) {
    $mensaje = $mensajes[$valor]['mensaje'];
    $alumno = $mensajes[$valor]['alumno'];
    $img = $mensajes[$valor]['img'];
} else {
    $mensaje = "elige un color predeterminado";
    $clase = "muted";
} 
}



?>


<?php require "partials/header.php" ?>

<div class="container mt-5">
    <div class="col-5 mx-auto">
        <h1 class="mb-4 fs-3">Palabra: 
            Alumno:<?= $alumno ?> </h1>
        <div class="alert alert-success" role="alert">
            <?= $mensaje ?>
        </div>

        <img width="400px" src="img/<?= $imagen ?>" alt="">
        <a href="index.php" class="mt-3 btn btn- success">volver</a>
    </div>
</div>



<?php require "partials/footer.php" ?>