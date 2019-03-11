import { Injectable } from '@angular/core';
import { AngularFirestore, AngularFirestoreCollection } from 'angularfire2/firestore';

import { Post } from '../models/post';

const FIREBASE_SETTINGS = {
  database: {
    path : {
      posts: 'posts'
    }
  }
}

@Injectable()
export class FirebaseService {

  private _postsCollections: AngularFirestoreCollection<Post> = null; 

  constructor(private readonly _afs: AngularFirestore) { 
    this._postsCollections = _afs.collection<Post>(FIREBASE_SETTINGS.database.path.posts);
  }

}
