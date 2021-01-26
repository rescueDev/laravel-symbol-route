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

    @php
    $name = \Request::url();
    //var_dump($name);

    if ($name == "http://localhost:8000/pagamentipending") {
    $rotta = 'pagamenti';
    }
    else if ($name == "http://localhost:8000/pagamenti") {
    $rotta = 'pagamentipending';
    }

    //var_dump($rotta);
    @endphp

    <a href="{{ route($rotta) }}">{{ $rotta }}</a>


@endsection
