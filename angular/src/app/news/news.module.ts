import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CoreModule } from '../core/core.module';
import { RouterModule } from '@angular/router';

import { NewsPageComponent } from './pages/news-page/news-page.component';
import { NewsListComponent } from './components/news-list/news-list.component';
import { NewsDetailComponent } from './components/news-detail/news-detail.component';
import { NewsDetailPageComponent } from './pages/news-detail-page/news-detail-page.component';


@NgModule({
  imports: [
    CommonModule,
    CoreModule,
    RouterModule,
  ],
  declarations: [
    NewsPageComponent,
    NewsListComponent,
    NewsDetailComponent,
    NewsDetailPageComponent
  ],
  exports: [
    NewsPageComponent,
    NewsDetailPageComponent,
  ]
})
export class NewsModule { }
