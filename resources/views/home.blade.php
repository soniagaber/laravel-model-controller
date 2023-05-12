@extends('layouts/app')

@section('content')
<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">TITLE</th>
        <th scope="col">ORIGINAL TITLE</th>
        <th scope="col">NATIONALITY</th>
        <th scope="col">DATE</th>
        <th scope="col">VOTE</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)
        <tr>
            <td>{{$movie->title}}</td>
            <td>{{$movie->original_title}}</td>
            <td>{{$movie->nationality}}</td>
            <td>{{$movie->date}}</td>
            <td>{{$movie->vote}}</td>
        </tr>
            
        @endforeach
    </tbody>
  </table>
@endsection

