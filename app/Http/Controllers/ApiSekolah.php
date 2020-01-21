<?php

namespace App\Http\Controllers;


class ApiSekolah extends Controller
{
    function api(){
        return file_get_contents('http://jendela.data.kemdikbud.go.id/api/index.php/cwilayah/wilayahKabGet');
    }

    function namaSekolah($kodedaerah){
        return file_get_contents('http://jendela.data.kemdikbud.go.id/api/index.php/Csekolah/detailSekolahGET?mst_kode_wilayah='.$kodedaerah."&bentuk=smp");
    }
}
