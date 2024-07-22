@extends('layouts.app')
@section('content')
<form method="post">
    <fieldset>
      <legend>login</legend>
      <label for="lan">what is your lang ?</label>
      <select name="langauge" id="lan">
          <option value="arabic">ar</option>
          <option value="english">en</option>
          <option value="france">fr</option>
          <option value="rusha">ru</option>
  
      </select>
      <br>
      <label for="txt" >country</label>
      <input list="country" name="cnt">
      <datalist id="country">
      <option value="syria">
      <option value="egypt">
      <option value="uae">

  </datalist>
  <br>
      <label for="txt" >user name</label>
      <input type="text" id="txt" placeholder="user name"  name="user" required>
      <br>
      <label for="email" >email</label>
      <input type="email"id="email" placeholder="email" name="email" required>
      <br>
      <div>
          <label for="pass">password</label>
          <input type="password"id="pass" placeholder="password" name="password" required>

      </div>
      <div><label for="t">tel</label>
          <input type="tel" id="t" placeholder="your phone" name="tel" required>

      </div>
      <input type="submit" value="تسجيل الدخول">
      <input type="reset">
      <div>
@endsection