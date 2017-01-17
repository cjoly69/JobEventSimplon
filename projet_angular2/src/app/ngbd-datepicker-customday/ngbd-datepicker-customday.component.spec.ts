/* tslint:disable:no-unused-variable */
import { async, ComponentFixture, TestBed } from '@angular/core/testing';
import { By } from '@angular/platform-browser';
import { DebugElement } from '@angular/core';

import { NgbdDatepickerCustomdayComponent } from './ngbd-datepicker-customday.component';

describe('NgbdDatepickerCustomdayComponent', () => {
  let component: NgbdDatepickerCustomdayComponent;
  let fixture: ComponentFixture<NgbdDatepickerCustomdayComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ NgbdDatepickerCustomdayComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(NgbdDatepickerCustomdayComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
