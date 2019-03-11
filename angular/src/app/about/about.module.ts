import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AboutPageComponent } from './pages/about-page/about-page.component';
import { AboutMapComponent } from './components/about-map/about-map.component';

@NgModule({
  imports: [
    CommonModule
  ],
  declarations: [
    AboutPageComponent,
    AboutMapComponent
  ],
  exports: [
    AboutPageComponent,
    AboutMapComponent,
  ]
})
export class AboutModule { }
