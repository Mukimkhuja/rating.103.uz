@extends('layouts.app')
@section('app_title')
    Тиббиёт ходимларини баҳолаш
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <!-- <div class="card-header">Ассалому алайкум, <?php echo Auth::user()->name."! "; ?> </div> -->

                    <div class="card-body2">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            Тиббиёт ходимларини баҳолаш
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
