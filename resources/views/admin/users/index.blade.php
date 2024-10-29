@extends('admin.layouts.app')

@section('content')
<h1>Usuários</h1>

<a href="{{route('users.create')}}">Novo</a>

@if(session()->has('success'))
    {{session('success')}}
@endif

    <x-alert/>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>-</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{$users->links()}}
@endsection