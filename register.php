<!--

ATENCIÓN:

Ejecutar esta web por primera
vez para crear la base de datos
junto con sus tablas.

-->

<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
    <!-- FORMULARIO HTML -->
    <form class ="form" method="post">
    	<h1>Registrarse</h1>
        <input type="text" id="name" name="name" placeholder="Peter Parker"><br>
    	<input type="email" id="email" name="email" placeholder="email@exameple.com" 
        title="La dirección de correo electrónico debe de tener un formato válido. 
        Ej: example@domain.com"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br>
    	<input type="text" id="user" name="user" placeholder="username"><br>
		<select name="id_localidad">
                    <option value='1'>Aguadulce</option>
                    <option value='2'>Alanís</option>
                    <option value='3'>Albaida del Aljarafe</option>
                    <option value='4'>Alcalá de Guadaíra</option>
                    <option value='5'>Alcalá del Río</option>
                    <option value='6'>Alcolea del Río</option>
                    <option value='7'>La Algaba</option>
                    <option value='8'>Algámitas</option>
                    <option value='9'>Almadén de la Plata</option>
                    <option value='10'>Almensilla</option>
                    <option value='11'>Arahal</option>
                    <option value='12'>Aznalcázar</option>
                    <option value='13'>Aznalcóllar</option>
                    <option value='14'>Badolatosa</option>
                    <option value='15'>Benacazón</option>
                    <option value='16'>Bollullos de la Mitación</option>
                    <option value='17'>Bormujos</option>
                    <option value='18'>Brenes</option>
                    <option value='19'>Burguillos</option>
                    <option value='20'>Las Cabezas de San Juan</option>
                    <option value='21'>Camas</option>
                    <option value='22'>La Campana</option>
                    <option value='23'>Cantillana</option>
                    <option value='24'>Cañada Rosal</option>
                    <option value='25'>Carmona</option>
                    <option value='26'>Carrión de los Céspedes</option>
                    <option value='27'>Casariche</option>
                    <option value='28'>Castilblanco de los Arroyos</option>
                    <option value='29'>Castilleja de Guzmán</option>
                    <option value='30'>Castilleja de la Cuesta</option>
                    <option value='31'>Castilleja del Campo</option>
                    <option value='32'>El Castillo de las Guardas</option>
                    <option value='33'>Cazalla de la Sierra</option>
                    <option value='34'>Constantina</option>
                    <option value='35'>Coria del Río</option>
                    <option value='36'>Coripe</option>
                    <option value='37'>El Coronil</option>
                    <option value='38'>Los Corrales</option>
                    <option value='39'>El Cuervo de Sevilla</option>
                    <option value='40'>Dos Hermanas</option>
                    <option value='41'>Écija</option>
                    <option value='42'>Espartinas</option>
                    <option value='43'>Estepa</option>
                    <option value='44'>Fuentes de Andalucía</option>
                    <option value='45'>El Garrobo</option>
                    <option value='46'>Gelves</option>
                    <option value='47'>Gerena</option>
                    <option value='48'>Gilena</option>
                    <option value='49'>Gines</option>
                    <option value='50'>Guadalcanal</option>
                    <option value='51'>Guillena</option>
                    <option value='52'>Herrera</option>
                    <option value='53'>Huévar del Aljarafe</option>
                    <option value='54'>Isla Mayor</option>
                    <option value='55'>Lantejuela</option>
                    <option value='56'>Lebrija</option>
                    <option value='57'>Lora de Estepa</option>
                    <option value='58'>Lora del Río</option>
                    <option value='59'>La Luisiana</option>
                    <option value='60'>El Madroño</option>
                    <option value='61'>Mairena del Alcor</option>
                    <option value='62'>Mairena del Aljarafe</option>
                    <option value='63'>Marchena</option>
                    <option value='64'>Marinaleda</option>
                    <option value='65'>Martín de la Jara</option>
                    <option value='66'>Los Molares</option>
                    <option value='67'>Montellano</option>
                    <option value='68'>Morón de la Frontera</option>
                    <option value='69'>Las Navas de la Concepción</option>
                    <option value='70'>Olivares</option>
                    <option value='71'>Osuna</option>
                    <option value='72'>Los Palacios y Villafranca</option>
                    <option value='73'>Palomares del Río</option>
                    <option value='74'>Paradas</option>
                    <option value='75'>Pedrera</option>
                    <option value='76'>El Pedroso</option>
                    <option value='77'>Peñaflor</option>
                    <option value='78'>Pilas</option>
                    <option value='79'>Pruna</option>
                    <option value='80'>La Puebla de Cazalla</option>
                    <option value='81'>La Puebla de los Infantes</option>
                    <option value='82'>La Puebla del Río</option>
                    <option value='83'>El Real de la Jara</option>
                    <option value='84'>La Rinconada</option>
                    <option value='85'>La Roda de Andalucía</option>
                    <option value='86'>El Ronquillo</option>
                    <option value='87'>El Rubio</option>
                    <option value='88'>Salteras</option>
                    <option value='89'>San Juan de Aznalfarache</option>
                    <option value='90'>San Nicolás del Puerto</option>
                    <option value='91'>Sanlúcar la Mayor</option>
                    <option value='92'>Santiponce</option>
                    <option value='93'>El Saucejo</option>
                    <option value='94'>Sevilla</option>
                    <option value='95'>Tocina-Los Rosales</option>
                    <option value='96'>Tomares</option>
                    <option value='97'>Umbrete</option>
                    <option value='98'>Utrera</option>
                    <option value='99'>Valencina de la Concepción</option>
                    <option value='100'>Villamanrique de la Condesa</option>
                    <option value='101'>Villanueva de San Juan</option>
                    <option value='102'>Villanueva del Ariscal</option>
                    <option value='103'>Villanueva del Río y Minas</option>
                    <option value='104'>Villaverde del Río</option>
                    <option value='105'>El Viso del Alcor</option>
                </select><br>
    	<input type="password" id="pass" name="pass" placeholder="password"><br>
    	<input type="submit" name="register">
    </form>

    <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>

    
        <?php 
        include("db_conn.php"); // Incluimos la conexion con la bbdd

        $conn = dbConn();

