@extends('layouts/app')
@section('content')
<main class="w-full flex flex-col items-center gap-y-8 mt-4">
    <h3 class="font-medium leading-tight text-3xl mt-0 mb-2 text-blue-600">View Upcoming Shifts</h3>
    @include('partials._add-shift-btn')
    @include('partials._shift-card')
</main>
@endsection