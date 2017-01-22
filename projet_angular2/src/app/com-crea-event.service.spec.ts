/* tslint:disable:no-unused-variable */

import { TestBed, async, inject } from '@angular/core/testing';
import { ComCreaEventService } from './com-crea-event.service';

describe('ComCreaEventService', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [ComCreaEventService]
    });
  });

  it('should ...', inject([ComCreaEventService], (service: ComCreaEventService) => {
    expect(service).toBeTruthy();
  }));
});
