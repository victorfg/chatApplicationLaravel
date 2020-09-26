@extends('layouts.app')
@extends('layouts.menu')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="col-md-8">
                {!! Form::open(['url' => url('profile/modify')]) !!}
                    @include('profile.form')
                {!! Form::close() !!}
            </div>
            @if($modified??false)
                <label style="color: forestgreen;">¡El usuario ha sido modificado correctamente!</label>
            @endif
        </div>
    </div>
</div>
@endsection