@extends('layouts/app')
@section('content')
<h3 class="mt-0 mb-2 text-3xl font-medium leading-tight text-center text-blue-600">View Upcoming Shifts</h3>
<main class="grid w-full grid-cols-1 mt-4 md:grid-cols-2 place-items-center gap-y-8">
    @foreach ($shifts as $shift)
    @include('partials._shift-card', ['shift' => $shift, 'isManager' => $isManager])
    @endforeach
    @if($isManager)
        @include('partials._add-shift-btn')
    @endif
</main>
@endsection