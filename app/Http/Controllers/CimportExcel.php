<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;
use App\dpms;
use App\JamMenyalas;

class CimportExcel extends Controller
{
  function index()
     {
      $data = DB::table('dpm')->orderBy('idpel', 'ASC')->get();
      return view('import_excel', compact('data'));
     }



     function store(Request $request)
     {
      $this->validate($request, [
       'select_file'  => 'required|mimes:xls,xlsx,csv'
      ]);

      $path = $request->file('select_file')->getRealPath();
      $data = Excel::load($path)->get();
      $file=$request->file('select_file')->getClientOriginalName();
      $filename = pathinfo($file, PATHINFO_FILENAME);
      $cutfilename = (int)(substr($filename,10));

      if($data->count() > 0)
      {
       foreach($data as $key => $value)
       {
         //dd($value['idpel']);

         if(!empty($value['idpel']))
         {
           $dms = new dpms;
           $db = DB::select('select idpel,datever from dpm where datever <:j and idpel=:j2', ['j' => $cutfilename,'j2' => $value['idpel']]);
           //$db keluaranny array harus foreach atau bisa langsun save DB::save
           if(empty($db))
           {
           $dms->idpel=$value['idpel'];
           $dms->nama=$value['nama'];
           $dms->alamat=$value['alamat'];
           $dms->tarif=$value['tarif'];
           $dms->daya=$value['daya'];
           $dms->rbm=$value['rbm'];
           $dms->stand=$value['stand'];
           $dms->datever=$cutfilename;
           $dms->save();
          }
          else {
                    $dbStandSubt = DB::select('select distinct (:j3 - stand)as finalStand from
                    dpm
                    where :j-datever=1 and idpel=:j2', ['j' => $cutfilename,'j2' => $value['idpel'],'j3' => $value['stand']]);
                     $jam= new JamMenyalas;
                     $dms->idpel=$value['idpel'];
                     $dms->nama=$value['nama'];
                     $dms->alamat=$value['alamat'];
                     $dms->tarif=$value['tarif'];
                     $dms->daya=$value['daya'];
                     $dms->rbm=$value['rbm'];
                     $dms->stand=$value['stand'];
                     $dms->datever=$cutfilename;
                     //input JAM to DB
                     $jam->idpel=$value['idpel'];
                     $jam->daya=$value['daya'];
                     foreach ($dbStandSubt as $valueSTAND) {
                       $tmp=$valueSTAND;
                       foreach ($tmp as $value3) {
                         $jam->stand=$value3;
                         //dd($jam->stand);
                       }
                     }
                     $jam->datever=$cutfilename;
                     $jam->totaljam=$jam->stand/($jam->daya/1000);
                     //value dms dari excel sudah diambil dan disave di bawah
                     $dms->save();
                     $jam->save();
          }
        }
       }
      }
      return back()->with('success', 'Excel Data Imported successfully.');
     }
}
