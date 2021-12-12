@extends("layout")
@section("Isi")
<form action="/vaccine/{{$data_sebelumnya->id}}" enctype="multipart/form-data" method="POST" class="col-10">
    @csrf
    @method("put")
    <h2 style="text-align: center;">Edit Vaccine</h2>
    <fieldset class="d-flex flex-column">
        <div class="">
            <label>Vaccine Name:</label>
            <input class="form-control" type="name" id="v_name" name="v_name" value="{{$data_sebelumnya->name}}">
        </div>
        <div class="">
            <label>Price:</label>
            <div class="input-group">
                <div class="input-group-text" id="btnGroupAddon">Rp.</div>
                <input type="text" class="form-control" id="price" name="price" value="{{$data_sebelumnya->price}}" aria-label="Input group example" aria-describedby="btnGroupAddon">
            </div>
        </div>
        <div class="">
            <label>Description:</label>
            <textarea class="form-control" id="desc" name="desc" rows="3">{{$data_sebelumnya->description}}</textarea>
        </div>
        <div class="">
            <label>Image:</label>
            <input class="form-control" type="file" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary mt-2 col-1">Update</button>
    </fieldset>
</form>
@endsection