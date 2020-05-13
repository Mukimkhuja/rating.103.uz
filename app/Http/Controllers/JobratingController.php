<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\JobratingRequest;
use App\Models\Jobrating;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Integer;

class JobratingController extends Controller
{
    public function submit(JobratingRequest $req)
    {
        $sum = 0;
        $sum2 = 0;
        $dis = 0;
        $jrat = new Jobrating();
        //1
        if ($req->input('user') == 'admin') {
            $jrat->disl = 'shahar';
            $dis = 1;
        } else {
            $jrat->disl = 'qishloq';
        }
        $jrat->npipl = $req->input('npipl');
        $NPIPL = $jrat->npipl;
        if ($NPIPL != 0) {
            $sum++;
            $NABC = ($NPIPL) / 13000;
        }
        //2
        $jrat->nfabc = $req->input('nfabc');
        $NfABC = $jrat->nfabc;
        if ($NfABC != 0) {
            $sum++;
            $PABC = 100 * ($NfABC) / $NABC;
            $Kr1 = 5 * $PABC / 100;
            $sum2 += $Kr1;
        }
        //3
        $jrat->nfbc = $req->input('nfbc');
        $NFBC = $jrat->nfbc;
        if ($NFBC != 0) {
            $sum++;
            $PBC = 100 * $NFBC / (0.2 * $NABC);
            $Kr2 = 5 * $PBC / 100;
            $sum2 += $Kr2;
        }

        //4
        $jrat->nab_c = $req->input('nab_c');
        $NABC = $jrat->nab_c;
        if ($NABC != 0) {
            $sum++;
            $Kr3 = 5 * $NABC / $NABC;
            $sum2 += $Kr3;
        }

        //5
        $jrat->nfgps = $req->input('nfgps');
        $NfGPS = $jrat->nfgps;
        if ($NfGPS != 0) {
            $sum++;
            //$PGS=100*$NfGPS/$NfABC;
            $Kr4 = 5 * (100 * $NfGPS / $NfABC);
            $sum2 += $Kr4;
        }
        /* //6
            $Kr5=5· P(LS)/100  //дори воситалари билан таъминланганлик
           $Kr6= 5· P(TB)/100 //тиббиёт буюумлари билан таъминланганлик  */
        //7
        $jrat->nfvr = $req->input('nfvr');
        $jrat->npvr = $req->input('npvr');
        $jrat->nfpara = $req->input('nfpara');
        $jrat->nppara = $req->input('nppara');
        $jrat->nffeld = $req->input('nffeld');
        $jrat->npfeld = $req->input('npfeld');
        $Nfvr = $jrat->nfvr;
        $Npvr = $jrat->npvr;
        $Nfpara = $jrat->nfpara;
        $Nppara = $jrat->nppara;
        $Nffeld = $jrat->nffeld;
        $Npfeld = $jrat->npfeld;
        $a = 0;
        $Ppara = 100 * $Nfpara / $Nppara;
        if ($Ppara != 0) {
            $a++;
        }
        $Pvr = 100 * $Nfvr / $Npvr;
        if ($Pvr != 0) {
            $a++;
        }
        $Pfeld = 100 * $Nffeld / $Npfeld;
        if ($Pfeld != 0) {
            $a++;
        }
        $Pempl = ($Pvr + $Ppara + $Pfeld) / $a;
        if ($Pempl != 0) {
            $sum++;
            $Kr7 = 5 * $Pempl / 100;
            $sum2 += $Kr7;
        }
        //8
        $jrat->stv5_7 = $req->input('stv5_7');
        $jrat->stv5_7_2 = $req->input('stv5_7_2');
        $jrat->stv7_10 = $req->input('stv7_10');
        $jrat->stv7_10_1 = $req->input('stv7_10_1');
        $jrat->stv10 = $req->input('stv10');
        $jrat->stv10_pr = $req->input('stv10_pr');
        $jrat->stf5_7 = $req->input('stf5_7');
        $jrat->stf5_7_2 = $req->input('stf5_7_2');
        $jrat->stf7_10 = $req->input('stf7_10');
        $jrat->stf7_10_1 = $req->input('stf7_10_1');
        $jrat->stf10 = $req->input('stf10');
        $jrat->stf10_pr = $req->input('stf10_pr');
        $jrat->t11 = $req->input('t11');
        $jrat->t12 = $req->input('t12');
        $jrat->t21 = $req->input('t21');
        $jrat->t22 = $req->input('t22');
        $jrat->nfv = $req->input('nfv');
        $jrat->nv = $req->input('nv');
        $jrat->nfav = $req->input('nfav');
        $jrat->nfl0 = $req->input('nfl0');
        $jrat->nfl1 = $req->input('nfl1');
        $jrat->nfpv = $req->input('nfpv');
        $jrat->nop = $req->input('nop');
        $jrat->npr = $req->input('npr');
        $jrat->user_name = $req->input('user');

        $a = $jrat->npipl;
        $b = $jrat->nfabc;
        $c = $a * $b;
        $jrat->rating = $c;

        $jrat->save();
        return redirect()->route('jobrating-page')->with('success', 'Киритилган маълумотлар муваффаққиятли сақланди!');
    }
}
