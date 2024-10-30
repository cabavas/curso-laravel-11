@extends("admin.layouts.app")

@section("content")
@include('admin.users.partials.breadcrumb')
<div class="py-6">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray">Novo Usuário</h2>
</div>

    <form action="{{ route("users.store") }}" method="POST">
        @include("admin.users.partials.form")
    </form>
@endsection
