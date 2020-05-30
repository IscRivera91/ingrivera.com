<?php

class html
{
    private string $pagina_actual = "";

    public function __construct()
    {
        if(isset($_GET['pagina'])){
            $this->pagina_actual = $_GET['pagina'];
        }
    }

    public function menu_padre(string $nombre, string $icon, array $hijos)
    {   
        $open_menu = '';
        $activo = "";
        $html_hijos = '';
        foreach ($hijos as $hijo) {
            if ($this->pagina_actual == $hijo['pagina']){
                $open_menu = 'menu-open';
                $activo = 'active';
            }
            $html_hijos .= $this->menu_hijo($hijo['titulo'],$hijo['pagina'],$hijo['icon']);
        }
        $html_menu_padre = "";
        $html_menu_padre .= "<li class='nav-item has-treeview $open_menu'>";
        $html_menu_padre .=     "<a href='#' class='nav-link $activo'>";
        $html_menu_padre .=         "<i class='nav-icon $icon'></i>";
        $html_menu_padre .=         "<p>";
        $html_menu_padre .=             strtoupper($nombre);
        $html_menu_padre .=             "<i class='right fas fa-angle-left'></i>";
        $html_menu_padre .=         "</p>";
        $html_menu_padre .=     "</a>";
        $html_menu_padre .=     "<ul class='nav nav-treeview'>";
        $html_menu_padre .=         $html_hijos;
        $html_menu_padre .=     "</ul>";
        $html_menu_padre .= "</li>";
        return $html_menu_padre;
    }

    public function menu_hijo(string $titulo, string $pagina, string $icon)
    {
        $activo = "";
        if($this->pagina_actual == $pagina){
            $activo = 'active';
        }
        $html_menu_hijo = "";
        $html_menu_hijo .= "<li class='nav-item'>";
        $html_menu_hijo .=  "<a href='".RUTA_PROYECTO."$pagina' class='nav-link $activo'>";
        $html_menu_hijo .=      "<i class='$icon nav-icon'></i>";
        $html_menu_hijo .=      "<p>";
        $html_menu_hijo .=          strtoupper($titulo);
        $html_menu_hijo .=      "</p>";
        $html_menu_hijo .=  "</a>";
        $html_menu_hijo .= "</li>";
        return $html_menu_hijo;
    }

}