<?php
// Include the necessary files
include_once "models/model.php";

class MvcController {

    public function enlacesPaginasController() {
        // Lista de páginas válidas
        $paginas = ["Inicio", "Nosotros", "Servicios", "Contactanos", "Login"];
        // Obtener la acción solicitada
        if (isset($_GET["action"]) && in_array($_GET["action"], $paginas)) {
            $enlacesController = $_GET["action"];
        } else {
            $enlacesController = "Inicio";
        }
        // Obtener la ruta de la vista desde el modelo
        $respuesta = EnlacesPaguinas::enlacesPaginasModel($enlacesController);
        // Incluir la vista correspondiente
        include $respuesta;
    }
}
?>