import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { HomeComponent } from './components/home/home.component';
import { AboutComponent } from './components/about/about.component';
import { ContactComponent } from './components/contact/contact.component';
import { RouterModule, Routes, Router } from '@angular/router';

const rutas: Routes = [
  { path: 'inicio', component: HomeComponent },
  { path: 'nosotros', component: AboutComponent},
  { path: 'contacto', component: ContactComponent },
 { path: '',   redirectTo: '/inicio', pathMatch: 'full' },
];


@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    AboutComponent,
    ContactComponent,
    
  ],
  imports: [
    BrowserModule,
      RouterModule.forRoot(
        rutas,
        { enableTracing: true }

      )
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
