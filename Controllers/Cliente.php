<?php
class Cliente extends Controllers
{
    public function __construct()
    {
        parent::__construct();
    }

    public function cliente($idcliente){
        echo "Hola desde cliente con id: ".$idcliente;
    }
    public function registro(){

        try{
            if($_SERVER["REQUEST_METHOD"] === "POST"){


                $_POST = json_decode(file_get_contents("php://input"), true);
                
              
                 $response = [
                    "status" => true,
                     "msg" => "Datos guardados con exito",
                     "nombre"=> "hola". " ". $_POST["nombres"]
                 
                ];

                

              
                $code = "200";
           jsonResponse($response, $code);

            }else{
               
                $response = [
                    "status" => false,
                     "msg" => "Datos guardados con exito",

                ];

                $code = "400";
           jsonResponse($response, $code);

            }

        
        }catch(Exception $e){

            echo "Error en el proceso:" .$e->getMessage(); 
        }
        


}
}


