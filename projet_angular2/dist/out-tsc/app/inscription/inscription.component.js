var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
import { Component } from '@angular/core';
import { ComCreaEventService } from '../com-crea-event.service';
var InscriptionComponent = (function () {
    function InscriptionComponent(comCreaEventService) {
        this.comCreaEventService = comCreaEventService;
    }
    InscriptionComponent.prototype.ngOnInit = function () {
    };
    InscriptionComponent.prototype.register = function () {
        this.comCreaEventService.UserMails.push(this.userName);
        this.comCreaEventService.UserNames.push(this.userMail);
        this.comCreaEventService.UserPasswords.push(this.Password);
        console.log(this.comCreaEventService.UserMails);
    };
    return InscriptionComponent;
}());
InscriptionComponent = __decorate([
    Component({
        selector: 'app-inscription',
        templateUrl: './inscription.component.html',
        styleUrls: ['./inscription.component.css']
    }),
    __metadata("design:paramtypes", [ComCreaEventService])
], InscriptionComponent);
export { InscriptionComponent };
//# sourceMappingURL=../../../../src/app/inscription/inscription.component.js.map