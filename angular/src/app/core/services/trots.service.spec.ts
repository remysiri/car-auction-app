import { TestBed, inject } from '@angular/core/testing';

import { TrotsService } from './trots.service';

describe('TrotsService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [TrotsService]
    });
  });

  it('should be created', inject([TrotsService], (service: TrotsService) => {
    expect(service).toBeTruthy();
  }));
});
