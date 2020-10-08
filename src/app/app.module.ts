import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

import { MenuService } from './services/menu.service';


import { NavbarMainComponent }             from './components/adminlte/navbar/navbar-main/navbar-main.component';
import { NavbarLeftLinksComponent }        from './components/adminlte/navbar/navbar-left-links/navbar-left-links.component';
import { NavbarSearchFormComponent }       from './components/adminlte/navbar/navbar-search-form/navbar-search-form.component';
import { NavbarRightLinksComponent }       from './components/adminlte/navbar/navbar-right-links/navbar-right-links.component';
import { SidebarMainComponent }            from './components/adminlte/sidebar/sidebar-main/sidebar-main.component';
import { SidebarBrandLogoComponent }       from './components/adminlte/sidebar/sidebar-brand-logo/sidebar-brand-logo.component';
import { SidebarMenuComponent }            from './components/adminlte/sidebar/sidebar-menu/sidebar-menu.component';
import { SidebarmenuMenuItemComponent }    from './components/adminlte/sidebar/sidebarmenu-menu-item/sidebarmenu-menu-item.component';
import { SidebarmenuSubmenuItemComponent } from './components/adminlte/sidebar/sidebarmenu-submenu-item/sidebarmenu-submenu-item.component';
import { SidebarmenuUserinfoComponent }    from './components/adminlte/sidebar/sidebarmenu-userinfo/sidebarmenu-userinfo.component';
import { FooterMainComponent }             from './components/adminlte/footer/footer-main/footer-main.component';
import { IndexComponent } from './components/paginas/index/index.component';
import { ArgusComponent } from './components/paginas/argus/argus.component';
import { CalificaComponent } from './components/paginas/califica/califica.component';
import { EstudiosComponent } from './components/paginas/estudios/estudios.component';
import { ExperienciaLaboralComponent } from './components/paginas/experiencia-laboral/experiencia-laboral.component';

@NgModule({
  declarations: [
    AppComponent,
    NavbarMainComponent,
    NavbarLeftLinksComponent,
    NavbarSearchFormComponent,
    NavbarRightLinksComponent,
    SidebarMainComponent,
    SidebarBrandLogoComponent,
    SidebarMenuComponent,
    SidebarmenuUserinfoComponent,
    SidebarmenuMenuItemComponent,
    SidebarmenuSubmenuItemComponent,
    FooterMainComponent,
    IndexComponent,
    ArgusComponent,
    CalificaComponent,
    EstudiosComponent,
    ExperienciaLaboralComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [
    MenuService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
