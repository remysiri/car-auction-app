import { Component, OnInit } from '@angular/core';
import { NmdService } from '../../../core/services/nmd.service';
import { Post } from '../../../core/models/post';
import { environment } from '../../../../environments/environment';

@Component({
  selector: 'app-posts-list',
  templateUrl: './posts-list.component.html',
  styleUrls: ['./posts-list.component.scss']
})
export class PostsListComponent implements OnInit {  
  public posts: Array<Post>;

  constructor(private _nmdService: NmdService) { }

  ngOnInit() {
    this.getPosts();
  }

  getPosts() {
    this._nmdService.getPosts().subscribe(
      data => {
        this.posts = data;
      },
      err => console.log(err),
      () => console.log('Het is gedaan')
    )
  }

}
