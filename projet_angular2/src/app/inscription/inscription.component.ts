import { Component, OnInit } from '@angular/core';
import { FormsModule }  from '@angular/forms';
import { FormGroup, FormBuilder, Validators } from '@angular/forms';

import { ComCreaEventService } from '../com-crea-event.service';

@Component({
  selector: 'app-inscription',
  templateUrl: './inscription.component.html',
  styleUrls: ['./inscription.component.css']
})
export class InscriptionComponent implements OnInit {

  constructor(public comCreaEventService:ComCreaEventService) {

   }
   userName:any;
   userMail:any;
   Password:any;
   ConfirmPassword:any;

  ngOnInit() {

  }
register() {
/* recuperation des données de l'utilisateur */
this.comCreaEventService.UserMails.push(this. userName);
this.comCreaEventService.UserNames.push(this.userMail);
this.comCreaEventService.UserPasswords.push(this.Password);
console.log(this.comCreaEventService.UserMails);



}

}
