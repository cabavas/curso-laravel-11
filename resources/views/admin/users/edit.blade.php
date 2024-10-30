@extends("admin.layouts.app")

@section("title", "Editar o Usuário")

@section("content")
    <h1>Editar o Usuário {{ $user->name }}</h1>
    @include('admin.users.partials.breadcrumb')
    <div class="py-6">
        <div class="font-semibold text-xl text-gray-800 dar:text-gray">
            Editar o Usuário {{ $user->name }}
        </div>
    </div>
    
    <form action="{{ route("users.update", $user->id) }}" method="POST">
        @method("put")
        @include("admin.users.partials.form")
    </form>
@endsection
