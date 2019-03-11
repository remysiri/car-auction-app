import { TestBed, inject } from '@angular/core/testing';

import { NmdService } from './nmd.service';

describe('NmdService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [NmdService]
    });
  });

  it('should be created', inject([NmdService], (service: NmdService) => {
    expect(service).toBeTruthy();
  }));
});
