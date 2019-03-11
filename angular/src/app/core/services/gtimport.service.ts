import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Auctions } from '../../core/models/auctions';
import { Showroom } from '../../core/models/showroom';
import { Blog } from '../../core/models/blog';
import { environment } from '../../../environments/environment';

@Injectable()
export class GtimportService {
  private _apiEndPointAuction = `${environment.gtimportAPI.url}${environment.gtimportAPI.endPoints.auctions}`;
  private _apiEndPointShowroom = `${environment.gtimportAPI.url}${environment.gtimportAPI.endPoints.showroom}`;
  private _apiEndPointBlog = `${environment.gtimportAPI.url}${environment.gtimportAPI.endPoints.blog}`;

  constructor(private _httpClient: HttpClient) { }

  getAuctions() {
    return this._httpClient.get<Array<Auctions>>(`${this._apiEndPointAuction}`);
  }

  getAuctionsById(id: String) {
    return this._httpClient.get<Auctions>(`${this._apiEndPointAuction}${id}`);
  }

  getShowroom() {
    return this._httpClient.get<Array<Showroom>>(`${this._apiEndPointShowroom}`);
  }

  getShowroomById(id: String) {
    return this._httpClient.get<Showroom>(`${this._apiEndPointShowroom}${id}`);
  }

  getBlogs() {
    return this._httpClient.get<Array<Blog>>(`${this._apiEndPointBlog}`);
  }

  getBlogsById(id: String) {
    return this._httpClient.get<Blog>(`${this._apiEndPointBlog}${id}`);
  }
}
