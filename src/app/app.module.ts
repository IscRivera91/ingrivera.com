import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HeaderComponent } from './components/resume/header/header.component';
import { IntroComponent } from './components/resume/intro/intro.component';
import { BodyComponent } from './components/resume/body/body.component';
import { FooterComponent } from './components/resume/footer/footer.component';
import { ProyectosComponent } from './components/resume/body/proyectos/proyectos.component';
import { ExperienciaComponent } from './components/resume/body/experiencia/experiencia.component';
import { HabilidadesComponent } from './components/resume/body/habilidades/habilidades.component';
import { EducacionComponent } from './components/resume/body/educacion/educacion.component';
import { IdiomasComponent } from './components/resume/body/idiomas/idiomas.component';
import { InteresesComponent } from './components/resume/body/intereses/intereses.component';

@NgModule({
  declarations: [
    AppComponent,
    HeaderComponent,
    IntroComponent,
    BodyComponent,
    FooterComponent,
    ProyectosComponent,
    ExperienciaComponent,
    HabilidadesComponent,
    EducacionComponent,
    IdiomasComponent,
    InteresesComponent
  ],
  imports: [
    BrowserModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
