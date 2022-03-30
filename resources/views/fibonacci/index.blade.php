@extends('fibonacci.layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Fitur Deret Fibonacci </h2>
            </div>
            
        </div>
    </div>
    @foreach ($numbers as $number)
        {{ $number }}
    @endforeach
        
    </table>


@endsection
