<html>
<body>


<?php
$figuras = [
    "Círculo" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Triángulo" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Cuadrado" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Rectángulo" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Pentágono regular" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Hexágono regular" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Heptágono regular" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Octágono regular" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Trapecio" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Rombo" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Paralelogramo" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Elipse" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Cubo" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Prisma rectangular" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Cilindro" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Cono" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Esfera" => ["Área" => true, "Perímetro" => false, "Volumen" => true],
    "Pirámide" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Tetraedro" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Dodecaedro" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Icosaedro" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Toroide" => ["Área" => true, "Perímetro" => false, "Volumen" => true],
    "Semicírculo" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Sector circular" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Segmento circular" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Triángulo equilátero" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Triángulo isósceles" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Triángulo escaleno" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Triángulo rectángulo" => ["Área" => true, "Perímetro" => true, "Volumen" =>false],
    "Triángulo obtusángulo" => ["Área" => true, "Perímetro" => true, "Volumen"=>false],
    "Triángulo acutángulo" => ["Área" => true, "Perímetro" => true, "Volumen" =>false],
    "Cuadrilátero cóncavo" => ["Área" => true, "Perímetro" => true, "Volumen" =>false],
    "Polígono irregular" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Romboide" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Estrella de 5 puntas" => ["Área" => true, "Perímetro" => true, "Volumen" =>false],
    "Estrella de 6 puntas" => ["Área" => true, "Perímetro" => true, "Volumen" =>false],
    "Estrella de 7 puntas" => ["Área" => true, "Perímetro" => true, "Volumen" =>false],
    "Estrella de 8 puntas" => ["Área" => true, "Perímetro" => true, "Volumen" =>false],
    "Elipse" => ["Área" => true, "Perímetro" => true, "Volumen" => false],
    "Prisma octagonal" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Prisma de base irregular" => ["Área" => true, "Perímetro"=>true,"Volumen"=> true],
    "Prisma pentagonal truncado" => ["Área" =>true,"Perímetro"=>true,"Volumen" =>true],
    "Cuboide" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Cilindro truncado" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Esfera" => ["Área" => true, "Perímetro" => false, "Volumen" => true],
    "Tetraedro truncado" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Octaedro" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Prisma triangular truncado" => ["Área" =>true,"Perímetro"=>true,"Volumen"=> true],
    "Pentaedro" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Hiperboloide de una hoja" => ["Área" => true,"Perímetro"=>false,"Volumen" =>true],
    "Paraboloide elíptico" => ["Área" => true, "Perímetro" => false, "Volumen" =>true],
    "Prisma de base triangular truncado" => ["Área" => true, "Perímetro" => true, "Volumen" =>true],
    "Cuboide truncado" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
    "Poliedro regular" => ["Área" => true, "Perímetro" => true, "Volumen" => true],
];

foreach ($figuras as $figura => $datos) {
    echo "Figura: " . $figura . "<br>";
    echo "Área: " . ($datos["Área"] ? "Sí" : "No");
    echo "Perímetro: " . ($datos["Perímetro"] ? "Sí" : "No");
    echo "Volumen: " . ($datos["Volumen"] ? "Sí" : "No");
}

?> 

</body>
</html>
