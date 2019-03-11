import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { GtimportService } from '../../../core/services/gtimport.service';
import { Auctions } from '../../../core/models/auctions';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-auctions-detail',
  templateUrl: './auctions-detail.component.html',
  styleUrls: ['./auctions-detail.component.scss']
})
export class AuctionsDetailComponent implements OnInit {
  public auctions: Auctions;

  constructor(private _route: ActivatedRoute,
  private _gtimportsService: GtimportService) { }

  ngOnInit() {
    const id = this._route.snapshot.params['id'];
    this.getAuctionById(id);
  }

  getAuctionById(id: String) {
    this._gtimportsService.getAuctionsById(id).subscribe(
      data => {
        this.auctions = data;
        console.log(data);
      },
      err => console.log(err),
      () => console.log('Projects loaded!')
    )
  }

}
