<?php

$conn = new mysqli("localhost", "root", "", "semana10");
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
} else {
    echo "<h2>tabla empleados </h2><br>";

    $sql = "SELECT id, nombre, apellido, dui, id_salario, id_sector FROM empleado";
    $result = $conn->query($sql);
    echo "<div id='em'>";
    if ($result->num_rows > 0) {
        // Si hay resultados, mostrarlos
       
        while($row = $result->fetch_assoc()) {
            echo "ID: " . $row["id"];
            echo "Nombre: " . $row["nombre"];
            echo "Apellido: " . $row["apellido"];
            echo "DUI: " . $row["dui"];
            echo "ID Salario: " . $row["id_salario"];
            echo "ID Sector: " . $row["id_sector"];
            echo "<br>";
        }
    } else {
        echo "No se encontraron resultados.";
    }

    echo "</div>";

    echo "<div>";
    echo "<h2>tabla id_salario</h2><br>";

$sql_salario = "SELECT id, horas_trabajadas, sueldo_horas, fecha_pago FROM id_salario";
$result_salario = $conn->query($sql_salario);

echo "<div id='id_salario'>";
if ($result_salario->num_rows > 0) {
    // Si hay resultados, mostrarlos
    while($row_salario = $result_salario->fetch_assoc()) {
        echo "ID: " . $row_salario["id"];
        echo "Horas trabajadas: " . $row_salario["horas_trabajadas"];
        echo "Sueldo por horas: " . $row_salario["sueldo_horas"];
        echo "Fecha de pago: " . $row_salario["fecha_pago"];
        echo "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
echo "</div>";
echo "<h2>tabla sector_de_trabajo</h2>";

$sql_sector = "SELECT id, id_empleado, ubicacion, descripcion, nombre_del_sector, id_Tipo_residuo FROM sector_de_trabajo";
$result_sector = $conn->query($sql_sector);

echo "<div id='sector_de_trabajo'>";
if ($result_sector->num_rows > 0) {
    // Si hay resultados, mostrarlos
    while($row_sector = $result_sector->fetch_assoc()) {
        echo "ID: " . $row_sector["id"];
        echo "ID Empleado: " . $row_sector["id_empleado"];
        echo "Ubicación: " . $row_sector["ubicacion"];
        echo "Descripción: " . $row_sector["descripcion"];
        echo "Nombre del Sector: " . $row_sector["nombre_del_sector"];
        echo "ID Tipo de Residuo: " . $row_sector["id_Tipo_residuo"];
        echo "<br>";
    }
} else {
    echo "No se encontraron resultados.";
}
echo "</div>";


}

$conn->close();
?>