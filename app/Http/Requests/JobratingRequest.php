<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobratingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'npipl' => 'required|numeric',
            'nfabc' => 'required|numeric',
            'nfbc' => 'required|numeric',
            'nab_c' => 'required|numeric',
            'nfgps' => 'required|numeric',
            'nfvr' => 'required|numeric',
            'npvr' => 'required|numeric',
            'nfpara' => 'required|numeric',
            'nppara' => 'required|numeric',
            'nffeld' => 'required|numeric',
            'npfeld' => 'required|numeric',
            'stv5_7' => 'required|numeric',
            'stv5_7_2' => 'required|numeric',
            'stv7_10' => 'required|numeric',
            'stv7_10_1' => 'required|numeric',
            'stv10' => 'required|numeric',
            'stv10_pr' => 'required|numeric',
            'stf5_7' => 'required|numeric',
            'stf5_7_2' => 'required|numeric',
            'stf7_10' => 'required|numeric',
            'stf7_10_1' => 'required|numeric',
            'stf10' => 'required|numeric',
            'stf10_pr' => 'required|numeric',
            't11' => 'required|numeric',
            't12' => 'required|numeric',
            't21' => 'required|numeric',
            't22' => 'required|numeric',
            'nfv' => 'required|numeric',
            'nv' => 'required|numeric',
            'nfav' => 'required|numeric',
            'nfl0' => 'required|numeric',
            'nfl1' => 'required|numeric',
            'nfpv' => 'required|numeric',
            'nop' => 'required|numeric',
            'npr' => 'required|numeric'

        ];
    }

    public function messages()
    {
        return [
            'npipl.numeric'=>'Илтмос фақат сон киритинг!',
            'npipl.required' => 'ТТЁ хизмати таркибий бўлинмасига бириктирилган ҳудуддаги аҳоли сони киритилмаган',
            'nfabc.required' => 'Таҳлил даврида хизматда бўлган махсус автомобиллар сони киритилмаган',
            'nfbc.required' => 'Таҳлил даврида хизматда бўлган Реанимобил (HUNDAY)лар сони киритилмаган',
            'nab_c.required' => 'Таҳлил даврида хизматда бўлган  мобил+планшетлар сони киритилмаган',
            'nfgps.required' => 'Таҳлил даврида бор бўлган GPS*трекерлар сони киритилмаган',
            'nfvr.required' => 'Банд врач ставкалар сони киритилмаган',
            'npvr.required' => 'Штат нормативи бўйича врач ставкалари сони киритилмаган',
            'nfpara.required' => 'Банд парамедик ставкалари сони киритилмаган',
            'nppara.required' => 'Штат нормативи бўйича парамедик ставкалари сони киритилмаган',
            'nffeld.required' => 'Банд фельдшер ставкалари сони киритилмаган',
            'npfeld.required' => 'Штат нормативи бўйича фельдшер ставкалари сони киритилмаган',
            'stv5_7.required' => 'Стажи 5 йилга тенг ёки ошиқ, лекин 7 йилдан кам врачлар сони киритилмаган',
            'stv5_7_2.required' => 'Стажи 5 йилга тенг ёки ошиқ, лекин 7 йилдан кам врачлар ичида 2-тоифалилар сони киритилмаган',
            'stv7_10.required' => 'Стажи 7 йилга тенг ёки ошиқ, лекин 10 йилдан кам врачлар сони киритилмаган',
            'stv7_10_1.required' => 'Стажи 7 йилга тенг ёки ошиқ, лекин 10 йилдан кам врачлар ичида 1-тоифалилар сони киритилмаган',
            'stv10.required' => 'Стажи 10 йилга тенг ёки ошиқ бўлган врачлар сони киритилмаган',
            'stv10_pr.required' => 'Стажи 10йилга тенг ёки ошиқ врачлар ичида олий-тоифалилар сони киритилмаган',
            'stf5_7.required' => 'Стажи 5 йилга тенг ёки ошиқ, лекин 7 йилдан кам фельдшерлар сони киритилмаган',
            'stf5_7_2.required' => 'Стажи 5 йилга тенг ёки ошиқ, лекин 7 йилдан кам фельдшерлар ичида 2-тоифалилар сони киритилмаган',
            'stf7_10.required' => 'Стажи 7 йилга тенг ёки ошиқ, лекин 10 йилдан кам фельдшерлар сони киритилмаган',
            'stf7_10_1.required' => 'Стажи 7 йилга тенг ёки ошиқ, лекин 10 йилдан кам фельдшерлар ичида 1-тоифалилар сони киритилмаган',
            'stf10.required' => 'Стажи 10 йилга тенг ёки ошиқ бўлган фельдшерлар сони киритилмаган',
            'stf10_pr.required' => 'Стажи 10йилга тенг ёки ошиқ фелдшерлар ичида олий-тоифалилар сони киритилмаган',
            't11.required' => 'Тез тиббий ёрдам машинаси жўнатилган шошилинч чақирувлар бўйича ўртача вақт киритилмаган',
            't12.required' => 'Тез тиббий ёрдам машинаси жўнатилган Зудликни талаб этувчи ва кечиктирилмайдиган чақирувлар бўйича ўртача вақт киритилмаган',
            't21.required' => 'Беморнинг олдига етиб келишга кетган шошилинч чақирувлар ўртача вақт киритилмаган',
            't22.required' => 'Беморнинг олдига етиб келишга кетган Зудликни талаб этувчи ва кечиктирилмайдиган чақирувлар бўйича ўртача вақт киритилмаган',
            'nfv.required' => 'Тез тиббий ёрдам бригадасига бир суткада тушган ўртача юклама киритилмаган',
            'nv.required' => 'Баҳолаш давридаги барча чақирувлар сони киритилмаган',
            'nfav.required' => 'Асоссиз чақирувлар сони киритилмаган',
            'nfl0.required' => 'Тез тиббий ёрдам келгунга қадар ўлимлар сони киритилмаган',
            'nfl1.required' => 'Тез тиббий ёрдам бригадаси борлигида ўлимлар сони киритилмаган',
            'nfpv.required' => 'Такрорий чақирувлар сони киритилмаган',
            'nop.required' => 'Чақирувлар ҳақида амбулатор поликлиника муассасаларини хабардор этишлар сони киритилмаган',
            'npr.required' => 'Даволаш профилактика муассасаларининг даъволари ва фуқаролар шикоятлари сони киритилмаган'

        ];
    }
}
