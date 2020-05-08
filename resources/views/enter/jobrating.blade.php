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
                        Фаолият баҳосини аниқлаш учун киритилиши лозим бўлган маълумотлар:

                            <div class="pre-scrollable">
                                <div class="form-group">
                                    <label for="npipl" >N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfabc" >Nf(ABC) – Таҳлил даврида хизматда бўлган махсус автомобиллар сони</label>
                                    <input name="nfabc" id="nfabc" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfbc" >Nf(BC) – Таҳлил даврида хизматда бўлган Реанимобил (HUNDAY) типидаги автомобиллар сони</label>
                                    <input name="nfbc" id="nfbc" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nabc" >Na(B+C) - Таҳлил даврида хизматда бўлган  мобил+планшетлар сони</label>
                                    <input name="nabc" id="nabc" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfgps" >Nf(GPS) - Таҳлил даврида бор бўлган GPS*трекерлар сони </label>
                                    <input name="nfgps" id="nfgps" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfvr" >Nf(vr)-банд врач ставкалар сони</label>
                                    <input name="nfvr" id="nfvr" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npvr" >Np(vr)- штат нормативи бўйича врач ставкалари сони</label>
                                    <input name="npvr" id="npvr" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfpara" >Nf(para)-банд парамедик ставкалари сони</label>
                                    <input name="nfpara" id="nfpara" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npipl" >N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npipl" >N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npipl" >N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npipl" >N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                            </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
