@extends("layout")
@section("Isi")
<section style="width: 75%;">
    @if ($total==0)
    <p style="color: rgb(99, 98, 98);text-align: center;width: 100%;margin-top: 30px;text-align: center;">There is no data....</p>
    <div class="row justify-content-center">
        <a type="button" class="btn btn-primary" style="width: 10%;margin-top: 5px;" href="/vaccine/create">Add Vaccine</a>
    </div>
    @else
    <h2 style="text-align: center;">List Vaccine</h2>
    <div>
        <a type="button" class="btn btn-primary" style="width: 10%;margin-top: 5px;margin-bottom: 5px;" href="/vaccine/create">Add Vaccine</a>
        <table class="table table-dark table-hover">
            <thead>
                <th scope="row">#</th>
                <td colspan="">Name</td>
                <td colspan="">Price</td>
                <td colspan="">Action</td>
            </thead>
            <tbody>
                @foreach ($vaccines as $items)
                <tr>
                    <th scope="row">{{$loop -> iteration}}</th>
                    <td colspan="">{{$items -> name}}</td>
                    <td colspan="">{{$items -> price}}</td>
                    <td class="d-flex">
                        <form method="post" action="/vaccine/{{$items->id}}" class="">
                        <a href="/vaccine/{{$items->id}}/edit" class="btn btn-warning">Edit</a>
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