import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ShowroomDetailsPageComponent } from './showroom-details-page.component';

describe('ShowroomDetailsPageComponent', () => {
  let component: ShowroomDetailsPageComponent;
  let fixture: ComponentFixture<ShowroomDetailsPageComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ShowroomDetailsPageComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ShowroomDetailsPageComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
