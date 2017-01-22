import { Component, OnInit, Input, Output } from '@angular/core';

@Component({
  selector: 'app-events',
  templateUrl: './events.component.html',
  styleUrls: ['./events.component.css']
})
export class EventsComponent implements OnInit {
  @Input() evenement = [];
  constructor() { }

  ngOnInit() {
  }

}
