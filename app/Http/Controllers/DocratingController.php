<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docrating;
use App\Http\Requests\DocratingRequest;

class DocratingController extends Controller
{
    public function dsubmit(DocratingRequest $request)
    {
        $sq = 0;
        $s = 0;
        $summ = 0;
        $kr1=$kr1=$kr1=$kr1=$kr1=$kr1=0;
        $drat = new Docrating();

        $drat->Lst = $request->input('lst');
        $drat->Qk = $request->input('qk');
        $lst = $drat->Lst;
        $qk = $drat->Qk;
        if ($lst >= 0 && $lst < 5) {
            $sq = 1;
        } elseif (($lst >= 5 && $lst < 7) && ($qk == 2 || $qk == 1 || $qk == 0)) {
            $sq = 1;
        } elseif (($lst >= 7 && $lst < 10) && ($qk == 1 || $qk == 0)) {
            $sq = 1;
        } elseif ($lst >= 7 && $lst < 10 && $qk == 2) {
            $sq = 2;
        } elseif ($lst >= 10 && $qk == 0) {
            $sq = 1;
        } elseif ($lst >= 10 && ($qk == 1 || $qk == 2)) {
            $sq = 2;
        } elseif ($lst >= 5 && $qk == 'null') {
            $sq = 3;
        }
        if ($sq == 1) {
            $kr1 = 5;
            $summ += $kr1;
            $s++;
        }
        if ($sq == 2) {
            $kr1 = 3;
            $summ += $kr1;
            $s++;
        }
        if ($sq == 3) {
            $kr1 = 0;
            $summ += $kr1;
            $s++;
        }

        $drat->Nqb = $request->input('nqb');
        $drat->Nob = $request->input('nob');
        $nqb = $drat->Nqb;
        $nob = $drat->Nob;
        $kr2 = 5 * (1 - $nqb / $nob);
        if ($kr2 != 0) {
            $summ += $kr2;
            $s++;
        }

        $drat->Ncb = $request->input('ncb');
        $ncb = $drat->Ncb;
        $kr3 = 5 * (1 - $ncb / $nob);
        if ($kr3 != 0) {
            $summ += $kr3;
            $s++;
        }

        $drat->Nmsh = $request->input('nmsh');
        $nmsh = $drat->Nmsh;
        $kr4 = (-100) * $nmsh / $nob;
        if ($kr4 != 0) {
            $summ += $kr4;
            $s++;
        }
        $drat->Ntch = $request->input('ntch');
        $ntch = $drat->Ntch;
        $kr5 = (-100) * $ntch / $nob;
        if ($kr5 != 0) {
            $summ += $kr5;
            $s++;
        }
        $drat->Nnt = $request->input('nnt');
        $drat->Nut = $request->input('nut');
        $nnt = $drat->Nnt;
        $nut = $drat->Nut;
        $kr6 = 5 * (1 - $nnt / $nut);
        if ($kr6 != 0) {
            $summ += $kr6;
            $s++;
        }
        $result = $summ / $s;
        $drat->drating = $result;

        $drat->user_name = $request->input('user');

        $drat->Kr1 = $kr1;
        $drat->Kr2 = $kr2;
        $drat->Kr3 = $kr3;
        $drat->Kr4 = $kr4;
        $drat->Kr5 = $kr5;
        $drat->Kr6 = $kr6;


        $drat->save();

        return redirect()->route('docrating-page')->with('success', 'Киритилган маълумотлар муваффаққиятли сақланди!');

    }
}
