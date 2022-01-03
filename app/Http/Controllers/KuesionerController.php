<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Dosen;
use App\Matkul;
use App\Prodi;
use App\Kuesioner;
use DB;
class KuesionerController extends Controller
{
    public function isi(){
        $dosen = Dosen::all();
        $pertanyaan = Pertanyaan::all(); 
        $matkul=Matkul::All();
        $prodi=Prodi::All();
         return view('isikuesioner', compact( 'pertanyaan','dosen','matkul','prodi'));
    }
    public function store(Request $request){
        Kuesioner::create([

                'id_dosen'=>$request['id_dosen'],
                'nama_mahasiswa'=>$request['nama_mahasiswa'],
                'npm'=>$request['npm'],
                'jurusan'=>$request['jurusan'],
                'hasil1'=>$request['hasil1'],
                'hasil2'=>$request['hasil2'],
                'hasil3'=>$request['hasil3'],
                'hasil4'=>$request['hasil4'],
                'hasil5'=>$request['hasil5'],
                'hasil6'=>$request['hasil6'],
                'hasil7'=>$request['hasil7'],
                'hasil8'=>$request['hasil8'],
                'hasil9'=>$request['hasil9'],
                'hasil10'=>$request['hasil10'],
                'hasil11'=>$request['hasil11'],
                'hasil12'=>$request['hasil12'],
                'hasil13'=>$request['hasil13'],
                'hasil14'=>$request['hasil14'],
                'hasil15'=>$request['hasil15'],
                'hasil16'=>$request['hasil16'],
                
            
            
           ]);
          return redirect('/home');
    }
    public function show($id)
    {
        $dosen = Dosen::findOrfail($id);
        //$kuisioner= DB::select("select SUM(hasil1+hasil2+hasil3+hasil4+hasil5+hasil6+hasil7+hasil8+hasil9+hasil10+hasil11+hasil12+hasil13+hasil14+hasil15+hasil16) as jumlah from kuesioners where id_dosen='$id'");
        $kuisioner=DB::select("select * from kuesioners where id_dosen='$id'");

        $hasilkurang= DB::select("
        select hasil1, 
        case when hasil1=1 then COUNT(hasil1)
        when hasil1=1 then COUNT(hasil1)
        else 'hasil tidak ada' end as hitungkurang from kuesioners where hasil1=1 AND id_dosen='$id'  GROUP BY id_dosen, hasil1"
    );

        $hasilcukup= DB::select("
        select id_dosen,hasil1, 
        case when hasil1=2 then COUNT(hasil1)
        when hasil1=2 then COUNT(hasil1)
        else 'hasil tidak ada' end as hitungcukup from kuesioners where hasil1=2 AND id_dosen='$id' GROUP BY id_dosen, hasil1");  
        
        $hasilbaik= DB::select("
        select id_dosen,hasil1, 
        case when hasil1=3 then COUNT(hasil1)
        when hasil1=3 then COUNT(hasil1)
        else 0 end as hitungbaik from kuesioners where hasil1=3 AND id_dosen='$id' GROUP BY id_dosen, hasil1"); 

        $hasilsgbaik= DB::select("
        select id_dosen,hasil1, 
        case when hasil1=4 then COUNT(hasil1)
        when hasil1=4 then COUNT(hasil1)
        else 0 end as hitungsgbaik from kuesioners where hasil1=4 AND id_dosen='$id' GROUP BY id_dosen, hasil1"); 

        //pertanyaanke 2

        $hasilkurang2= DB::select("
        select id_dosen,hasil2, 
        case when hasil2=1 then COUNT(hasil2)
        when hasil2=1 then COUNT(hasil2)
        else 'hasil tidak ada' end as hitungkurang2 from kuesioners where hasil2=1 AND id_dosen='$id' GROUP BY id_dosen, hasil2");

        $hasilcukup2= DB::select("
        select id_dosen,hasil2, 
        case when hasil2=2 then COUNT(hasil2)
        when hasil2=2 then COUNT(hasil2)
        else 'hasil tidak ada' end as hitungcukup2 from kuesioners where hasil2=2 AND id_dosen='$id' GROUP BY id_dosen, hasil2");  
        
        $hasilbaik2= DB::select("
        select id_dosen,hasil2, 
        case when hasil2=3 then COUNT(hasil2)
        when hasil2=3 then COUNT(hasil2)
        else 0 end as hitungbaik2 from kuesioners where hasil2=3 AND id_dosen='$id' GROUP BY id_dosen, hasil2"); 

        $hasilsgbaik2= DB::select("
        select id_dosen,hasil2, 
        case when hasil2=4 then COUNT(hasil2)
        when hasil2=4 then COUNT(hasil2)
        else 0 end as hitungsgbaik2 from kuesioners where hasil2=4 AND id_dosen='$id' GROUP BY id_dosen, hasil2"); 

        //pertanyaan 3
        $hasilkurang3= DB::select("
        select id_dosen,hasil3, 
        case when hasil3=1 then COUNT(hasil3)
        when hasil3=1 then COUNT(hasil3)
        else 'hasil tidak ada' end as hitungkurang3 from kuesioners where hasil3=1 AND id_dosen='$id' GROUP BY id_dosen, hasil3");

        $hasilcukup3= DB::select("
        select id_dosen,hasil3, 
        case when hasil3=2 then COUNT(hasil3)
        when hasil3=2 then COUNT(hasil3)
        else 'hasil tidak ada' end as hitungcukup3 from kuesioners where hasil3=2 AND id_dosen='$id' GROUP BY id_dosen, hasil3");  
        
        $hasilbaik3= DB::select("
        select id_dosen,hasil3, 
        case when hasil3=3 then COUNT(hasil3)
        when hasil3=3 then COUNT(hasil3)
        else 0 end as hitungbaik3 from kuesioners where hasil3=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil3"); 

        $hasilsgbaik3= DB::select("
        select id_dosen,hasil3, 
        case when hasil3=4 then COUNT(hasil3)
        when hasil3=4 then COUNT(hasil3)
        else 0 end as hitungsgbaik3 from kuesioners where hasil3=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil3");
        
        //pertanyaan 4
        $hasilkurang4= DB::select("
        select id_dosen,hasil4, 
        case when hasil4=1 then COUNT(hasil4)
        when hasil4=1 then COUNT(hasil4)
        else 'hasil tidak ada' end as hitungkurang4 from kuesioners where hasil4=1 AND id_dosen='$id' GROUP BY id_dosen, hasil4");

        $hasilcukup4= DB::select("
        select id_dosen,hasil4, 
        case when hasil4=2 then COUNT(hasil4)
        when hasil4=2 then COUNT(hasil4)
        else 'hasil tidak ada' end as hitungcukup4 from kuesioners where hasil4=2 AND id_dosen='$id' GROUP BY id_dosen, hasil4");  
        
        $hasilbaik4= DB::select("
        select id_dosen,hasil4, 
        case when hasil4=3 then COUNT(hasil4)
        when hasil4=3 then COUNT(hasil4)
        else 0 end as hitungbaik4 from kuesioners where hasil4=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil4"); 

        $hasilsgbaik4= DB::select("
        select id_dosen,hasil4, 
        case when hasil4=4 then COUNT(hasil4)
        when hasil4=4 then COUNT(hasil4)
        else 0 end as hitungsgbaik4 from kuesioners where hasil4=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil4"); 
        
        //pertanyaan 5 
        $hasilkurang5= DB::select("
        select id_dosen,hasil5, 
        case when hasil5=1 then COUNT(hasil5)
        when hasil5=1 then COUNT(hasil5)
        else 'hasil tidak ada' end as hitungkurang5 from kuesioners where hasil5=1 AND id_dosen='$id' GROUP BY id_dosen, hasil5");

        $hasilcukup5= DB::select("
        select id_dosen,hasil5, 
        case when hasil5=2 then COUNT(hasil5)
        when hasil5=2 then COUNT(hasil5)
        else 'hasil tidak ada' end as hitungcukup5 from kuesioners where  hasil5=2 AND id_dosen='$id' GROUP BY id_dosen, hasil5");  
        
        $hasilbaik5= DB::select("
        select id_dosen,hasil5, 
        case when hasil5=3 then COUNT(hasil5)
        when hasil5=3 then COUNT(hasil5)
        else 0 end as hitungbaik5 from kuesioners where hasil5=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil5"); 

        $hasilsgbaik5= DB::select("
        select id_dosen,hasil5, 
        case when hasil5=4 then COUNT(hasil5)
        when hasil5=4 then COUNT(hasil5)
        else 0 end as hitungsgbaik5 from kuesioners where hasil5=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil5"); 
        //pertanyaan 6
        $hasilkurang6= DB::select("
        select id_dosen,hasil6, 
        case when hasil6=1 then COUNT(hasil6)
        when hasil6=1 then COUNT(hasil6)
        else 'hasil tidak ada' end as hitungkurang6 from kuesioners where    hasil6=1 AND id_dosen='$id' GROUP BY id_dosen, hasil6");

        $hasilcukup6= DB::select("
        select id_dosen,hasil6, 
        case when hasil6=2 then COUNT(hasil6)
        when hasil6=2 then COUNT(hasil6)
        else 'hasil tidak ada' end as hitungcukup6 from kuesioners where     hasil6=2 AND id_dosen='$id' GROUP BY id_dosen, hasil6");  
        
        $hasilbaik6= DB::select("
        select id_dosen,hasil6, 
        case when hasil6=3 then COUNT(hasil6)
        when hasil6=3 then COUNT(hasil6)
        else 0 end as hitungbaik6 from kuesioners where hasil6=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil6"); 

        $hasilsgbaik6= DB::select("
        select id_dosen,hasil6, 
        case when hasil6=4 then COUNT(hasil6)
        when hasil6=4 then COUNT(hasil6)
        else 0 end as hitungsgbaik6 from kuesioners where hasil6=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil6"); 

        //pertnyaan 7
        $hasilkurang7= DB::select("
        select id_dosen,hasil7, 
        case when hasil7=1 then COUNT(hasil7)
        when hasil7=1 then COUNT(hasil7)
        else 'hasil tidak ada' end as hitungkurang7 from kuesioners where    hasil7=1 AND id_dosen='$id' GROUP BY id_dosen, hasil7");

        $hasilcukup7= DB::select("
        select id_dosen,hasil7, 
        case when hasil7=2 then COUNT(hasil7)
        when hasil7=2 then COUNT(hasil7)
        else 'hasil tidak ada' end as hitungcukup7 from kuesioners where     hasil7=2 AND id_dosen='$id' GROUP BY id_dosen, hasil7");  
        
        $hasilbaik7= DB::select("
        select id_dosen,hasil7, 
        case when hasil7=3 then COUNT(hasil7)
        when hasil7=3 then COUNT(hasil7)
        else 0 end as hitungbaik7 from kuesioners where hasil7=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil7"); 

        $hasilsgbaik7= DB::select("
        select id_dosen,hasil7, 
        case when hasil7=4 then COUNT(hasil7)
        when hasil7=4 then COUNT(hasil7)
        else 0 end as hitungsgbaik7 from kuesioners where hasil7=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil7"); 

        //pertanyaan 8
        $hasilkurang8= DB::select("
        select id_dosen,hasil8, 
        case when hasil8=1 then COUNT(hasil8)
        when hasil8=1 then COUNT(hasil8)
        else 'hasil tidak ada' end as hitungkurang8 from kuesioners where    hasil8=1 AND id_dosen='$id' GROUP BY id_dosen, hasil8");

        $hasilcukup8= DB::select("
        select id_dosen,hasil8, 
        case when hasil8=2 then COUNT(hasil8)
        when hasil8=2 then COUNT(hasil8)
        else 'hasil tidak ada' end as hitungcukup8 from kuesioners where     hasil8=2 AND id_dosen='$id' GROUP BY id_dosen, hasil8");  
        
        $hasilbaik8= DB::select("
        select id_dosen,hasil8, 
        case when hasil8=3 then COUNT(hasil8)
        when hasil8=3 then COUNT(hasil8)
        else 0 end as hitungbaik8 from kuesioners where hasil8=3  AND id_dosen='$id'GROUP BY    id_dosen, hasil8"); 

        $hasilsgbaik8= DB::select("
        select id_dosen,hasil8, 
        case when hasil8=4 then COUNT(hasil8)
        when hasil8=4 then COUNT(hasil8)
        else 0 end as hitungsgbaik8 from kuesioners where hasil8=4  AND id_dosen='$id'GROUP BY  id_dosen, hasil8"); 

        //pertanyaan 9

        $hasilkurang9= DB::select("
        select id_dosen,hasil9, 
        case when hasil9=1 then COUNT(hasil9)
        when hasil9=1 then COUNT(hasil9)
        else 'hasil tidak ada' end as hitungkurang9 from kuesioners where    hasil9=1 AND id_dosen='$id' GROUP BY id_dosen, hasil9");

        $hasilcukup9= DB::select("
        select id_dosen,hasil9, 
        case when hasil9=2 then COUNT(hasil9)
        when hasil9=2 then COUNT(hasil9)
        else 'hasil tidak ada' end as hitungcukup9 from kuesioners where     hasil9=2 AND id_dosen='$id' GROUP BY id_dosen, hasil9");  
        
        $hasilbaik9= DB::select("
        select id_dosen,hasil9, 
        case when hasil9=3 then COUNT(hasil9)
        when hasil9=3 then COUNT(hasil9)
        else 0 end as hitungbaik9 from kuesioners where hasil9=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil9"); 

        $hasilsgbaik9= DB::select("
        select id_dosen,hasil9, 
        case when hasil9=4 then COUNT(hasil9)
        when hasil9=4 then COUNT(hasil9)
        else 0 end as hitungsgbaik9 from kuesioners where hasil9=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil9"); 

        //pertanyaan 10
        $hasilkurang10= DB::select("
        select id_dosen,hasil10, 
        case when hasil10=1 then COUNT(hasil10)
        when hasil10=1 then COUNT(hasil10)
        else 'hasil tidak ada' end as hitungkurang10 from kuesioners where    hasil10=1 AND id_dosen='$id' GROUP BY id_dosen, hasil10");

        $hasilcukup10= DB::select("
        select id_dosen,hasil10, 
        case when hasil10=2 then COUNT(hasil10)
        when hasil10=2 then COUNT(hasil10)
        else 'hasil tidak ada' end as hitungcukup10 from kuesioners where     hasil10=2 AND id_dosen='$id' GROUP BY id_dosen, hasil10");  
        
        $hasilbaik10= DB::select("
        select id_dosen,hasil10, 
        case when hasil10=3 then COUNT(hasil10)
        when hasil10=3 then COUNT(hasil10)
        else 0 end as hitungbaik10 from kuesioners where hasil10=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil10"); 

        $hasilsgbaik10= DB::select("
        select id_dosen,hasil10, 
        case when hasil10=4 then COUNT(hasil10)
        when hasil10=4 then COUNT(hasil10)
        else 0 end as hitungsgbaik10 from kuesioners where hasil10=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil10"); 

        //pertanyaan 11

        $hasilkurang11= DB::select("
        select id_dosen,hasil11, 
        case when hasil11=1 then COUNT(hasil11)
        when hasil11=1 then COUNT(hasil11)
        else 'hasil tidak ada' end as hitungkurang11 from kuesioners where    hasil11=1 AND id_dosen='$id' GROUP BY id_dosen, hasil11");

        $hasilcukup11= DB::select("
        select id_dosen,hasil11, 
        case when hasil11=2 then COUNT(hasil11)
        when hasil11=2 then COUNT(hasil11)
        else 'hasil tidak ada' end as hitungcukup11 from kuesioners where     hasil11=2 AND id_dosen='$id' GROUP BY id_dosen, hasil11");  
        
        $hasilbaik11= DB::select("
        select id_dosen,hasil11, 
        case when hasil11=3 then COUNT(hasil11)
        when hasil11=3 then COUNT(hasil11)
        else 0 end as hitungbaik11 from kuesioners where hasil11=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil11"); 

        $hasilsgbaik11= DB::select("
        select id_dosen,hasil11, 
        case when hasil11=4 then COUNT(hasil11)
        when hasil11=4 then COUNT(hasil11)
        else 0 end as hitungsgbaik11 from kuesioners where hasil11=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil11"); 

        //pertanyaan 12
        $hasilkurang12= DB::select("
        select id_dosen,hasil12, 
        case when hasil12=1 then COUNT(hasil12)
        when hasil12=1 then COUNT(hasil12)
        else 'hasil tidak ada' end as hitungkurang12 from kuesioners where    hasil12=1 AND id_dosen='$id' GROUP BY id_dosen, hasil12");

        $hasilcukup12= DB::select("
        select id_dosen,hasil12, 
        case when hasil12=2 then COUNT(hasil12)
        when hasil12=2 then COUNT(hasil12)
        else 'hasil tidak ada' end as hitungcukup12 from kuesioners where     hasil12=2 AND id_dosen='$id' GROUP BY id_dosen, hasil12");  
        
        $hasilbaik12= DB::select("
        select id_dosen,hasil12, 
        case when hasil12=3 then COUNT(hasil12)
        when hasil12=3 then COUNT(hasil12)
        else 0 end as hitungbaik12 from kuesioners where hasil12=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil12"); 

        $hasilsgbaik12= DB::select("
        select id_dosen,hasil12, 
        case when hasil12=4 then COUNT(hasil12)
        when hasil12=4 then COUNT(hasil12)
        else 0 end as hitungsgbaik12 from kuesioners where hasil12=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil12"); 

        //pertanyaan 13
        $hasilkurang13= DB::select("
        select id_dosen,hasil13, 
        case when hasil13=1 then COUNT(hasil13)
        when hasil13=1 then COUNT(hasil13)
        else 'hasil tidak ada' end as hitungkurang13 from kuesioners where    hasil13=1 AND id_dosen='$id' GROUP BY id_dosen, hasil13");

        $hasilcukup13= DB::select("
        select id_dosen,hasil13, 
        case when hasil13=2 then COUNT(hasil13)
        when hasil13=2 then COUNT(hasil13)
        else 'hasil tidak ada' end as hitungcukup13 from kuesioners where     hasil13=2 AND id_dosen='$id' GROUP BY id_dosen, hasil13");  
        
        $hasilbaik13= DB::select("
        select id_dosen,hasil13, 
        case when hasil13=3 then COUNT(hasil13)
        when hasil13=3 then COUNT(hasil13)
        else 0 end as hitungbaik13 from kuesioners where hasil13=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil13"); 

        $hasilsgbaik13= DB::select("
        select id_dosen,hasil13, 
        case when hasil13=4 then COUNT(hasil13)
        when hasil13=4 then COUNT(hasil13)
        else 0 end as hitungsgbaik13 from kuesioners where hasil13=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil13"); 

        //pertanyaan 14 
        $hasilkurang14= DB::select("
        select id_dosen,hasil14, 
        case when hasil14=1 then COUNT(hasil14)
        when hasil14=1 then COUNT(hasil14)
        else 'hasil tidak ada' end as hitungkurang14 from kuesioners where    hasil14=1 AND id_dosen='$id' GROUP BY id_dosen, hasil14");

        $hasilcukup14= DB::select("
        select id_dosen,hasil14, 
        case when hasil14=2 then COUNT(hasil14)
        when hasil14=2 then COUNT(hasil14)
        else 'hasil tidak ada' end as hitungcukup14 from kuesioners where     hasil14=2 AND id_dosen='$id' GROUP BY id_dosen, hasil14");  
        
        $hasilbaik14= DB::select("
        select id_dosen,hasil14, 
        case when hasil14=3 then COUNT(hasil14)
        when hasil14=3 then COUNT(hasil14)
        else 0 end as hitungbaik14 from kuesioners where hasil14=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil14"); 

        $hasilsgbaik14= DB::select("
        select id_dosen,hasil14, 
        case when hasil14=4 then COUNT(hasil14)
        when hasil14=4 then COUNT(hasil14)
        else 0 end as hitungsgbaik14 from kuesioners where hasil14=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil14"); 

        //pertanyaan 15
        $hasilkurang15= DB::select("
        select id_dosen,hasil15, 
        case when hasil15=1 then COUNT(hasil15)
        when hasil15=1 then COUNT(hasil15)
        else 'hasil tidak ada' end as hitungkurang15 from kuesioners where    hasil15=1 AND id_dosen='$id' GROUP BY id_dosen, hasil15");

        $hasilcukup15= DB::select("
        select id_dosen,hasil15, 
        case when hasil15=2 then COUNT(hasil15)
        when hasil15=2 then COUNT(hasil15)
        else 'hasil tidak ada' end as hitungcukup15 from kuesioners where     hasil15=2 AND id_dosen='$id' GROUP BY id_dosen, hasil15");  
        
        $hasilbaik15= DB::select("
        select id_dosen,hasil15, 
        case when hasil15=3 then COUNT(hasil15)
        when hasil15=3 then COUNT(hasil15)
        else 0 end as hitungbaik15 from kuesioners where hasil15=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil15"); 

        $hasilsgbaik15= DB::select("
        select id_dosen,hasil15, 
        case when hasil15=4 then COUNT(hasil15)
        when hasil15=4 then COUNT(hasil15)
        else 0 end as hitungsgbaik15 from kuesioners where hasil15=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil15"); 

        //pertanyaan 16

        $hasilkurang16= DB::select("
        select id_dosen,hasil16, 
        case when hasil16=1 then COUNT(hasil16)
        when hasil16=1 then COUNT(hasil16)
        else 'hasil tidak ada' end as hitungkurang16 from kuesioners where    hasil16=1 AND id_dosen='$id' GROUP BY id_dosen, hasil16");

        $hasilcukup16= DB::select("
        select id_dosen,hasil16, 
        case when hasil16=2 then COUNT(hasil16)
        when hasil16=2 then COUNT(hasil16)
        else 'hasil tidak ada' end as hitungcukup16 from kuesioners where     hasil16=2 AND id_dosen='$id' GROUP BY id_dosen, hasil16");  
        
        $hasilbaik16= DB::select("
        select id_dosen,hasil16, 
        case when hasil16=3 then COUNT(hasil16)
        when hasil16=3 then COUNT(hasil16)
        else 0 end as hitungbaik16 from kuesioners where hasil16=3 AND id_dosen='$id' GROUP BY    id_dosen, hasil16"); 

        $hasilsgbaik16= DB::select("
        select id_dosen,hasil16, 
        case when hasil16=4 then COUNT(hasil16)
        when hasil16=4 then COUNT(hasil16)
        else 0 end as hitungsgbaik16 from kuesioners where hasil16=4 AND id_dosen='$id' GROUP BY  id_dosen, hasil16"); 

        return view('hasil',compact('dosen','kuisioner', 'hasilkurang', 'hasilcukup', 'hasilbaik','hasilsgbaik', 'hasilkurang2', 'hasilcukup2', 'hasilbaik2', 'hasilsgbaik2', 
        'hasilkurang3', 'hasilcukup3', 'hasilbaik3', 'hasilsgbaik3',
        'hasilkurang4', 'hasilcukup4', 'hasilbaik4', 'hasilsgbaik4',
        'hasilkurang5', 'hasilcukup5', 'hasilbaik5', 'hasilsgbaik5',
        'hasilkurang6', 'hasilcukup6', 'hasilbaik6', 'hasilsgbaik6',
        'hasilkurang7', 'hasilcukup7', 'hasilbaik7', 'hasilsgbaik7',
        'hasilkurang8', 'hasilcukup8', 'hasilbaik8', 'hasilsgbaik8',
        'hasilkurang9', 'hasilcukup9', 'hasilbaik9', 'hasilsgbaik9',
        'hasilkurang10', 'hasilcukup10', 'hasilbaik10', 'hasilsgbaik10',
        'hasilkurang11', 'hasilcukup11', 'hasilbaik11', 'hasilsgbaik11',
        'hasilkurang12', 'hasilcukup12', 'hasilbaik12', 'hasilsgbaik12',
        'hasilkurang13', 'hasilcukup13', 'hasilbaik13', 'hasilsgbaik13',
        'hasilkurang14', 'hasilcukup14', 'hasilbaik14', 'hasilsgbaik14',
        'hasilkurang15', 'hasilcukup15', 'hasilbaik15', 'hasilsgbaik15',
        'hasilkurang16', 'hasilcukup16', 'hasilbaik16', 'hasilsgbaik16'
        
    ));
       
    }
    public function listdosen(){
        $dosen=Dosen::All();
        return view('hasildosen',compact('dosen'));
    }
    public function showkuesioner(){
        $pertanyaan= Pertanyaan::All();
        $kuesioner = Kuesioner::All();
            return view('hasilkuesioner',compact('kuesioner','pertanyaan'));
        
    }
    Public function hasilnilai($id){
        $hasil= DB::select("
        select id_dosen,hasil1, 
        case when hasil1='1' then count(hasil1)
        when hasil1='1' then count(hasil1) 
        else 'hasil tidak ada' end as hitung from kuesioners where hasil1='1'");
    }
    
    
}
