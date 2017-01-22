import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import {NgbDateStruct} from '@ng-bootstrap/ng-bootstrap';
import {NgbModule} from '@ng-bootstrap/ng-bootstrap';

import { ComCreaEventService } from '../com-crea-event.service';



@Component({
  selector: 'app-create-event',
  templateUrl: './create-event.component.html',
  styleUrls: ['./create-event.component.css'],


})
export class CreateEventComponent implements OnInit {
  @Output() creator:EventEmitter<any>=  new EventEmitter();
  evenementDay:any;
  evenementCreator:any;
  evenementName:any;
  evenementDescription: any;
  model: NgbDateStruct;
  eventTab = [];
  enterTab = [];



  ngOnInit() {
  }


  constructor(public comCreaEventService: ComCreaEventService) {
      comCreaEventService.variableTest == this. evenementDay ;


  }
    isWeekend(date: NgbDateStruct) {
      const d = new Date(date.year, date.month - 1, date.day);

    }

    isDisabled(date: NgbDateStruct, current: {month: number}) {
      return date.month !== current.month;
    }

    creationEvent(){

    this. evenementDay = this.model.day;
    var a = {day:this.evenementDay.toString(), nom:this.evenementName.toString(), description:this.evenementDescription.toString()};
    var b = {entreprise:this.evenementCreator.toString()};


    console.log(a);
    console.log(b);
    this. comCreaEventService.eventDetails = a.toString() + b.toString() ;



      }
    }
