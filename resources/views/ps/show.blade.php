@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __("Page de parrainage") }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ Form::open(['route' => ['ps.update', $id], 'method' => 'PUT']) }}

                            <div class="form-group"><!-- IdNat is required -->
                                {{ Form::label('identifiant', 'Identifiant :', ['class' => 'control-label']) }}
                                {{ Form::text('identifiant', '', array('id'=>'ps-id', 'class'=>'form-control', 'required')) }}
                            </div>

                            <div class="form-group"><!-- Phone is required -->
                                {{ Form::label('telephone', 'Telephone :', array('class' => 'control-label')) }}
                                {{ Form::text('telephone', '', array('id'=>'username-id', 'class'=>'form-control', 'required')) }}
                            </div>

                            <div class="form-group"><!-- Email is required -->
                                {{ Form::label('email', 'E-Mail Address :', array('class' => 'control-label')) }}
                                {{ Form::text('email', '', array('id'=>'email-id', 'class'=>'form-control', 'required')) }}
                            </div>

                            <div class="col text-center">
                                {{ Form::submit('Submit', array('class' => 'btn btn-primary')) }}
                            </div>
                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
