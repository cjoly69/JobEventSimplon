import { Component } from '@angular/core';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';


import { ComCreaEventService } from './com-crea-event.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})


export class AppComponent {

constructor(public comCreaEventService: ComCreaEventService) {
this.comCreaEventService.companys = [] ;
this.comCreaEventService.eventInfos = [];
this.comCreaEventService.UserNames = [];
this.comCreaEventService.UserPasswords = [];
this.comCreaEventService.UserMails = [];
}

test() {
  console.log('ok');

  }


}
