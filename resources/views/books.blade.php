@extends('layouts.main')

@section(section: 'content')

<div class="container my-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Voto</th>
                <th scope="col">Isbn</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <th>{{$book->id}}</th>
                <td>{{$book->title}}</td>
                <td>{{$book->vote}}</td>
                <td>{{$book->isbn}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection