@extends("layout")
@section("Isi")
<section style="width: 80%;">
    @if ($total < 1)
    <p style="color: rgb(99, 98, 98);text-align: center;width: 100%;margin-top: 30px;text-align: center;">There is no data....</p>
    <div class="row justify-content-center">
        <a type="button" class="btn btn-primary" style="width: 15%;margin-top: 5px;" href="/patient/daftar">Register Patient</a>
    </div>
    @else
    <h2 style="text-align: center;">List Patient</h2>
    <div>
        <a type="button" class="btn btn-primary" style="width: 15%;margin-top: 5px;margin-bottom: 5px;" href="/patient/daftar">Register Patient</a>
        <table class="table table-dark table-hover">
            <thead>
                <th scope="row">#</th>
                <td colspan="">Vaccine</td>
                <td colspan="">Name</td>
                <td colspan="">NIK</td>
                <td colspan="">Alamat</td>
                <td colspan="">No. HP</td>
                <td colspan="">Action</td>
            </thead>
            <tbody>
                @foreach ($patient as $items)
                <tr>
                    <th scope="row">{{$loop -> iteration}}</th>
                    <td colspan="">{{$items -> vaccine}}</td>
                    <td colspan="">{{$items -> name}}</td>
                    <td colspan="">{{$items -> nik}}</td>
                    <td colspan="">{{$items -> alamat}}</td>
                    <td colspan="">{{$items -> no_hp}}</td>
                    <td class="">
                        <form method="post" action="/patient/{{$items->id}}" class="">
                        <a href="/patient/{{$items->id}}/edit" class="btn btn-warning">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</section>
@endsection