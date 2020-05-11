@extends('layouts.app')
@section('app_title')
    Фаолиятни баҳолаш
@endsection

@section('content')
    <div class="container-md">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> <?php $un = Auth::user()->name; ?> </div>

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
                            @include('layouts.messages')
                            <div class="form-group">
                                <form method="post" action="{{route('jrat_post_submit')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="npipl" class="form-control-range">Баҳоланаётган ТТЁ хизмати таркибий
                                            бўлинмасига бириктирилган ҳудуддаги аҳоли сони</label>
                                        <input name="npipl" id="npipl" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfabc" class="form-control-range">Таҳлил даврида хизматда бўлган
                                            махсус автомобиллар сони</label>
                                        <input name="nfabc" id="nfabc" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfbc" class="form-control-range">Таҳлил даврида хизматда бўлган
                                            Реанимобил (HUNDAY) типидаги автомобиллар сони</label>
                                        <input name="nfbc" id="nfbc" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nab_c" class="form-control-range">Таҳлил даврида хизматда бўлган
                                            мобил+планшетлар сони</label>
                                        <input name="nab_c" id="nab_c" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfgps" class="form-control-range">Таҳлил даврида бор бўлган
                                            GPS*трекерлар сони </label>
                                        <input name="nfgps" id="nfgps" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfvr" class="form-control-range">Банд врач ставкалар сони</label>
                                        <input name="nfvr" id="nfvr" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="npvr" class="form-control-range">Штат нормативи бўйича врач
                                            ставкалари сони</label>
                                        <input name="npvr" id="npvr" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfpara" class="form-control-range">Банд парамедик ставкалари
                                            сони</label>
                                        <input name="nfpara" id="nfpara" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nppara" class="form-control-range">Штат нормативи бўйича парамедик
                                            ставкалари сони</label>
                                        <input name="nppara" id="nppara" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nffeld" class="form-control-range">Банд фельдшер ставкалари
                                            сони</label>
                                        <input name="nffeld" id="nffeld" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="npfeld" class="form-control-range">Штат нормативи бўйича фельдшер
                                            ставкалари сони</label>
                                        <input name="npfeld" id="npfeld" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stv5_7" class="form-control-range">Стажи 5 йилга тенг ёки ошиқ,
                                            лекин 7 йилдан кам врачлар сони </label>
                                        <input name="stv5_7" id="stv5_7" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stv5_7_2" class="form-control-range">Стажи 5 йилга тенг ёки ошиқ,
                                            лекин 7 йилдан кам врачлар ичида 2-тоифалилар сони </label>
                                        <input name="stv5_7_2" id="stv5_7_2" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>

                                    <div class="form-group">
                                        <label for="stv7_10" class="form-control-range">Стажи 7 йилга тенг ёки ошиқ,
                                            лекин 10 йилдан кам врачлар сони </label>
                                        <input name="stv7_10" id="stv7_10" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stv7_10_1" class="form-control-range">Стажи 7 йилга тенг ёки ошиқ,
                                            лекин 10 йилдан кам врачлар ичида 1-тоифалилар сони</label>
                                        <input name="stv7_10_1" id="stv7_10_1" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stv10" class="form-control-range">Стажи 10 йилга тенг ёки ошиқ
                                            бўлган врачлар сони</label>
                                        <input name="stv10" id="stv10" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stv10_pr" class="form-control-range">Стажи 10йилга тенг ёки ошиқ
                                            врачлар ичида олий-тоифалилар сони</label>
                                        <input name="stv10_pr" id="stv10_pr" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stf5_7" class="form-control-range">Стажи 5 йилга тенг ёки ошиқ,
                                            лекин 7 йилдан кам фельдшерлар сони </label>
                                        <input name="stf5_7" id="stf5_7" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stf5_7_2" class="form-control-range">Стажи 5 йилга тенг ёки ошиқ,
                                            лекин 7 йилдан кам фельдшерлар ичида 2-тоифалилар сони</label>
                                        <input name="stf5_7_2" id="stf5_7_2" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stf7_10" class="form-control-range">Стажи 7 йилга тенг ёки ошиқ,
                                            лекин 10 йилдан кам фельдшерлар сони</label>
                                        <input name="stf7_10" id="stf7_10" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stf7_10_1" class="form-control-range">Стажи 7 йилга тенг ёки ошиқ,
                                            лекин 10 йилдан кам фельдшерлар ичида 1-тоифалилар сони </label>
                                        <input name="stf7_10_1" id="stf7_10_1" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>

                                    <div class="form-group">
                                        <label for="stf10" class="form-control-range">Стажи 10 йилга тенг ёки ошиқ
                                            бўлган фельдшерлар сони </label>
                                        <input name="stf10" id="stf10" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="stf10_pr" class="form-control-range">Стажи 10йилга тенг ёки ошиқ
                                            фелдшерлар ичида олий-тоифалилар сони </label>
                                        <input name="stf10_pr" id="stf10_pr" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="t11" class="form-control-range">Тез тиббий ёрдам машинаси жўнатилган
                                            ўртача вақт (t11 минут).
                                            <i>(шошилинч чақирувлар бўйича меъёрдан четланганлар ҳисобидан) меъёр:
                                                t1n1=3 минут</i></label>
                                        <!-- (шошилинч чақирувлар бўйича меъёрдан четланганлар ҳисобидан) меъёр: t1n1=3 минут -->
                                        <input name="t11" id="t11" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="t12" class="form-control-range">Тез тиббий ёрдам машинаси жўнатилган
                                            ўртача вақт (t12минут).
                                            <i>(Зудликни талаб этувчи ва кечиктирилмайдиган чақирувлар бўйича меъёрдан
                                                четланганлар ҳисобидан)</i></label>
                                        <!--  (Зудликни талаб этувчи ва кечиктирилмайдиган чақирувлар бўйича меъёрдан четланганлар ҳисобидан) -->
                                        <input name="t12" id="t12" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="t21" class="form-control-range"> Беморнинг олдига етиб келишга
                                            кетган ўртача вақт (t21)
                                            <i>(шошилинч чақирувлар бўйича меъёрдан четланганлар ҳисобидан)</i></label>
                                        <input name="t21" id="t21" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="t22" class="form-control-range">Беморнинг олдига етиб келишга кетган
                                            ўртача вақт (t22)
                                            <i>(Зудликни талаб этувчи ва кечиктирилмайдиган чақирувлар бўйича меъёрдан
                                                четланганлар ҳисобидан)</i></label>
                                        <input name="t22" id="t22" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfv" class="form-control-range">Тез тиббий ёрдам бригадасига бир
                                            суткада тушган ўртача юклама Nfv</label>
                                        <input name="nfv" id="nfv" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nv" class="form-control-range">Баҳолаш давридаги барча чақирувлар
                                            сони</label>
                                        <input name="nv" id="nv" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfav" class="form-control-range">Асоссиз чақирувлар сони <i>(кечиккан
                                                чақирувлар)</i></label>
                                        <input name="nfav" id="nfav" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfl0" class="form-control-range">Тез тиббий ёрдам келгунга қадар
                                            ўлимлар сони
                                            <i>(тез тиббий ёрдам хизмати чақирувни қабул қилгандан кейин содир
                                                бўлганлари)</i></label>
                                        <input name="nfl0" id="nfl0" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfl1" class="form-control-range">Тез тиббий ёрдам бригадаси
                                            борлигида ўлимлар сони </label>
                                        <input name="nfl1" id="nfl1" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nfpv" class="form-control-range">Такрорий чақирувлар
                                            <i>(Тез тиббий ёрдам бригадаси айби билан)
                                                (госпитализация рад этилган ҳоллар ва ТТЁ стационарга томонидан қайта
                                                олиб келинганларни ҳисобга олган ҳолда)</i>
                                        </label>
                                        <input name="nfpv" id="nfpv" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="nop" class="form-control-range">Чақирувлар ҳақида амбулатор
                                            поликлиника муассасаларини хабардор этишлар сони</label>
                                        <input name="nop" id="nop" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <label for="npr" class="form-control-range">Даволаш профилактика
                                            муассасаларининг
                                            даъволари ва фуқаролар шикоятлари
                                            <i>(Диагнозларнинг мос келмаслик ҳолатлари, йўлланмадаги диагнозлар ичида
                                                хатолиги исботланганлари, шошилинч госпитализациянинг ўз вақтидалиги
                                                омиллари ҳисобга олинган ҳолда)</i></label>
                                        <input name="npr" id="npr" type="text" class="form-control-sm"
                                               placeholder="Enter the number!!!">
                                    </div>
                                    <div class="form-group">
                                        <input name="user" id="user" type="hidden" class="form-control-sm"
                                               value="<?php echo $un ?>">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit" value="submit" class="btn-success">
                                            Маълумотларни сақлаш
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

