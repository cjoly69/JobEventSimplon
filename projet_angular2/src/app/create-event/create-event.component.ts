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



  }
    isWeekend(date: NgbDateStruct) {
      const d = new Date(date.year, date.month - 1, date.day);

    }

    isDisabled(date: NgbDateStruct, current: {month: number}) {
      return date.month !== current.month;
    }

    creationEvent(){
    this. evenementDay = {year:this. model.year, month:this.model.month, day:this.model.day};
    var a = {day:this.evenementDay, nom:this.evenementName, description:this.evenementDescription};
    var b = {entreprise:this.evenementCreator};
    this. comCreaEventService.eventInfo.push(a);
    this.comCreaEventService.company.push(b);
    console.log(this.comCreaEventService.eventInfo);
    console.log(this.comCreaEventService.company);



      }
    }
