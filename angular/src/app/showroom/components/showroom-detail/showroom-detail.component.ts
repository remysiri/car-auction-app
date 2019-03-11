import { Component, OnInit } from '@angular/core';
import { Showroom } from '../../../core/models/showroom';
import { ActivatedRoute } from '@angular/router';
import { GtimportService } from '../../../core/services/gtimport.service';

@Component({
  selector: 'app-showroom-detail',
  templateUrl: './showroom-detail.component.html',
  styleUrls: ['./showroom-detail.component.scss']
})
export class ShowroomDetailComponent implements OnInit {
  public showroom: Showroom;

  constructor(private _route: ActivatedRoute,
  private _gtimportsService: GtimportService) { }

  ngOnInit() {
    const id = this._route.snapshot.params['id'];
    this.getShowroomById(id);
  }

  getShowroomById(id: String) {
    this._gtimportsService.getShowroomById(id).subscribe(
      data => {
        this.showroom = data;
        console.log(data);
      },
      err => console.log(err),
      () => console.log('Projects loaded!')
    )
  }

}
