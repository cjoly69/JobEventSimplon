import { Injectable } from '@angular/core';
import { Subject }    from 'rxjs/Subject';
import {Observable} from 'rxjs/Observable';
import { CreateEventComponent } from './create-event/create-event.component';

@Injectable()
export class ComCreaEventService {

  constructor() { }

  companys:any;
  eventInfos:any;
  UserNames:any;
  UserMails:any;
  UserPasswords: any;


}
