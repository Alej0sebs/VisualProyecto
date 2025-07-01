<?php
class MvcController {
    public function enlacesPaginaController() {
        // Lista de páginas válidas
        $paginas = ["Inicio", "Nosotros", "Servicios", "Contactanos", "Login"];
        // Si existe el parámetro action y es una página válida
        if (isset($_GET["action"]) && in_array($_GET["action"], $paginas)) {
            $pagina = $_GET["action"];
            $ruta = "Views/" . $pagina . ".php";
        } else {
            // Página por defecto
            $ruta = "Views/Inicio.php";
        }
        // Incluye la vista correspondiente
        include $ruta;
    }
}
?>