@extends('layout.master')

@section('title', 'Professores Cadastrados')

@section('content')
    @extends('layout.navbar')   
    <div class="container">
        <h1 class="text-center mt-1">Professores cadastrados</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userData as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
