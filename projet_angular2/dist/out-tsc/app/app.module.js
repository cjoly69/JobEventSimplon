var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { RouterModule } from '@angular/router';
import { ComCreaEventService } from './com-crea-event.service';
import { AppComponent } from './app.component';
import { InscriptionComponent } from './inscription/inscription.component';
import { CalendarComponent } from './calendar/calendar.component';
import { LoginComponent } from './login/login.component';
import { NgbdDatepickerCustomdayComponent } from './ngbd-datepicker-customday/ngbd-datepicker-customday.component';
import { EvenementsComponent } from './evenements/evenements.component';
import { EventsComponent } from './events/events.component';
import { CreateEventComponent } from './create-event/create-event.component';
import { HttpserviceService } from './httpservice.service';
var routingAppli = [{ path: 'inscription', component: InscriptionComponent },
    { path: 'login', component: LoginComponent },
    { path: 'event', component: EventsComponent },
    { path: 'create-event', component: CreateEventComponent },
    { path: '', redirectTo: 'login', pathMatch: 'full' }];
var AppModule = (function () {
    function AppModule() {
    }
    return AppModule;
}());
AppModule = __decorate([
    NgModule({
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
        providers: [ComCreaEventService, HttpserviceService],
        bootstrap: [AppComponent]
    }),
    __metadata("design:paramtypes", [])
], AppModule);
export { AppModule };
//# sourceMappingURL=../../../src/app/app.module.js.map