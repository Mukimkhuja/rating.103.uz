@extends('layouts.app')
@section('app_title')
    Фаолиятни баҳолаш
@endsection

@section('content')
    <div class="container-md">
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
                        Фаолият баҳоси
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
