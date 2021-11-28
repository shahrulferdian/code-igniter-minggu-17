<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KAtegori_M;

class Kategori extends BaseController
{
    public function index()
    {
        return view('welcome_message');
        echo "<h1>belajar codeigniter<h1/>";
    }


    public function select()
    {
    
        $model = new Ktegori_M();
        $kategori = $model ->FindAll();


        $data = [
            'judul' = 'SELECT DATA DARI controller',
            'kategori' => ['Makanan', 'Minuman', 'Jajan', 'Gorengan', 'Buah']
        ];

     return  view ("kategori/select");
        
    }
    
    
    public function selectWhere($id=null)
    {
        echo "<h1>menampilkan data yang dipilih $id<h1>";
    }
    
    
    public function formInsert()
    {
     
        return view ("kategori/forminsert");
      
    }
    
    
    public function formUpdate($id=null)
    {
        echo  view ("template/header");
        echo  view ("kategori/update");
        echo  view ("template/footer");";
    }
    
    
    public function update($id=null)
    {
        echo "proses update data $id";
    }
    
    
    public function delete($id=null)
    {
        echo "prosses delete data";
    }
}
