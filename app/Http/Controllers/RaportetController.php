<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\Console\Input\Input;

class RaportetController extends Controller
{
    //

    public function index()
    {
       // Merr Raportet nga Databaza
       $Raportet = DB::table('raportet_ditore')->get();

      // Merr Kolonat nga Databaza se thot Erzeni me bo me shtu ose me hek ni kolon prishet programi ;p
      $Kolonat = Schema::getColumnListing('raportet_ditore');

      return View("tabela",['raportet' => $Raportet,'kolonat'=>$Kolonat]);
    }

    public function Raporto(Request $request)
    {
        
        //Building Query
        $query = DB::table('raportet_ditore');
           foreach($request->all() as $key=>$value){ 
            if($value && $key != '_token'){
                $query->where($key, '=' ,$value);
            }      
           }

           // Execute query
          $raportet = $query->get();

       $Kolonat = Schema::getColumnListing('raportet_ditore');
       return View("tabela",['raportet' => $raportet,'kolonat'=>$Kolonat]);

    }
}
