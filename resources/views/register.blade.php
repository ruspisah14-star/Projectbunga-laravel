@extends('layout.master')
@section('title', 'Form')
@section('konten')

<form action="/welcome" method="POST">
    @csrf
<div class="mb-3">
<label for="exampleInputJudulBuku" class="form-label" name="first_name">First name </label>
<input type="text" class="form-control" id="exampleInputPassword1">
</div>

<div class="mb-3">
<label for="exampleInputJudulBuku" class="form-label" name="last_name">Last name </label>
<input type="text" class="form-control" id="exampleInputPassword1">
</div>

<label for="exampleInput" class="form-label" >Gender</label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jk" id="radioDefault1">
  <label class="form-check-label" for="radioDefault1">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jk" id="radioDefault2" checked>
  <label class="form-check-label" for="radioDefault2">
    Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="jk" id="radioDefault2" checked>
  <label class="form-check-label" for="radioDefault2">
    Other
  </label>
</div>
<br><br>

<label for="exampleInput" class="form-label" >Nationaly </label>
<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="indonesia">Indonesia</option>
  <option value="english">English</option>
</select>
<br><br>
<label for="exampleInput" class="form-label" >Language Spoken </label>
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="bahasa_indonesia">
    <label class="form-check-label" for="exampleCheck1">Bahasa Indonesia</label>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="english">
    <label class="form-check-label" for="exampleCheck1">English</label>
  </div>
<div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="other">
    <label class="form-check-label" for="exampleCheck1">Other</label>
  </div>
<br><br>
<label for="exampleInput" class="form-label" >Bio</label>
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="bio"></textarea>
  <label for="floatingTextarea2">Silahkan isi Biodata</label>
</div>
<br><br>
<button type="submit" class="btn btn-primary">Sign Up</button>
@endsection