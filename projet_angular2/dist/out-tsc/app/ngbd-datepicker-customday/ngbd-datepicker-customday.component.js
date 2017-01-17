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
var NgbdDatepickerCustomdayComponent = (function () {
    function NgbdDatepickerCustomdayComponent() {
    }
    NgbdDatepickerCustomdayComponent.prototype.ngOnInit = function () {
    };
    NgbdDatepickerCustomdayComponent.prototype.isWeekend = function (date) {
        var d = new Date(date.year, date.month - 1, date.day);
        return d.getDay() === 0 || d.getDay() === 6;
    };
    NgbdDatepickerCustomdayComponent.prototype.isDisabled = function (date, current) {
        return date.month !== current.month;
    };
    return NgbdDatepickerCustomdayComponent;
}());
NgbdDatepickerCustomdayComponent = __decorate([
    Component({
        selector: 'app-ngbd-datepicker-customday',
        templateUrl: './ngbd-datepicker-customday.component.html',
        styleUrls: ['./ngbd-datepicker-customday.component.css']
    }),
    __metadata("design:paramtypes", [])
], NgbdDatepickerCustomdayComponent);
export { NgbdDatepickerCustomdayComponent };
//# sourceMappingURL=../../../../src/app/ngbd-datepicker-customday/ngbd-datepicker-customday.component.js.map