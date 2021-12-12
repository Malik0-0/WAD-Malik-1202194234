@extends("layout")
@section("Isi")
<form action="/patient" enctype="multipart/form-data" method="POST" class="col-10">
    @csrf
    <h2 style="text-align: center;">Register Patient</h2>
    <fieldset class="d-flex flex-column">
        <div class="">
            <label>Vaccine ID:</label>
            <input class="form-control" type="text" id="v_id" name="v_id" readonly value="{{$vaccine -> id}}">
        </div>
        <div class="">
            <label>Patient Name:</label>
            <input class="form-control" type="name" id="p_name" name="p_name" value="">
        </div>
        <div class="">
            <label>NIK:</label>
            <input class="form-control" type="number" id="NIK" name="NIK" value="">
        </div>
        <div class="">
            <label>Alamat:</label>
            <input class="form-control" type="text" id="alamat" name="alamat" value="">
        </div>
        <div class="">
            <label>KTP:</label>
            <input class="form-control" type="file" id="KTP" name="KTP">
        </div>
        <div class="">
            <label>No. HP:</label>
            <input class="form-control" type="number" id="hp" name="hp" value="">
        </div>
        <button type="submit" class="btn btn-primary mt-2 col-1">Register</button>
    </fieldset>
</form>
@endsection