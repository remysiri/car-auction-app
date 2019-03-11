import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { HeaderComponent } from './components/header/header.component';
import { FooterComponent } from './components/footer/footer.component';
import { NotFoundPageComponent } from './pages/not-found-page/not-found-page.component';
import { NmdService } from './services/nmd.service';
import { TrotsService } from './services/trots.service';
import { FirebaseService } from './services/firebase.service';
import { GtimportService } from './services/gtimport.service';
import { NavigationComponent } from './components/navigation/navigation.component';
import { NotificationsComponent } from './components/notifications/notifications.component';
import { TermsConditionsPageComponent } from './pages/terms-conditions-page/terms-conditions-page.component';

@NgModule({
  imports: [
    CommonModule,
    RouterModule
  ],
  declarations: [
    HeaderComponent, 
    FooterComponent,
    NotFoundPageComponent,
    NavigationComponent,
    NotificationsComponent,
    TermsConditionsPageComponent
  ],
  exports: [
    FooterComponent,
    HeaderComponent,
    NavigationComponent,
    NotFoundPageComponent,
    NotificationsComponent,
    TermsConditionsPageComponent,
  ],
  providers: [NmdService, TrotsService, FirebaseService, GtimportService]
})
export class CoreModule { }
