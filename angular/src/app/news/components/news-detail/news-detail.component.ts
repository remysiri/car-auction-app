import { Component, OnInit } from '@angular/core';
import { GtimportService } from '../../../core/services/gtimport.service';
import { Blog } from '../../../core/models/blog';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-news-detail',
  templateUrl: './news-detail.component.html',
  styleUrls: ['./news-detail.component.scss']
})
export class NewsDetailComponent implements OnInit {
  public blog: Blog;

  constructor(private _route: ActivatedRoute,
  private _gtimportsService: GtimportService) { }

  ngOnInit() {
    const id = this._route.snapshot.params['id'];
    this.getBlogById(id);
  }

  getBlogById(id: String) {
    this._gtimportsService.getBlogsById(id).subscribe(
      data => {
        this.blog = data;
        console.log(data);
      },
      err => console.log(err),
      () => console.log('Projects loaded!')
    )
  }
}
