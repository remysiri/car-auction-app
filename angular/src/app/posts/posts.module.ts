import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HttpClientModule } from '@angular/common/http';

import { CoreModule } from '../core/core.module';
import { PostsPageComponent } from './pages/posts-page/posts-page.component';
import { PostsListComponent } from './components/posts-list/posts-list.component';

@NgModule({
  imports: [
    CommonModule,
    CoreModule,
    HttpClientModule
  ],
  declarations: [PostsPageComponent, PostsListComponent],
  exports: [
    PostsPageComponent, 
    PostsListComponent,
  ]
})
export class PostsModule { }
