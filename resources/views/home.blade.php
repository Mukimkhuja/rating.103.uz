@extends('layouts.app')

@section('app_title')
    Авторизация
    @endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ассалому алайкум, <?php echo Auth::user()->name."! "; ?> </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Тизим икки турда маълумотларни қабул қилади, уларни киритиш учун қуйидаги <u>линклардан</u> бирини танланг:
                        <ol class="nav-link">
                            <li><a href="{{route('jobrating-page')}}">Фаолият баҳоси</a></li>
                            <li><a href="{{route('docrating-page')}}">Шифокор (фелдшер)лар баҳоси</a></li>
                        </ol>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

