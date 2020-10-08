import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { IndexComponent } from './components/paginas/index/index.component';

import { ArgusComponent } from './components/paginas/argus/argus.component';
import { CalificaComponent } from './components/paginas/califica/califica.component';

import { EstudiosComponent } from './components/paginas/estudios/estudios.component';
import { ExperienciaLaboralComponent } from './components/paginas/experiencia-laboral/experiencia-laboral.component';



const routes: Routes = [
  { path: '', component: IndexComponent},
  { path: 'proyecto-argus', component: ArgusComponent},
  { path: 'proyecto-califica', component: CalificaComponent},
  { path: 'estudios', component: EstudiosComponent},
  { path: 'experiencia-laboral', component: ExperienciaLaboralComponent},
  { path: '**', pathMatch: 'full', redirectTo: ''}
];

@NgModule({
  imports: [RouterModule.forRoot(routes,{useHash: true})],
  exports: [RouterModule]
})
export class AppRoutingModule { }
