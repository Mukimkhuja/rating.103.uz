@extends('layouts.app')

@section('app_title')
    Маълумотларни кўриш
    @endsection


@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <div class="card-header">Ассалому алайкум, <?php
                        $uname=Auth::user()->name;
                        if ($uname=='admin'){
                            echo 'жаноб Администратор';
                        }else{
                            echo $uname;
                        }


                    ?> </div>

                    <div class="card-body2">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Маълумотларни кўриш
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