// Comprobamos la conexión
if ($conn->connect_error) {
    echo "<p>Conexion no realizada: ", $conn->connect_error,"</p>";
} else{
    
    if (isset($_POST['register'])) { // Comprueba que los campos(name, email, username, password) esten rellenos
        if (strlen($_POST['user']) >=1 && strlen($_POST['pass']) >=1 && strlen($_POST['name']) >=1 && strlen($_POST['email']) >=1 && isset($_POST['id_localidad'])) { 
            $user = trim($_POST['user']);
            $pass = trim($_POST['pass']);
            $email = trim($_POST['email']);
            $name = trim($_POST['name']);
			$id_localidad = $_POST['id_localidad'];

            // Comprobar si el usuario existe
            $orden = "SELECT COUNT(*) AS contar FROM touristmap.usuario WHERE username = '$user';";
            $resultado = $conn->query($orden);
            $columna = $resultado->fetch_assoc();
        
            // Si existe
            if ($columna['contar']>0) {
                echo "<p>Lo sentimos, el usuario ",$user, " ya existe</p>"; 
            } else{ // Si no existe, se inserta el nuevo usuario
                $hash = password_hash($pass, PASSWORD_DEFAULT);
                $orden = "INSERT INTO touristmap.usuario (username, password, email, nombre_apellidos, id_localidad) VALUES ('$user', '$hash', '$email', '$name', '$id_localidad');";
            
                if ($conn->query($orden)) {
                echo "<p>¡ENHORABUENA! Se ha completado el registro</p>";
                } else{
                    echo "<p>LO SENTIMOS, no se ha completado el registro</p>";
                }
            }
             
        } else{
            echo "<p>Rellena los campos para poder completar el registro</p>";
        }   
    }
}
?>
</body>
</html>