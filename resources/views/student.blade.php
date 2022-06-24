@extends('layouts.main')


@section('content')
    <h1>STUDENTI</h1>

    <h3>Studente estratto: {{ $my_student->name }} {{ $my_student->surname }} - ID {{ $my_student->id }}</h3>


    {{-- @dump($students) --}}

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cognome</th>
            <th scope="col">Matricola</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                 <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->surname }}</td>
                    <td>{{ $student->registration_number }}</td>
                </tr>
            @endforeach


        </tbody>
      </table>



@endsection

@section('title', 'Lista studenti')
