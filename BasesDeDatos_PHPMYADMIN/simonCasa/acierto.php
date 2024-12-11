<?php
    session_start();
    require_once "pintar-circulos.php";
    require_once "login.php";
    // Conexión a la base de datos
    $conn = new mysqli($hn, $un, $pw, $db, 3306); 
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Verificar si hay sesión iniciada
    if (!isset($_SESSION['usuario'])) {
        header("Location: index.php");
        exit();
    }

    // Recuperar datos de sesión
    $usuario = $_SESSION["usuario"];
    $solucion = $_SESSION["solucion"] ?? [];
   



    // Obtener código de usuario
    $queryUsuario = "SELECT Codigo FROM usuarios WHERE Nombre = '$usuario'";
    $result = $conn->query($queryUsuario);

    if($result && $result->num_rows>0){
        $row = $result->fetch_assoc();
        $codigoUsuario = $row['Codigo'];
    }else{
        echo "ERROR: Usuario no esta en la Basde de Datos";
        exit();
    }

    // Insertar acierto en la base de datos
    $acierto = 1;
    $queryMax = "SELECT MAX(codjugada) AS max_jugada FROM jugadas";
    $resultMax = $conn->query($queryMax);
    $codigoJugada = ($resultMax && $resultMax->num_rows > 0) ? $resultMax-> fetch_assoc()['max_jugada']+1 :1;

    // Insertar el registro
    $stmt = $conn->prepare("INSERT INTO jugadas (codjugada, codigousu, acierto) VALUES (?, ?, ?)");
    $stmt->bind_param("iii", $codigoJugada, $codigoUsuario, $acierto);

    if ($stmt->execute()) {
        echo "<p>Registro de acierto guardado exitosamente en la base de datos.</p>";
    } else {
        echo "<p>Error al guardar el registro: " . $stmt->error . "</p>";
    }

    //Mostrar datos en pantalla
    echo "<h1>¡Felicidades, $usuario!</h1>";
    echo "<h2>Combinación acertada:</h2>";

    pintar_circulos($solucion[0],$solucion[1],$solucion[2],$solucion[3]);

    $stmt->close();
    $conn->close();
?>

