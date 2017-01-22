import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import {NgbDateStruct} from '@ng-bootstrap/ng-bootstrap';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';
@Component({
  selector: 'app-ngbd-datepicker-customday',
  templateUrl: './ngbd-datepicker-customday.component.html',
  styleUrls: ['./ngbd-datepicker-customday.component.css']

})
export class NgbdDatepickerCustomdayComponent implements OnInit {

  constructor() { }
  @Output() evenement:  EventEmitter<any> = new EventEmitter();
  ngOnInit() {
  }
  model: NgbDateStruct;


    isWeekend(date: NgbDateStruct) {
      const d = new Date(date.year, date.month - 1, date.day);
      return d.getDay() === 0 || d.getDay() === 6;
    }

    isDisabled(date: NgbDateStruct, current: {month: number}) {
      return date.month !== current.month;
    }

    eventChoice(date:NgbDateStruct){
      this. evenement.emit(this.model);
      console.log(this.model);
    }
  }
