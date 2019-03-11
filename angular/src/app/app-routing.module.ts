import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router'; 

/*
Components as pages
*/
import { HomePageComponent } from './home/pages/home-page/home-page.component';
import { NotFoundPageComponent } from 
'./core/pages/not-found-page/not-found-page.component';
import { PostsPageComponent } from './posts/pages/posts-page/posts-page.component';
import { ShowroomPageComponent } from './showroom/pages/showroom-page/showroom-page.component';
import { ShowroomDetailsPageComponent } from './showroom/pages/showroom-details-page/showroom-details-page.component';
import { AuctionPageComponent } from './auctions/pages/auction-page/auction-page.component';
import { AuctionDetailComponent } from './auctions/pages/auction-detail/auction-detail.component';
import { AboutPageComponent } from './about/pages/about-page/about-page.component';
import { NewsPageComponent } from './news/pages/news-page/news-page.component';
import { NewsDetailPageComponent } from './news/pages/news-detail-page/news-detail-page.component';
import { ContactPagesComponent } from './contact/pages/contact-pages/contact-pages.component';
import { TermsConditionsPageComponent } from './core/pages/terms-conditions-page/terms-conditions-page.component';

const routes: Routes = [
  { path: '', redirectTo: '/home', pathMatch: 'full' },
  { path: 'home', component: HomePageComponent },
  { path: 'showroom', component: ShowroomPageComponent },
  { path: 'showroom/:id', component: ShowroomDetailsPageComponent },
  { path: 'auctions', component: AuctionPageComponent },
  { path: 'auctions/:id', component: AuctionDetailComponent },
  { path: 'about', component: AboutPageComponent },
  { path: 'news', component: NewsPageComponent },
  { path: 'news/:id', component: NewsDetailPageComponent },
  { path: 'contact', component: ContactPagesComponent },
  { path: 'posts', component: PostsPageComponent },
  { path: 'terms-and-conditions', component: TermsConditionsPageComponent },
  { path: '404', component: NotFoundPageComponent },
  { path: '**', redirectTo: '/404'},
];

@NgModule({
  imports: [
    RouterModule.forRoot(routes),
  ],
  declarations: [],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule { }
