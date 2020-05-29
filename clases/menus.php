<?php
class menus {
    private html $html;
    public function __construct()
    {
        $this->html = new html();
    }
    
    public function crear_menu():string
    {
        $hijos = [
            [
                'titulo' => 'hijo ejemplo',
                'pagina' => 'ejemplo',
                'icon' => 'fas fa-baseball-ball'
            ]
        ];

        return $this->html->menu_padre('Padre Ejemplo','fab fa-apple',$hijos);

    }

}
