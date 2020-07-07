@extends('layouts.main')
@section('container')

  <div class="row">
    <div class="col-12 col-md-12">
      <h1>Messages</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-3">
      <div class="message-box">Your message goes here!<a href="#">Find more</a><div class="icon"><i class="material-icons">library_add</i></div></div>
    </div>
    <div class="col-12 col-md-3">
      <div class="message-box success">Your message goes here!<a href="#">Find more</a><div class="icon"><i class="material-icons">library_add</i></div></div>
    </div>
    <div class="col-12 col-md-3">
      <div class="message-box warning">Your message goes here!<a href="#">Find more</a><div class="icon"><i class="material-icons">library_add</i></div></div>
    </div>
    <div class="col-12 col-md-3">
      <div class="message-box error">Your message goes here!<a href="#">Find more</a><div class="icon"><i class="material-icons">library_add</i></div></div>
    </div>
  </div>


  <div class="row">
    <div class="col col-12">
      <h1>Sliders</h1>
      <div class="slider">
        <div><img src="images/test-black.jpg"></div>
        <div><img src="images/test-transparent.png"></div>
        <div><img src="images/test-black.jpg"></div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col col-12">
      <h1>Buttons & Links</h1>
      <button class="button button-icon button-primary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Primary with Icon</button>
      <button class="button button-primary" type="button">Primary</button>
      <button class="button button-icon button-secondary" type="button"><span class="icon"><i class="material-icons">library_add</i></span>Secondary with Icon</button>
      <button class="button button-secondary" type="button">Secondary</button>
      <a href="#" class="button button-primary button-link"><i class="material-icons">keyboard_arrow_right</i>Link</a>
      <a href="#" class="button button-secondary button-link"><i class="material-icons">library_add</i>Link new tab</a>
    </div>
  </div>
  <div class="row">
    <div class="col col-12">
      <h1>Form fields</h1>
      <label class="form-input">Input text
        <input type="text" placeholder="Test content">
      </label>
      <label class="form-input">Input text
        <input type="password">
      </label>
      <label class="form-input">Input text
        <input type="number">
      </label>
      <label class="form-input">Input text
        <input type="date">
      </label>
      <label class="form-input">Input text
        <select>
          <option selected>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
        </select>
      </label>
    </div>
  </div>
  <div class="row">
    <div class="col col-12">
      <h1>Checkboxes & Radio buttons</h1>
      <label class="form-switch">Checkbox 1
        <input type="checkbox" id="checkbox1" style="display: none;">
        <label for="checkbox1" class="checkmark">
          <svg width="18px" height="18px" viewBox="0 0 18 18">
            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
            <polyline points="1 9 7 14 15 4"></polyline>
          </svg>
        </label>
      </label>
      <label class="form-switch">Checkbox 2
        <input type="checkbox" id="checkbox2" style="display: none;" checked>
        <label for="checkbox2" class="checkmark">
          <svg width="18px" height="18px" viewBox="0 0 18 18">
            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
            <polyline points="1 9 7 14 15 4"></polyline>
          </svg>
        </label>
      </label>
      <label class="form-switch">Radio Button 1
        <input name="radio" type="radio" id="radio1" style="display: none;">
        <label for="radio1" class="checkmark">
          <svg width="18px" height="18px" viewBox="0 0 18 18">
            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
            <polyline points="1 9 7 14 15 4"></polyline>
          </svg>
        </label>
      </label>
      <label class="form-switch">Radio Button 2
        <input name="radio" type="radio" id="radio2" style="display: none;" checked>
        <label for="radio2" class="checkmark">
          <svg width="18px" height="18px" viewBox="0 0 18 18">
            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
            <polyline points="1 9 7 14 15 4"></polyline>
          </svg>
        </label>
      </label>
    </div>
  </div>

  @endsection
