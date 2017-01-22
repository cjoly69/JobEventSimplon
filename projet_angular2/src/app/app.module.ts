import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { RouterModule, Routes } from '@angular/router';

import { ComCreaEventService } from './com-crea-event.service';
import { AppComponent } from './app.component';
import { InscriptionComponent } from './inscription/inscription.component';
import { CalendarComponent } from './calendar/calendar.component';
import { LoginComponent } from './login/login.component';
import { NgbdDatepickerCustomdayComponent } from './ngbd-datepicker-customday/ngbd-datepicker-customday.component';
import { EvenementsComponent } from './evenements/evenements.component';
import { EventsComponent } from './events/events.component';
import { CreateEventComponent } from './create-event/create-event.component';
const routingAppli : Routes = [{path:'inscription', component: InscriptionComponent},
                                {path: 'login', component: LoginComponent},
                                {path: 'event', component:EventsComponent},
                                {path: 'create-event', component: CreateEventComponent},
                                {path: '',   redirectTo: 'login', pathMatch: 'full'}]
@NgModule({
  declarations: [
    AppComponent,
    InscriptionComponent,
    CalendarComponent,
    LoginComponent,
    NgbdDatepickerCustomdayComponent,
    EvenementsComponent,
    EventsComponent,
    CreateEventComponent

  ],
  imports: [
    BrowserModule,
    FormsModule,
    HttpModule,
    NgbModule.forRoot(),
    RouterModule.forRoot(routingAppli)
  ],
  providers: [ComCreaEventService],
  bootstrap: [AppComponent]
})
export class AppModule { }
