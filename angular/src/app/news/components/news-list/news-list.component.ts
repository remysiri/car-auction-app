import { Component, OnInit } from '@angular/core';
import { GtimportService } from '../../../core/services/gtimport.service';
import { Blog } from '../../../core/models/blog';

@Component({
  selector: 'app-news-list',
  templateUrl: './news-list.component.html',
  styleUrls: ['./news-list.component.scss']
})
export class NewsListComponent implements OnInit {
  public blog: Array<Blog>;

  constructor(private _gtimportService: GtimportService) { }

  ngOnInit() {
    this.getBlogs();
  }

  getBlogs() {
    this._gtimportService.getBlogs().subscribe(
      data => {
        this.blog = data;
      },
      err => console.log(err),
      () => console.log('Projects loaded!')
    )
  }

}
