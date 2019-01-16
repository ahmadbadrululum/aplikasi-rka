
<?php
Class R_bulan extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load->model(array('Model_komponen','Model_subkomponen','Model_divisi','Model_suboutput','Model_rencana','Model_detail'));
    }

    function tampilkan_divisi($iddivisi){
        if (isset($_POST['submit'])) {
            $data = $this->Model_rencana->simpan();
            redirect('r_bulan/tampilkan_divisi',$data);
        }
        else
        {
            $data['judul']       = 'RKAPe';
            $data['subjudul']    = 'Form Penyusunan';
            $data['suboutput']   = $this->Model_suboutput->tampilkan_data($iddivisi);
            $data['komponen']    = $this->Model_komponen->tampilkan_data($iddivisi);
            $data['subkomponen'] = $this->Model_subkomponen->tampilkan_data($iddivisi);
            $data['bulan_total'] = $this->Model_rencana->bulan_total();
            $data['divisi']      = $this->Model_divisi->tampilkan_data();
            $data['record']      = $this->Model_rencana->tampilkan_divisi($iddivisi);
            $this->template->load('template','div/v_sda',$data);
            // $this->template->load('template','rekap/v_laporan',$data);
        }
    }

    function rincian(){
        if (isset($_POST['submit'])) {
            // $maxiddivisi = $this->Model_divisi->getmaxid();
            // $maxidsuboutput = $this->Model_suboutput->getmaxid();
            // $maxidkomponen = $this->Model_komponen->getmaxid();
            // $maxidsubkomponen = $this->Model_subkomponen->getmaxid();
            // $maxiddetail = $this->Model_detail->getmaxid();
            $divisi = $this->Model_divisi->tampilkan_data()->result();
            // var_dump($divisi);
            foreach ($divisi as $key1) {
                $suboutput = $this->Model_suboutput->tampilkan_data($key1->id_divisi)->result();
                // var_dump($suboutput);
                foreach ($suboutput as $key2 ) {
                    $komponen = $this->Model_komponen->tampilkan_data($key2->id_suboutput)->result();
                    // var_dump($komponen);
                    foreach ($komponen as $key3 ) {
                        $subkomponen = $this->Model_subkomponen->tampilkan_data($key3->id_komponen)->result();
                            // var_dump($subkomponen);
                        foreach ($subkomponen as $key4 ) {
                            $detail = $this->Model_detail->tampilkan_data($key4->id_subkomponen)->result();
                            foreach ($detail as $key5 ) {
                                // var_dump($detail);
                                if($this->input->post('qty-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true) != ''){
                                    $qty = $this->input->post('qty-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true);
                                }else{
                                    $qty = NULL;
                                }

                                if($this->input->post('satuan-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true) != ''){
                                    $satuan = $this->input->post('satuan-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true);
                                }else{
                                    $satuan = NULL;
                                }

                                if ($this->input->post('frq-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true) != '' ) {
                                    $frq = $this->input->post('frq-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true);
                                }else{
                                    $frq = NULL;
                                }

                                if ($this->input->post('anggaran-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true) != '') {
                                    $anggaran = $this->input->post('anggaran-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen.'-'.$key5->id_detail,true);
                                }else{
                                    $anggaran = NULL;
                                }

                                $data = array(
                                    'qty' => $qty,
                                    'satuan' => $satuan, 
                                    'frq' => $frq,
                                    'anggaran' => $anggaran
                                    );
                                $this->Model_detail->update($data,$key5->id_detail);
                            }
                            if($this->input->post('date-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true) != ''){
                                $tgl_realisasi = date("Y-m-d", strtotime($this->input->post('date-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true)));
                            }else{
                                $tgl_realisasi = NULL;
                            }
                            if($this->input->post('qty-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true) != ''){
                                $qty = $this->input->post('qty-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true);
                            }else{
                                $qty = NULL;
                            }

                            if ($this->input->post('satuan-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true) != '') {
                                $satuan = $this->input->post('satuan-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true);
                            }else{
                                $satuan = NULL;
                            }

                            if ($this->input->post('frq-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true) != '' ) {
                                $frq = $this->input->post('frq-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true);
                            }else{
                                $frq = NULL;
                            }

                            if ($this->input->post('anggaran-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true) !=  '' ) {
                                $anggaran = $this->input->post('anggaran-'.$key1->id_divisi.'-'.$key2->id_suboutput.'-'.$key3->id_komponen.'-'.$key4->id_subkomponen,true);
                            }else{
                                $anggaran = NULL;
                            }

                            $data = array(
                                'tgl_realisasi'  => $tgl_realisasi ,
                                'qty'   => $qty,
                                'satuan'=>  $satuan,
                                'frq'   =>  $frq,
                                'anggaran'=> $anggaran
                                );
                            $this->Model_subkomponen->update($data,$key4->id_subkomponen);
                        }
                    }
                }
            }
            // var_dump($divisi);
            // echo $this->input->post('date-1-30-25-67',true);
            // $pecah = explode('-', $this->input->post('satuan-1-30-25-38',true));

            // $data = $this->Model_rencana->simpan();
            redirect('r_bulan/rincian',$data);
        }
        else
        {
            $data['judul']       = 'RKAPe';
            $data['subjudul']    = 'Form Penyusunan';   
            $data['divisi']      = $this->Model_divisi->tampilkan_data()->result();
            $data['suboutput']   = $this->Model_suboutput->tampilkan_suboutput()->result(); 
            $data['komponen']    = $this->Model_komponen->tampilkan_komponen()->result();
            $data['subkomponen'] = $this->Model_subkomponen->tampil()->result(); 
            $data['detail']      = $this->Model_detail->tampilkan_detail()->result(); 
            // var_dump($data['subkomponen']);
            $this->template->load('template','rekap/v_laporan',$data);

        }
    }
    

    function rekap()
    {
        $data['divisi']      = $this->Model_divisi->tampilkan_data()->result();
        $data['suboutput']   = $this->Model_suboutput->tampilkan_suboutput()->result(); 
        $data['contents'] = 'r_bulan/v_rekapitulasi';
        $this->template->load('template','rekap/v_rekapitulasi',$data);
    }


    // function rekapi(){
    //     if (isset($_POST['submit'])) { 
    //         $date   = $this->input->post('nama');
    //         $date   = $this->input->post('nama');
    //         redirect('r_bulan/rekap');
    //     }
    //     else
    //     {
    //         $data['judul']       = 'RKAPe';
    //         $data['subjudul']    = 'Form Penyusunan';   
    //         $data['divisi']      = $this->Model_divisi->tampilkan_data()->result();
    //         $data['suboutput']   = $this->Model_suboutput->tampilkan_suboutput()->result(); 
    //         $data['komponen']    = $this->Model_komponen->tampilkan_komponen()->result();
    //         $data['subkomponen'] = $this->Model_subkomponen->tampil()->result(); 
    //         $data['detail']      = $this->Model_detail->tampilkan_detail()->result(); 
    //         $this->template->load('template','rekap/v_laporan',$data);

            // Kodingan ka aris untuk menampilkan semua data ada 5 data 
            // $list[0][0][0][0][0] = "";
            // $divisi['id_divisi'][0]=$divisi['deskripsi'][0]='';
            // $suboutput['id_suboutput'][0][0]=$suboutput['nama_suboutput'][0][0]='';   
            // $komponen['id_komponen'][0][0][0]=$komponen['nama_komponen'][0][0][0]='';
            // $subkomponen['id_subkomponen'][0][0][0][0]=$subkomponen['nama_subkomponen'][0][0][0][0]='';
            // $detail['id_detail'][0][0][0][0][0]=$detail['nama_detail'][0][0][0][0][0]='';                                                                        
            // // untuk meluping bawah
            // $i=$j=$k=$l=$m=0;
            // $cekdivisi = $this->Model_divisi->tampilkan_data();
            // foreach ($cekdivisi as $key1) {
            //     $ceksuboutput = $this->Model_suboutput->getby_iddivisi($key1->id_divisi);
            //     $divisi['id_divisi'][$i]=$key1->id_divisi;
            //     $divisi['deskripsi'][$i]=$key1->deskripsi;                
            //     $j=0;
            //     foreach ($ceksuboutput as $key2) { 
            //         $cekkomponen = $this->Model_komponen->getby_idsuboutput($key2->id_suboutput);
            //         $suboutput['id_suboutput'][$i][$j]=$key2->id_suboutput;
            //         $suboutput['nama_suboutput'][$i][$j]=$key2->nama_suboutput;  
            //         $k=0;
            //         foreach ($cekkomponen as $key3) {
            //             $ceksubkomponen = $this->Model_subkomponen->getby_idkomponen($key3->id_komponen);
            //             $komponen['id_komponen'][$i][$j][$k]=$key3->id_komponen;
            //             $komponen['nama_komponen'][$i][$j][$k]=$key3->nama_komponen;  
            //             $l=0;
            //             foreach ($ceksubkomponen as $key4) {
            //                 $cekdetail = $this->Model_detail->getby_idsubkomponen($key4->id_subkomponen);
            //                 $subkomponen['id_subkomponen'][$i][$j][$k][$l]=$key4->id_subkomponen;
            //                 $subkomponen['nama_subkomponen'][$i][$j][$k][$l]=$key4->nama_subkomponen;  
            //                 $m=0;
            //                 foreach ($cekdetail as $key5) {
            //                     $detail['id_detail'][$i][$j][$k][$l][$m]=$key5->id_detail;

            //                     $detail['nama_detail'][$i][$j][$k][$l][$m]=$key5->nama_detail;
            //                     // echo $detail['nama_detail'][$i][$j][$k][$l][$m];
            //                     $m++;
            //                 }
            //                 $list[$i][$j][$k][$l][$m]=$key4->nama_subkomponen;
            //                 $l++;
            //             }
            //             $list[$i][$j][$k][$l][$m]=$key3->nama_komponen;
            //             $k++;
            //         }
            //         $list[$i][$j][$k][$l][$m]=$key2->nama_suboutput;
            //         $j++;
            //     }
            //     $list[$i][$j][$k][$l][$m]=$key1->deskripsi;
            //     $i++;
            // }   
            // for ($i=0; $i < sizeof($list) ; $i++) {
            //     if(!empty($divisi['id_divisi'][$i])){ 
            //         echo $divisi['id_divisi'][$i].' ';
            //         ; echo $divisi['deskripsi'][$i].'<br>';  
            //         for ($j=0; $j < sizeof($divisi); $j++) { 
            //             if(!empty($suboutput['id_suboutput'][$i][$j])){
            //                 echo '<span style = "padding-left:20px">'.$suboutput['id_suboutput'][$i][$j].'</span><>';
            //                 echo '<span style = "padding-left:20px">'.$suboutput['nama_suboutput'][$i][$j].'</span><br>';
            //                 for($k=0; $k < sizeof($komponen); $k++){
            //                     if(!empty($komponen['id_komponen'][$i][$j][$k])){
            //                         echo '<span style = "padding-left:40px">'.$komponen['id_komponen'][$i][$j][$k].'</span><>';
            //                         echo '<span style = "padding-left:40px">'.$komponen['nama_komponen'][$i][$j][$k].'</span><br>';
            //                         for($l=0; $l < sizeof($subkomponen); $l++){
            //                             if(!empty($subkomponen['id_subkomponen'][$i][$j][$k][$l])){
            //                                 echo '<span style = "padding-left:60px">'.$subkomponen['id_subkomponen'][$i][$j][$k][$l].'</span><>';
            //                                 echo '<span style = "padding-left:60px">'.$subkomponen['nama_subkomponen'][$i][$j][$k][$l].'</span><br>';
            //                                 for($m=0; $m < sizeof($detail); $m++){
            //                                     if(!empty($detail['id_detail'][$i][$j][$k][$l][$m])){
            //                                         echo '<span style = "padding-left:80px">'.$detail['id_detail'][$i][$j][$k][$l][$m].'</span><>';
            //                                         echo '<span style = "padding-left:80px">'.$detail['nama_detail'][$i][$j][$k][$l][$m].'</span><br>';
            //                                     }
            //                                 }
            //                             }
            //                         }
            //                     }
            //                 }
            //             }
            //         }
            //     }
            // }

            // var_dump($list);

            // for ($i=1; $i <= $divisi; $i++) { 
            //     // cek id divisi ($i)
            //     $ceksuboutput = $this->Model_suboutput->getby_iddivisi($i);
            //     if ($ceksuboutput) {
            //         $suboutput = 

            //        // $komponen = $this->Model_komponen->
            //         var_dump($suboutput);
            //     }
    //     }
    // }
    function delete(){
        $id     = $this->uri->segment(3);
        $this->Model_rencana->delete($id);
        redirect('r_bulan/tampilkan_divisi');
    }

}




