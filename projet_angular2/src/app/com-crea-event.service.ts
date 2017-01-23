import { Injectable } from '@angular/core';
import { Subject }    from 'rxjs/Subject';
import {Observable} from 'rxjs/Observable';
import { CreateEventComponent } from './create-event/create-event.component';
import {HttpserviceService} from './httpservice.service';
/* ce service sera dans les composants de creation ainsi quen dans app.component, il sert a se passer des variables( pour l'instant enregistrer les données dans un tableau)*/
@Injectable()
export class ComCreaEventService {

  constructor(public httpserviceService: HttpserviceService) { }

  companys:any;
  eventInfos:any;
  UserNames:any;
  UserMails:any;
  UserPasswords: any;



}
