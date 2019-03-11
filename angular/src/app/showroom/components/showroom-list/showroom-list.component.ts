import { Component, OnInit } from '@angular/core';
import { GtimportService } from '../../../core/services/gtimport.service';
import { Showroom } from '../../../core/models/showroom';

@Component({
  selector: 'app-showroom-list',
  templateUrl: './showroom-list.component.html',
  styleUrls: ['./showroom-list.component.scss']
})
export class ShowroomListComponent implements OnInit {
  public showroom: Array<Showroom>;

  constructor(private _gtimportService: GtimportService) { }

  ngOnInit() {
    this.getShowroom();
  }

  getShowroom() {
    this._gtimportService.getShowroom().subscribe(
      data => {
        this.showroom = data;
      },
      err => console.log(err),
      () => console.log('Projects loaded!')
    )
  }

}
