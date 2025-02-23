<?php


require('conexion.php');

class serverSoap extends Conexion 
{

    public function saludar($name) 
    {
        return 'Hola ' . $name . '!';
    }

    public function operacion($num1, $num2) 
    {
        return $num1 + $num2;
    }
    
    public function analisis($num1, $num2, $operador)
    {
        if (!in_array($operador, ['+', '-', '*', '/', '%'])) {
            return "Operador inválido";
        }

        return eval("return $num1 $operador $num2;");
        
    }
    
}

$options = array('uri'=>'http://localhost/webservices/appwebservices/');
$server = new SoapServer(NULL, $options);
$server->setClass('serverSoap');
$server->handle();

?>
