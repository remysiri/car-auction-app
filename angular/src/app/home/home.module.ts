import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HomePageComponent } from './pages/home-page/home-page.component';
import { SelectedComponent } from './components/selected/selected.component';
import { PopularComponent } from './components/popular/popular.component';
import { NewsComponent } from './components/news/news.component';

import { AuctionsModule } from '../auctions/auctions.module';

@NgModule({
  imports: [
    CommonModule,
    AuctionsModule,
  ],
  declarations: [
    HomePageComponent,
    SelectedComponent,
    PopularComponent,
    NewsComponent,
  ],
  exports: [
    HomePageComponent
  ]
})
export class HomeModule { }
