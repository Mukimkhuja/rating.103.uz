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
                            <div class="text-lg-center font-italic font-weight-bolder">
                                <p>Фаолият баҳосини аниқлаш учун киритилиши лозим бўлган маълумотлар:</p>
                            </div>

                            <div class="pre-scrollable">
                                <ul type="1" class="list-group-horizontal ">
                                    <li>
                                        <div class="form-group">
                                            <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                            <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                            <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                            <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                            <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                            <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                            <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                        </div>

                                    </li>
                                    <li>
                                        <div class="form-group">
                                            <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                            <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                        </div>

                                    </li>
                                </ul>
                                    <div class="form-group">
                                        <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                        <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                    </div>
                                <div class="form-group">
                                    <label for="nfabc" class="form-control-range">Nf(ABC) – Таҳлил даврида хизматда бўлган махсус автомобиллар сони</label>
                                    <input name="nfabc" id="nfabc" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfbc" class="form-control-range">Nf(BC) – Таҳлил даврида хизматда бўлган Реанимобил (HUNDAY) типидаги автомобиллар сони</label>
                                    <input name="nfbc" id="nfbc" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nabc" class="form-control-range">Na(B+C) - Таҳлил даврида хизматда бўлган  мобил+планшетлар сони</label>
                                    <input name="nabc" id="nabc" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfgps" class="form-control-range">Nf(GPS) - Таҳлил даврида бор бўлган GPS*трекерлар сони </label>
                                    <input name="nfgps" id="nfgps" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfvr" class="form-control-range">Nf(vr)-банд врач ставкалар сони</label>
                                    <input name="nfvr" id="nfvr" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npvr" class="form-control-range">Np(vr)- штат нормативи бўйича врач ставкалари сони</label>
                                    <input name="npvr" id="npvr" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nfpara" class="form-control-range">Nf(para)-банд парамедик ставкалари сони</label>
                                    <input name="nfpara" id="nfpara" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="nppara" class="form-control-range">Np(para)- штат нормативи бўйича парамедик ставкалари сони</label>
                                    <input name="nppara" id="nppara" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                                <div class="form-group">
                                    <label for="npipl" class="form-control-range">N(pipl) - баҳоланаётган ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                    <input name="npipl" id="npipl" type="number" class="form-control-sm" placeholder="Enter the number!!!">
                                </div>
                            </div>






                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
