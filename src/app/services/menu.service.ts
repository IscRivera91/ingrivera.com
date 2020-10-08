import { Injectable } from '@angular/core';

@Injectable({
  providedIn: 'root'
})
// { path: 'proyecto-argus', component: ArgusComponent},
// { path: 'proyecto-califica', component: CalificaComponent},
// { path: 'estudios', component: CalificaComponent},
// { path: 'experiencia.laboral', component: CalificaComponent},
export class MenuService {
  public menu:MenuItem[] = [];

  constructor() {
    
    let proyectos:MenuItem = this.generaMenuItem('far fa-folder-open','Proyectos');
    proyectos.SubMenuItems.push({link:'proyecto-argus',texto:'Argus'});
    proyectos.SubMenuItems.push({link:'proyecto-califica',texto:'Califica'});

    let personal:MenuItem = this.generaMenuItem('fas fa-user-tie','Personal');
    personal.SubMenuItems.push({link:'estudios',texto:'Estudios'});
    personal.SubMenuItems.push({link:'experiencia-laboral',texto:'Exp Laboral'});
    
    this.guardaMenu(proyectos);
    this.guardaMenu(personal);

  }

  obtener ():MenuItem[] {
    return this.menu;
  }

  generaMenuItem (icono:string, texto:string, SubMenuItems:SubMenuItem[] = []):MenuItem {
    return {icono:icono,texto:texto,SubMenuItems:SubMenuItems}
  }

  guardaMenu(MenuItem:MenuItem):void 
  {
    this.menu.push(MenuItem);
  }

}

export interface MenuItem {
    icono:string;
    texto:string;
    SubMenuItems:SubMenuItem[];
}

export interface SubMenuItem {
  texto:string;
  link:string;
}
