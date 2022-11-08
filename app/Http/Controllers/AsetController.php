<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aset;

class AsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aset = Aset::findOrFail($id);

        return $aset;
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
        $aset = Aset::findOrFail($id);
        $aset->aset_name = $request->aset_name;
        $aset->aset_tipe = $request->aset_tipe;
        $aset->aset_jenis = $request->aset_jenis;
        $aset->aset_kondisi = $request->aset_kondisi;
        $aset->aset_sub_unit = $request->aset_sub_unit;
        $aset->aset_kode = $request->aset_kode;
        $aset->nomor_sap = $request->nomor_sap;
        $aset->foto_aset1 = $request->foto_aset1;
        $aset->foto_aset2 = $request->foto_aset2;
        $aset->foto_aset3 = $request->foto_aset3;
        $aset->foto_aset4 = $request->foto_aset4;
        $aset->geo_tag1 = $request->geo_tag1;
        $aset->geo_tag2 = $request->geo_tag2;
        $aset->geo_tag3 = $request->geo_tag3;
        $aset->geo_tag4 = $request->geo_tag4;
        $aset->aset_luas = $request->aset_luas;
        $aset->tgl_input = $request->tgl_input;
        $aset->tgl_oleh = $request->tgl_oleh;
        $aset->nilai_residu = $request->nilai_residu;
        $aset->nilai_oleh = $request->nilai_oleh;
        $aset->nomor_bast = $request->nomor_bast;
        $aset->masa_susut = $request->masa_susut;
        $aset->keterangan = $request->keterangan;
        $aset->foto_qr = $request->foto_qr;
        $aset->no_inv = $request->no_inv;
        $aset->foto_aset_qr = $request->foto_aset_qr;
        $aset->status_posisi = $request->status_posisi;
        $aset->unit_id = $request->unit_id;
        $aset->afdeling_id = $request->afdeling_id;
        $aset->afdeling_id = $request->afdeling_id;
        $aset->user_input_id = $request->user_input_id;

        $aset->save();

        return response("update success",2);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
