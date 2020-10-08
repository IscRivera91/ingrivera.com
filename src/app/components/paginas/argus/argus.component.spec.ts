import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ArgusComponent } from './argus.component';

describe('ArgusComponent', () => {
  let component: ArgusComponent;
  let fixture: ComponentFixture<ArgusComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ArgusComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ArgusComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
