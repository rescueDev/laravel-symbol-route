@extends('layouts.main-layout')
@section('content')

    @foreach ($pagamenti as $pagamento)
        @php
        if($loop->odd) {
        $class = "green";
        }
        else {
        $class = "red";
        }
        @endphp

        <h4 class="{{ $class }}"> {{ $pagamento['id'] }} - {{ $pagamento['status'] }} - {{ $pagamento['price'] }} $ -
            {{ $pagamento['created_at'] }}
        </h4>

    @endforeach

@endsection
