<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//tambahan
use App\Models\Menu;
use App\Models\Kategori;
use DB;
use PDF;

//excel
use App\Exports\MenuExport;
use App\Http\Middleware\Peran;
use Maatwebsite\Excel\Facades\Excel;

class UserMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
       //menampilkan seluruh data
        //$menu = Menu::orderBy('id', 'DESC')->get();
        // mengambil data pegawai yang bernama Jamal Uwais
	    $coffee = Menu::where('kategori_id', '1')->get(); 
        $noncoffee = Menu::where('kategori_id', '2')->get(); 
        $tc = Menu::where('kategori_id', '3')->get(); 
        $snack = Menu::where('kategori_id', '4')->get(); 
        $mr = Menu::where('kategori_id', '12')->get(); 

       return view('User.menupelanggan',compact('coffee','noncoffee','tc','snack','mr'));
    }

    public function apiMenu()
    {
        
    }

    public function apiMenuDetail($id)
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
    }

    public function menuPDF()
    {
        
    }

    public function menuExcel() 
    {
        
    }
}
