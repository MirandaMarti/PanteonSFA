<?php 

require_once "conexion.php";

class ModeloFormularios{

	/*=============================================
	Registro login
	=============================================*/

	static public function mdlRegistroLogin($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre, email, password) VALUES(:nombre, :email, :password)");

		$stmt -> bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
		$stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
		$stmt -> bindParam(":password", $datos["password"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	Seleccionar registros login
	=============================================*/

	static public function mdlSeleccionarRegistros($tabla, $item, $valor){


			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;

	}

	/*=============================================
	Registro clientes contado
	=============================================*/

	static public function mdlRegistroClientesContado($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(numerocat, tipoadq, nombrec, direccionc, telefonoc, correoc) VALUES(:numerocat, :tipoadq, :nombrec, :direccionc, :telefonoc, :correoc)");

		$stmt -> bindParam(":numerocat", $datos["numerocat"], PDO::PARAM_STR);
		$stmt -> bindParam(":tipoadq", $datos["tipoadq"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombrec", $datos["nombrec"], PDO::PARAM_STR);
		$stmt -> bindParam(":direccionc", $datos["direccionc"], PDO::PARAM_STR);
		$stmt -> bindParam(":telefonoc", $datos["telefonoc"], PDO::PARAM_STR);
		$stmt -> bindParam(":correoc", $datos["correoc"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	Registro clientes parcialidades
	=============================================*/

	static function mdlRegistroClientesParcialidades($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(numerocat, tipoadq, nombrec, direccionc, telefonoc, correoc, nombrea, direcciona, telefonoa, correoa) VALUES(:numerocat, :tipoadq, :nombrec, :direccionc, :telefonoc, :correoc, :nombrea, :direcciona, :telefonoa, :correoa)");

		$stmt -> bindParam(":numerocat", $datos["numerocat"], PDO::PARAM_STR);
		$stmt -> bindParam(":tipoadq", $datos["tipoadq"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombrec", $datos["nombrec"], PDO::PARAM_STR);
		$stmt -> bindParam(":direccionc", $datos["direccionc"], PDO::PARAM_STR);
		$stmt -> bindParam(":telefonoc", $datos["telefonoc"], PDO::PARAM_STR);
		$stmt -> bindParam(":correoc", $datos["correoc"], PDO::PARAM_STR);
		$stmt -> bindParam(":nombrea", $datos["nombrea"], PDO::PARAM_STR);
		$stmt -> bindParam(":direcciona", $datos["direcciona"], PDO::PARAM_STR);
		$stmt -> bindParam(":telefonoa", $datos["telefonoa"], PDO::PARAM_STR);
		$stmt -> bindParam(":correoa", $datos["correoa"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	Seleccionar clientes contado
	=============================================*/

	static public function mdlSeleccionarClientesContado($tablacontado, $item, $valor){


			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tablacontado WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> close();

			$stmt = null;

	}	


	/*=============================================
	Seleccionar clientes parcialidades
	=============================================*/

	static public function mdlSeleccionarClientesParcialidades($tablaparcialidades, $item, $valor){


			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tablaparcialidades WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> close();

			$stmt = null;

	}

	/*=============================================
	Seleccionar registros intentos
	=============================================*/

	static public function mdlSeleccionarRegistrosIntentos($tabla, $correo, $correoform){


			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $correo = :$correo");

			$stmt -> bindParam(":".$correo, $correoform, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();

			$stmt = null;

	}

	/*=============================================
	Actualizar los intentos fallidos
	=============================================*/

	static public function mdlActualizarIntentosFallidos($tabla, $intentos, $item, $valor){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos_fallidos = :intentos_fallidos WHERE $item = :$item");

		$stmt->bindParam(":intentos_fallidos", $intentos, PDO::PARAM_INT);
		$stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);

		if($stmt->execute()){

			return "ok";

		}else{

			print_r(Conexion::conectar()->errorInfo());

		}

		$stmt -> close();

		$stmt = null;


	}


}

