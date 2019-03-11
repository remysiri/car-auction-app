import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Post } from '../../core/models/post';
import { environment } from '../../../environments/environment';

@Injectable()
export class NmdService {
  private _apiEndPoint = `${environment.nmdAPIV1.url}${environment.nmdAPIV1.endPoints.posts}`;

  constructor(private _httpClient: HttpClient) { }

  getPosts() {
    return this._httpClient.get<Array<Post>>(`${this._apiEndPoint}`);
  }
}
