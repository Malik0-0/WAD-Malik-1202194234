@extends("layout")
@section("Isi")
<h2 style="margin-bottom: 30px">List Vaccine</h2>
<div class="row">
    @foreach ($vaccines as $items)
    <div class="card" style="width: 18rem;margin-right: 15px">
        <img src="/{{$items -> image}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$items -> name}}</h5>
            <p class="card-text">{{$items -> description}}</p>
            <a href="/patient/create/{{$items -> id}}" class="btn btn-primary">Vaccine Now</a>
        </div>
    </div>
    @endforeach
</div>
@endsection