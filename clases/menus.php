<?php
class menus {
    private html $html;
    private string $menu = '';

    public function __construct()
    {
        $this->html = new html();
        //$this->menu_proyectos();
        //$this->menu_servicios();
    }

    private function menu_proyectos():void
    {
        $hijos = [
            [
                'titulo' => 'califica',
                'pagina' => 'proyecto-califica',
                'icon' => 'fas fa-calculator'
            ]
        ];
        $this->menu .= $this->html->menu_padre('proyectos','fas fa-project-diagram',$hijos);
    }

    private function menu_servicios():void
    {
        $hijos = [
            [
                'titulo' => 'desarrollo web',
                'pagina' => 'desarrollo-web',
                'icon' => 'fab fa-codepen'
            ],
            [
                'titulo' => 'redes',
                'pagina' => 'configuracion-de-redes',
                'icon' => 'fas fa-network-wired'
            ]
        ];
        $this->menu .= $this->html->menu_padre('servicios','fab fa-servicestack',$hijos);
    }
    
    public function crear_menu():string
    {
        return $this->menu;
    }


}
