import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ContactPagesComponent } from './contact-pages.component';

describe('ContactPagesComponent', () => {
  let component: ContactPagesComponent;
  let fixture: ComponentFixture<ContactPagesComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ContactPagesComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ContactPagesComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
