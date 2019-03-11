import { TestBed, inject } from '@angular/core/testing';

import { GtimportService } from './gtimport.service';

describe('GtimportService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [GtimportService]
    });
  });

  it('should be created', inject([GtimportService], (service: GtimportService) => {
    expect(service).toBeTruthy();
  }));
});
