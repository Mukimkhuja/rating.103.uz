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
                                <div class="list-group-horizontal">
                                    1. Малака талабларига жавоб бериш
                                    <div class="list-group-item-primary">
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                    </div>
                                    2. Ижро интизоми
                                    <div class="list-group-item-secondary">
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                    </div>
                                    3. Охирги натижа бўйича тез тиббий ёрдам кўрсатиш сифати
                                    <div class="list-group-item-primary">
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
                                        <div class="form-group">
                                            <label for="lst" class="form-control-range">Стаж работника</label>
                                            <input name="slt" id="lst" type="text" class="form-control-sm"
                                                   placeholder="Введите стаж работника">
                                        </div>
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
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
