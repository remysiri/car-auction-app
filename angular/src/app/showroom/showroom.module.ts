import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CoreModule } from '../core/core.module';
import { RouterModule } from '@angular/router';
import { ShowroomPageComponent } from './pages/showroom-page/showroom-page.component';
import { ShowroomListComponent } from './components/showroom-list/showroom-list.component';
import { ShowroomDetailsPageComponent } from './pages/showroom-details-page/showroom-details-page.component';
import { ShowroomDetailComponent } from './components/showroom-detail/showroom-detail.component';

@NgModule({
  imports: [
    CommonModule,
    CoreModule,
    RouterModule,
  ],
  declarations: [
    ShowroomPageComponent,
    ShowroomListComponent,
    ShowroomDetailsPageComponent,
    ShowroomDetailComponent,
  ],
  exports: [
    ShowroomPageComponent,
    ShowroomDetailsPageComponent,
  ]
})
export class ShowroomModule { }
