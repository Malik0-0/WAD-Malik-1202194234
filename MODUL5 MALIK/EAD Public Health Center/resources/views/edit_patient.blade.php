@extends("layout")
@section("Isi")
<form action="/patient/{{$data_sebelumnya->id}}" enctype="multipart/form-data" method="POST" class="col-10">
    @csrf
    @method("put")
    <h2 style="text-align: center;">Register {{$vaksin->name}} Patient</h2>
    <fieldset class="d-flex flex-column">
        <div class="">
            <label>Vaccine ID:</label>
            <input class="form-control" type="text" id="v_id" name="v_id" readonly value="{{$data_sebelumnya -> vaccine_id}}">
        </div>
        <div class="">
            <label>Patient Name:</label>
            <input class="form-control" type="name" id="p_name" name="p_name" value="{{$data_sebelumnya -> name}}">
        </div>
        <div class="">
            <label>NIK:</label>
            <input class="form-control" type="number" id="NIK" name="NIK" value="{{$data_sebelumnya -> nik}}">
        </div>
        <div class="">
            <label>Alamat:</label>
            <input class="form-control" type="text" id="alamat" name="alamat" value="{{$data_sebelumnya -> alamat}}">
        </div>
        <div class="">
            <label>KTP:</label>
            <input class="form-control" type="file" id="KTP" name="KTP">
        </div>
        <div class="">
            <label>No. HP:</label>
            <input class="form-control" type="number" id="hp" name="hp" value="{{$data_sebelumnya -> no_hp}}">
        </div>
        <button type="submit" class="btn btn-primary mt-2 col-1">Update</button>
    </fieldset>
</form>
@endsection