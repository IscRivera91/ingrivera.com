<?php
class menus {
    private html $html;
    private string $menu = '';

    public function __construct($pagina)
    {
        $this->html = new html($pagina);
        $this->menu_proyectos();
        $this->menu_servicios();
    }

    private function menu_proyectos():void
    {
        $hijos = [
            [
                'titulo' => 'Argus',
                'pagina' => 'proyecto-argus',
                'icon' => 'fab fa-microsoft'
            ]
        ];
        $this->menu .= $this->html->menu_padre('proyectos','fas fa-project-diagram',$hijos);
    }

    private function menu_servicios():void
    {
        $hijos = [
            [
                'titulo' => 'Cambio HDD a SSD',
                'pagina' => 'hdd-a-ssd',
                'icon' => 'fas fa-hdd'
            ]
        ];
        $this->menu .= $this->html->menu_padre('servicios','fab fa-servicestack',$hijos);
    }
    
    public function crear_menu():string
    {
        return $this->menu;
    }


}
