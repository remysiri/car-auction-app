import { Component, OnInit } from '@angular/core';
import { GtimportService } from '../../../core/services/gtimport.service';
import { Auctions } from '../../../core/models/auctions';

@Component({
  selector: 'app-auctions-list',
  templateUrl: './auctions-list.component.html',
  styleUrls: ['./auctions-list.component.scss']
})
export class AuctionsListComponent implements OnInit {
  public auctions: Array<Auctions>;

  constructor(private _gtimportService: GtimportService) { }

  ngOnInit() {
    this.getAuctions();
  }

  getAuctions() {
    this._gtimportService.getAuctions().subscribe(
      data => {
        this.auctions = data;
      },
      err => console.log(err),
      () => console.log('Projects loaded!')
    )
  }

}
