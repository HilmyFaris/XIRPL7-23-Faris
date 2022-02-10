@extends('layouts.main')

@section('container')
<div class="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form>
<div class="form-floating mb-3">
  <input type="nama" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Nama</label>
</div>
<div class="form-floating">
  <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Email</label>
</div>
 <div class="form-floating mb-3">
  <textarea class="form-control" placeholder="Tinggalkan pesan disini!" id="floatingTextarea2" style="height : 100px"></textarea>
  <label for="floatingTextarea2">Pesan</label>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
