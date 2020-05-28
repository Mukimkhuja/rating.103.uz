@extends('layouts.app')
@section('app_title')
    Тиббиёт ходимларини баҳолаш
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                <!-- <div class="card-header">Ассалому алайкум, <?php echo Auth::user()->name . "! "; ?> </div> -->
                    <div class="card-header"> <?php $un = Auth::user()->name; ?> </div>

                    <div class="card-body2">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="text-center">Тиббиёт ходимларини баҳолаш</div>
                        <div class="pre-scrollable">
                            @include('layouts.messages')
                            <div class="form-group">
                                <form method="post" action="{{route('drat_post_submit')}}">
                                    @csrf

                                    <div class="list-group-horizontal">
                                        1. Малака талабларига жавоб бериш
                                        <div class="list-group-item-primary">
                                            <div class="form-group">
                                                <label for="lst" class="form-control-range">Стаж работника</label>
                                                <input name="lst" id="lst" type="text" class="form-control-sm"
                                                       placeholder="Введите стаж работника">
                                            </div>
                                            <div class="form-group">
                                                <label for="qk" class="form-control-range">Квалификационная категория
                                                    работника</label>
                                                <input name="qk" id="qk" type="text" class="form-control-sm"
                                                       placeholder="Введите квалификационная категория работника">
                                            </div>
                                            <div class="form-group">
                                                <label for="nqb" class="form-control-range">Количество
                                                    неудовлетворительных оценок граждан, кому оказана скорая
                                                    медицинская помощь или их сопровождающих</label>
                                                <input name="nqb" id="nqb" type="text" class="form-control-sm"
                                                       placeholder="Введите оценок граждан">
                                            </div>
                                        </div>
                                        2. Ижро интизоми
                                        <div class="list-group-item-secondary">
                                            <div class="form-group">
                                                <label for="nob" class="form-control-range">Количество всех выполненных
                                                    вызовов бригадой оцениваемого сотрудника</label>
                                                <input name="nob" id="nob" type="text" class="form-control-sm"
                                                       placeholder="Введите выполненных вызовов">
                                            </div>
                                            <div class="form-group">
                                                <label for="ncb" class="form-control-range">Количество нарушений
                                                    соблюдения стандартов и порядка ведения первичных документов</label>
                                                <input name="ncb" id="ncb" type="text" class="form-control-sm"
                                                       placeholder="Введите нарушений соблюдения стандартов и порядка">
                                            </div>
                                            <div class="form-group">
                                                <label for="nmsh" class="form-control-range">Количество обращений ЛПУ
                                                    или граждан, признанных по результатам анализа обоснованной
                                                    жалобой</label>
                                                <input name="nmsh" id="nmsh" type="text" class="form-control-sm"
                                                       placeholder="Введите обращений ЛПУ или граждан">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="ntch" class="form-control-range">Повторные вызова в течение 24
                                                часов (по вине бригады оцениваемого сотрудника)</label>
                                            <input name="ntch" id="ntch" type="text" class="form-control-sm"
                                                   placeholder="Введите Повторные вызова в течение 24 часов">
                                        </div>
                                        3. Охирги натижа бўйича тез тиббий ёрдам кўрсатиш сифати
                                        <div class="list-group-item-primary">
                                            <div class="form-group">
                                                <label for="nnt" class="form-control-range">Количество летальных случаев
                                                    во время нахождения бригады СМП у больного, где тактика бригады
                                                    признана неправльной в результате анализа ПДК учреждения
                                                    СМП </label>
                                                <input name="nnt" id="nnt" type="text" class="form-control-sm"
                                                       placeholder="Введите Количество летальных случаев">
                                            </div>
                                            <div class="form-group">
                                                <label for="nut" class="form-control-range">Общее количество таких
                                                    случаев анализируемых в отношении оцениваемого сотрудника</label>
                                                <input name="nut" id="nut" type="text" class="form-control-sm"
                                                       placeholder="Введите количество случаев">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input name="user" id="user" type="hidden" class="form-control-sm"
                                                   value="<?php echo $un ?>">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="dsubmit" value="dsubmit" class="btn-success">
                                                Маълумотларни сақлаш
                                            </button>
                                        </div>
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
