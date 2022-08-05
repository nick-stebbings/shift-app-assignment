@extends('layouts/app')
@section('content')

    <main class="flex flex-col items-center w-full mt-4 gap-y-8">
        @unless ($employee_id == '' || is_null($employee_id))
        @include('partials._hero-section')
        @else
        <h3 class="mt-0 mb-2 text-3xl font-medium leading-tight text-blue-600">Link your Account</h3>
        @include('partials._assign-employee')
        @endunless
    </main>

@endsection