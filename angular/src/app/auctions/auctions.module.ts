import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { CoreModule } from '../core/core.module';
import { RouterModule } from '@angular/router';

import { AuctionPageComponent } from './pages/auction-page/auction-page.component';
import { AuctionsListComponent } from './components/auctions-list/auctions-list.component';
import { AuctionDetailComponent } from './pages/auction-detail/auction-detail.component';
import { AuctionsDetailComponent } from './components/auctions-detail/auctions-detail.component';

@NgModule({
  imports: [
    CommonModule,
    CoreModule,
    RouterModule,
  ],
  declarations: [
    AuctionPageComponent,
    AuctionsListComponent,
    AuctionDetailComponent,
    AuctionsDetailComponent
  ],
  exports: [
    AuctionPageComponent,
    AuctionDetailComponent,
    AuctionsListComponent,
  ],
})
export class AuctionsModule { }
