import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { AboutModule } from '../about/about.module';
import { ContactPagesComponent } from './pages/contact-pages/contact-pages.component';
import { ContactFormComponent } from './components/contact-form/contact-form.component';

@NgModule({
  imports: [
    CommonModule,
    AboutModule,
  ],
  declarations: [
    ContactPagesComponent,
    ContactFormComponent
  ],
  exports: [
    ContactPagesComponent,
  ],
})
export class ContactModule { }
