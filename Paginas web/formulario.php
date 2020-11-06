<?php
    <form action="accion.php" method="post">
    <p>Su nombre: <input type="text" name="nombre" /></p>
    <p>Su edad: <input type="text" name="edad" /></p>
    <p><input type="submit" /></p>
    </form>
    echo html($_POST['nombre']);
    echo (int)$_POST['edad'];
    
    $db = new PDO('mysql:host=localhost;dbname=lineadecodigo;charset=utf8mb4','usuario', 'password');
    
    function GetName(){
        $sentencia = $this->db->prepare("SELECT * FROM name");
        $sentencia-> execute();
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    function GetEdad($id_edad){
        $sentencia = $this->db->prepare("SELECT * FROM name WHERE id_edad=?");
        $sentencia-> execute(array($id_edad));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    function InsertName($nombre_input, $origen_input){
        $sentencia = $this->db->prepare("INSERT INTO marcas (nombre, origen ) VALUES (?,?)");
        $sentencia->execute(array($nombre_input, $origen_input));
    }
?>