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
comCreaEventService.variableTest = 1 ;
console.log(this. comCreaEventService.eventDetails);
}

test() {
  console.log('ok');
  console.log(this.comCreaEventService.eventDetails);
}


}
