<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\LihatUkt;

class ProsesHitungController extends Controller
{
    //

    public function viewfcm()
    {
        return view('prosesfcm');
    }

    public function ambilDataAwal()
    {
    	//INISIALISASI DATA AWAL
        $t = 3;
        $error = 0.01;
        $P = 0;
        $id_prodi_tawar = 1;

        for ($i=0; $i <= $t; $i++) { 
            # code...
            if($i==0)
            {
                // PROSES 1 AMBIL DATA YANG AKAN DIOLAH; NB:Data yang diolah ialah data yang dinyatakan Valid
                $jawabanMhs = DB::select('SELECT
                                        `mn`.`no_peserta`,
                                        `jm1`.`skor` AS jawaban1,
                                        `jm2`.`skor` AS jawaban2,
                                        `jm3`.`skor` AS jawaban3,
                                        `jm4`.`skor` AS jawaban4,
                                        `jm5`.`skor` AS jawaban5,
                                        `jm6`.`jawaban_mhs` AS jawaban6,
                                        `jm7`.`skor` AS jawaban7,
                                        `jm8`.`jawaban_mhs` AS jawaban8,
                                        `jm9`.`skor` AS jawaban9,
                                        `jm10`.`skor` AS jawaban10,
                                        `jm11`.`skor` AS jawaban11,
                                        `jm12`.`skor` AS jawaban12,
                                        `jm13`.`skor` AS jawaban13,
                                        `jm14`.`skor` AS jawaban14,
                                        `jm15`.`jawaban_mhs` AS jawaban15,
                                        `jm16`.`jawaban_mhs` AS jawaban16,
                                        `jm17`.`jawaban_mhs` AS jawaban17,
                                        `jm18`.`jawaban_mhs` AS jawaban18
                                    FROM
                                        `m_mhs_new` AS `mn`
                                    INNER JOIN `t_jawaban_mhs` AS `jm1` ON `mn`.`no_peserta` = `jm1`.`id_mhs`
                                    AND jm1.id_pertanyaan = 20
                                    INNER JOIN `t_jawaban_mhs` AS `jm2` ON `mn`.`no_peserta` = `jm2`.`id_mhs`
                                    AND jm2.id_pertanyaan = 21
                                    INNER JOIN `t_jawaban_mhs` AS `jm3` ON `mn`.`no_peserta` = `jm3`.`id_mhs`
                                    AND jm3.id_pertanyaan = 22
                                    INNER JOIN `t_jawaban_mhs` AS `jm4` ON `mn`.`no_peserta` = `jm4`.`id_mhs`
                                    AND jm4.id_pertanyaan = 24
                                    INNER JOIN `t_jawaban_mhs` AS `jm5` ON `mn`.`no_peserta` = `jm5`.`id_mhs`
                                    AND jm5.id_pertanyaan = 25
                                    INNER JOIN `t_jawaban_mhs` AS `jm6` ON `mn`.`no_peserta` = `jm6`.`id_mhs`
                                    AND jm6.id_pertanyaan = 26
                                    INNER JOIN `t_jawaban_mhs` AS `jm7` ON `mn`.`no_peserta` = `jm7`.`id_mhs`
                                    AND jm7.id_pertanyaan = 27
                                    INNER JOIN `t_jawaban_mhs` AS `jm8` ON `mn`.`no_peserta` = `jm8`.`id_mhs`
                                    AND jm8.id_pertanyaan = 28
                                    INNER JOIN `t_jawaban_mhs` AS `jm9` ON `mn`.`no_peserta` = `jm9`.`id_mhs`
                                    AND jm9.id_pertanyaan = 40
                                    INNER JOIN `t_jawaban_mhs` AS `jm10` ON `mn`.`no_peserta` = `jm10`.`id_mhs`
                                    AND jm10.id_pertanyaan = 41
                                    INNER JOIN `t_jawaban_mhs` AS `jm11` ON `mn`.`no_peserta` = `jm11`.`id_mhs`
                                    AND jm11.id_pertanyaan = 42
                                    INNER JOIN `t_jawaban_mhs` AS `jm12` ON `mn`.`no_peserta` = `jm12`.`id_mhs`
                                    AND jm12.id_pertanyaan = 43
                                    INNER JOIN `t_jawaban_mhs` AS `jm13` ON `mn`.`no_peserta` = `jm13`.`id_mhs`
                                    AND jm13.id_pertanyaan = 44
                                    INNER JOIN `t_jawaban_mhs` AS `jm14` ON `mn`.`no_peserta` = `jm14`.`id_mhs`
                                    AND jm14.id_pertanyaan = 45
                                    INNER JOIN `t_jawaban_mhs` AS `jm15` ON `mn`.`no_peserta` = `jm15`.`id_mhs`
                                    AND jm15.id_pertanyaan = 46
                                    INNER JOIN `t_jawaban_mhs` AS `jm16` ON `mn`.`no_peserta` = `jm16`.`id_mhs`
                                    AND jm16.id_pertanyaan = 47
                                    INNER JOIN `t_jawaban_mhs` AS `jm17` ON `mn`.`no_peserta` = `jm17`.`id_mhs`
                                    AND jm17.id_pertanyaan = 48
                                    INNER JOIN `t_jawaban_mhs` AS `jm18` ON `mn`.`no_peserta` = `jm18`.`id_mhs`
                                    AND jm18.id_pertanyaan = 49
                                    WHERE
                                        `id_prodi_tawar` = '.$id_prodi_tawar.'
                                    AND status_valid = 1;');

                echo "Matriks Data Awal Mahasiswa";
                echo "<br/>";
                echo '<table border="1" >';
                echo "<tr>";
                    echo "<th>No</th>";
                    echo "<th>No.Peserta</th>";
                    echo "<th>Pekerjaan Ayah</th>";
                    echo "<th>Pekerjaan Ibu</th>";
                    echo "<th>Status Rumah Tinggal</th>";
                    echo "<th>Luas Bangunan</th>";
                    echo "<th>Kondisi Rumah</th>";
                    echo "<th>Avg. Air 3 Bulan</th>";
                    echo "<th>Penerangan/Listrik</th>";
                    echo "<th>Avg. Listrik 3 Bulan</th>";
                    echo "<th>Rek.Telp rumah+internet</th>";
                    echo "<th>Jumlah Pemakaian Pulsa Hp.sekeluarga</th>";
                    echo "<th>Total tabungan & deposito</th>";
                    echo "<th>Total Nilai emas</th>";
                    echo "<th>Total Premi Asuransi</th>";
                    echo "<th>Total Investasi Lainnya</th>";
                    echo "<th>Nilai Total Mobil</th>";
                    echo "<th>Nilai Sepeda Motor</th>";
                    echo "<th>Jumlah Tanggungan orang tua</th>";
                    echo "<th>Total Penghasilan Keluarga</th>";
                echo"</tr>";
                foreach ($jawabanMhs as $key => $data) {
                    # code...
                    echo "<tr>";
                        echo "<td>".$key."</td>";
                        echo "<td>".$data->no_peserta."</td>";
                        echo "<td>".$data->jawaban1."</td>";
                        echo "<td>".$data->jawaban2."</td>";
                        echo "<td>".$data->jawaban3."</td>";
                        echo "<td>".$data->jawaban4."</td>";
                        echo "<td>".$data->jawaban5."</td>";
                        echo "<td>".$data->jawaban6."</td>";
                        echo "<td>".$data->jawaban7."</td>";
                        echo "<td>".$data->jawaban8."</td>";
                        echo "<td>".$data->jawaban9."</td>";
                        echo "<td>".$data->jawaban10."</td>";
                        echo "<td>".$data->jawaban11."</td>";
                        echo "<td>".$data->jawaban12."</td>";
                        echo "<td>".$data->jawaban13."</td>";
                        echo "<td>".$data->jawaban14."</td>";
                        echo "<td>".$data->jawaban15."</td>";
                        echo "<td>".$data->jawaban16."</td>";
                        echo "<td>".$data->jawaban17."</td>";
                        echo "<td>".$data->jawaban18."</td>";
                    echo "</tr>";
                }
                echo '</table>';
                echo '<br/>';
                echo '<br/>';
            }
            //PROSES 3 GENERATE MATRIKS U dan MATRIKS U^2
            //proses ini fix tidak berubah berapapun banyaknya data
           if($i>0)
           {
                foreach ($matriksUBaru as $key1 => $isiBaru) {
                    # code...
                    //debug($matriksUBaru);
                    foreach ($isiBaru as $key2 => $value) {
                        # code...
                        //debug($value);
                        $u1[$key2] = $value;
                        $u2[$key2] = $value * $value;
                    }

                    $matriks1[$key1] = (object) array($key1 => $u1);
                    $matriks2[$key1] = (object) array($key1 => $u2);
                }
           }else{
                foreach ($jawabanMhs as $key => $value) {
                    # code...
                    $number_of_groups   = 5;
                    $sum_to             = 100;
                    $groups             = array();
                    $u1                 = array();
                    $u2                 = array();
                    $group              = 0;
                    while(array_sum($groups) != $sum_to)
                    {
                        $groups[$group] = mt_rand(0, $sum_to/mt_rand(1,5));
                        $u1[$group] = $groups[$group] / 100;
                        $u2[$group] = $u1[$group] * $u1[$group];
                        if(++$group == $number_of_groups)
                        {
                            $group  = 0;
                        }
                    }
                    $matriks1[$key] = (object) array($key => $u1);
                    $matriks2[$key] = (object) array($key => $u2);
                   
                }
            }
            //debug($matriks2);
            
            if($i==0)
            {
                echo "Matriks Awal yang dibangkitkan";
            }else
            {
                echo "Matriks U iterasi ke -".$i;
            }
            
            echo "<br/>";
            echo '<table border="1" >';
            echo "<tr>";
                echo "<th>No.(0-n)</th>";
                echo "<th>nilai U(0,n)</th>";
                echo "<th>nilai U(1,n)</th>";
                echo "<th>nilai U(2,n)</th>";
                echo "<th>nilai U(3,n)</th>";
                echo "<th>nilai U(4,n)</th>";
            echo"</tr>";
            foreach ($matriks1 as $key => $data) {
                # code...
                echo "<tr>";
                    echo "<td>".$key."</td>";
                    foreach ($data as $key => $nilaiU) {
                        # code...
                        echo "<td>".$nilaiU['0']."</td>";
                        echo "<td>".$nilaiU['1']."</td>";
                        echo "<td>".$nilaiU['2']."</td>";
                        echo "<td>".$nilaiU['3']."</td>";
                        echo "<td>".$nilaiU['4']."</td>";
                        //var_dump($nilaiU);
                    }
                echo "</tr>";
            }
            echo '</table>';
            echo '<br/>';
            echo '<br/>';

            if($i==0)
            {
                echo "Matriks U^2 Awal";
            }else
            {
                echo "Matriks U^2 iterasi ke -".$i;
            }
            echo "<br/>";
            echo '<table border="1" >';
            echo "<tr>";
                echo "<th>No.(0-n)</th>";
                echo "<th>nilai U(0,n)</th>";
                echo "<th>nilai U(1,n)</th>";
                echo "<th>nilai U(2,n)</th>";
                echo "<th>nilai U(3,n)</th>";
                echo "<th>nilai U(4,n)</th>";
            echo"</tr>";
            foreach ($matriks2 as $key => $data) {
                # code...
                echo "<tr>";
                    echo "<td>".$key."</td>";
                    foreach ($data as $key => $nilaiU) {
                        # code...
                        echo "<td>".$nilaiU['0']."</td>";
                        echo "<td>".$nilaiU['1']."</td>";
                        echo "<td>".$nilaiU['2']."</td>";
                        echo "<td>".$nilaiU['3']."</td>";
                        echo "<td>".$nilaiU['4']."</td>";
                        //var_dump($nilaiU);
                    }
                echo "</tr>";
            }
            echo '</table>';
            echo '<br/>';
            echo '<br/>';

            //PROSES 4 Hitung pusat Cluster
            //4.1 mengambil jawaban mahasiswa menjadi 1 kolom, tiap kolom dibuat menjadi array, jadi jika ingin menambahkan pertanyaan tambah lagi data arraynya, sendangkan nilai U sudah fix.
            foreach ($jawabanMhs as $key => $value) {
               # code...
                $data0[$key] = $value->jawaban1;
                $data1[$key] = $value->jawaban2;
                $data2[$key] = $value->jawaban3;
                $data3[$key] = $value->jawaban4;
                $data4[$key] = $value->jawaban5;
                $data5[$key] = $value->jawaban6;
                $data6[$key] = $value->jawaban7;
                $data7[$key] = $value->jawaban8;
                $data8[$key] = $value->jawaban9;
                $data9[$key] = $value->jawaban10;
                $data10[$key] = $value->jawaban11;
                $data11[$key] = $value->jawaban12;
                $data12[$key] = $value->jawaban13;
                $data13[$key] = $value->jawaban14;
                $data14[$key] = $value->jawaban15;
                $data15[$key] = $value->jawaban16;
                $data16[$key] = $value->jawaban17;
                $data17[$key] = $value->jawaban18;

                foreach ($matriks2 as $key => $data) {
                    foreach ($data as $key => $nilaiU) {
                        $nilaiU0[$key] = $nilaiU['0'];
                        $nilaiU1[$key] = $nilaiU['1'];
                        $nilaiU2[$key] = $nilaiU['2'];
                        $nilaiU3[$key] = $nilaiU['3'];
                        $nilaiU4[$key] = $nilaiU['4'];
                    }
                }
            }
            //mengubah nilai U menjadi object
            $col = (object) array('0' => $nilaiU0, '1'=> $nilaiU1 , '2'=> $nilaiU3,'3' => $nilaiU3, '4' => $nilaiU4);
            //debug($col);

            //membuat data pembagi total U^2 tiap kolom, kemudian data pembagi dimasukkan dalam bentuk array
            $totalUcolom0 = 0;
            foreach ($nilaiU0 as $key => $value) {
                # code...
                $totalUcolom0 = $totalUcolom0 + $value;
            }
            $totalU[0] = $totalUcolom0;
            $totalUcolom1 = 0;
            foreach ($nilaiU1 as $key => $value) {
                # code...
                $totalUcolom1 = $totalUcolom1 + $value;
            }
            $totalU[1] = $totalUcolom1;
            $totalUcolom2 = 0;
            foreach ($nilaiU2 as $key => $value) {
                # code...
                $totalUcolom2 = $totalUcolom2 + $value;
            }
            $totalU[2] = $totalUcolom2;
            $totalUcolom3 = 0;
            foreach ($nilaiU3 as $key => $value) {
                # code...
                $totalUcolom3 = $totalUcolom3 + $value;
            }
            $totalU[3] = $totalUcolom3;
            $totalUcolom4 = 0;
            foreach ($nilaiU4 as $key => $value) {
                # code...
                $totalUcolom4 = $totalUcolom4 + $value;
            }
            $totalU[4] = $totalUcolom4;

            //debug($totalU);

            //menghitung pusat cluster, $jumlahKali bergantung banyaknya jawaban mhs yg akan diolah. matriks V dibentuk dalam bentuk object dimana $key merupakan bnyaknya baris dimana baris ini adalah banyaknya cluster yang telah fix dan array didalam object merukapan nilai V tiap kolom sehingga terbentuk matriks 2 dimensi.
            foreach ($col as $key => $colValue) {
                # code...
                $jumlahKali0= 0;
                $jumlahKali1= 0;
                $jumlahKali2= 0;
                $jumlahKali3= 0;
                $jumlahKali4= 0;
                $jumlahKali5= 0;
                $jumlahKali6= 0;
                $jumlahKali7= 0;
                $jumlahKali8= 0;
                $jumlahKali9= 0;
                $jumlahKali10= 0;
                $jumlahKali11= 0;
                $jumlahKali12= 0;
                $jumlahKali13= 0;
                $jumlahKali14= 0;
                $jumlahKali15= 0;
                $jumlahKali16= 0;
                $jumlahKali17= 0;
                foreach ($colValue as $key2 => $valueU) {
                    # code...
                    $jumlahKali0= $jumlahKali0 + ($valueU*$data0[$key2]);
                    $jumlahKali1= $jumlahKali1 + ($valueU*$data1[$key2]);
                    $jumlahKali2= $jumlahKali2 + ($valueU*$data2[$key2]);
                    $jumlahKali3= $jumlahKali3 + ($valueU*$data3[$key2]);
                    $jumlahKali4= $jumlahKali4 + ($valueU*$data4[$key2]);
                    $jumlahKali5= $jumlahKali5 + ($valueU*$data5[$key2]);
                    $jumlahKali6= $jumlahKali6 + ($valueU*$data6[$key2]);
                    $jumlahKali7= $jumlahKali7 + ($valueU*$data7[$key2]);
                    $jumlahKali8= $jumlahKali8 + ($valueU*$data8[$key2]);
                    $jumlahKali9= $jumlahKali9 + ($valueU*$data9[$key2]);
                    $jumlahKali10= $jumlahKali10 + ($valueU*$data10[$key2]);
                    $jumlahKali11= $jumlahKali11 + ($valueU*$data11[$key2]);
                    $jumlahKali12= $jumlahKali12 + ($valueU*$data12[$key2]);
                    $jumlahKali13= $jumlahKali13 + ($valueU*$data13[$key2]);
                    $jumlahKali14= $jumlahKali14 + ($valueU*$data14[$key2]);
                    $jumlahKali15= $jumlahKali15 + ($valueU*$data15[$key2]);
                    $jumlahKali16= $jumlahKali16 + ($valueU*$data16[$key2]);
                    $jumlahKali17= $jumlahKali17 + ($valueU*$data17[$key2]);
                   
                }

                $matriksV[$key] = (object) array('0' => $jumlahKali0/$totalU[$key],
                                                '1' => $jumlahKali1/$totalU[$key],
                                                '2' => $jumlahKali2/$totalU[$key],
                                                '3' => $jumlahKali3/$totalU[$key],
                                                '4' => $jumlahKali4/$totalU[$key],
                                                '5' => $jumlahKali5/$totalU[$key],
                                                '6' => $jumlahKali6/$totalU[$key],
                                                '7' => $jumlahKali7/$totalU[$key],
                                                '8' => $jumlahKali8/$totalU[$key],
                                                '9' => $jumlahKali9/$totalU[$key],
                                                '10' => $jumlahKali10/$totalU[$key],
                                                '11' => $jumlahKali11/$totalU[$key],
                                                '12' => $jumlahKali12/$totalU[$key],
                                                '13' => $jumlahKali13/$totalU[$key],
                                                '14' => $jumlahKali14/$totalU[$key],
                                                '15' => $jumlahKali15/$totalU[$key],
                                                '16' => $jumlahKali16/$totalU[$key],
                                                '17' => $jumlahKali17/$totalU[$key],);
                
            }
            
            //menampilkan matriks V=pusat cluster
            if($i==0)
            {
                echo "Matriks V";
            }else
            {
                echo "Matriks V iterasi ke-".$i;
            }
            echo "<br/>";
            echo '<table border="1" >';
            echo "<tr>";
                echo "<th>Vkj</th>";
                echo "<th>0</th>";
                echo "<th>1</th>";
                echo "<th>2</th>";
                echo "<th>3</th>";
                echo "<th>4</th>";
                echo "<th>5</th>";
                echo "<th>6</th>";
                echo "<th>7</th>";
                echo "<th>8</th>";
                echo "<th>9</th>";
                echo "<th>10</th>";
                echo "<th>11</th>";
                echo "<th>12</th>";
                echo "<th>13</th>";
                echo "<th>14</th>";
                echo "<th>15</th>";
                echo "<th>16</th>";
                echo "<th>17</th>";
            echo"</tr>";
            foreach ($matriksV as $key => $data) {
                # code...
                echo "<tr>";
                    echo "<td>".$key."</td>";
                    foreach ($data as $key => $nilaiV) {
                        # code...
                        echo "<td>".$nilaiV."</td>";
                    }
                echo "</tr>";
                
            }
            echo '</table>';
            //debug($matriksV);


            //PROSES 5 Menghitung Fungsi Objektif
            //5.1 mengambil SUM dari tiap data dikali dengan setiap V
            foreach ($jawabanMhs as $key1 => $jawaban) {
                # code...
                $isijawaban['0'] = $jawaban->jawaban1;
                $isijawaban['1'] = $jawaban->jawaban2;
                $isijawaban['2'] = $jawaban->jawaban3;
                $isijawaban['3'] = $jawaban->jawaban4;
                $isijawaban['4'] = $jawaban->jawaban5;
                $isijawaban['5'] = $jawaban->jawaban6;
                $isijawaban['6'] = $jawaban->jawaban7;
                $isijawaban['7'] = $jawaban->jawaban8;
                $isijawaban['8'] = $jawaban->jawaban9;
                $isijawaban['9'] = $jawaban->jawaban10;
                $isijawaban['10'] = $jawaban->jawaban11;
                $isijawaban['11'] = $jawaban->jawaban12;
                $isijawaban['12'] = $jawaban->jawaban13;
                $isijawaban['13'] = $jawaban->jawaban14;
                $isijawaban['14'] = $jawaban->jawaban15;
                $isijawaban['15'] = $jawaban->jawaban16;
                $isijawaban['16'] = $jawaban->jawaban17;
                $isijawaban['17'] = $jawaban->jawaban18;

                //debug($isijawaban);

                $sum1 = 0;
                foreach ($matriksV as $key2 => $data) {
                    # code...
                    $sum2 = 0;
                    foreach ($data as $key3 => $nilaiV) {
                        # code...
                        $sum2 = $sum2 + ($nilaiV*$isijawaban[$key3]);
                    }
                    $sumArr[$key2] = $sum2;
                }
                $sum[$key1] = (object) array($key1 => $sumArr);
                //debug($sum);
            }
            //var_dump($matriks2);
            //debug($sum);
            //debug($matriks2);
            //$matriks2Baru;
            //$totalSumPangkatMin1 = 0;
            $Pnew = 0;
            $values = json_decode(json_encode($sum), true);

            foreach ($values as $key1 => $value) {
                # code...
                //echo $key;
                $totalSumPangkatMin1[$key1] = 0;
                foreach ($matriks2 as $key2 => $dataMatriks2) {
                    //debug($dataMatriks2);
                    if($key2 == $key1){
                        foreach ($dataMatriks2 as $key3 => $isiDataMatriks2) {

                            foreach ($isiDataMatriks2 as $key4 => $isiIsiDataMatriks2) {
                                $sumPangkatMin1[$key1][$key4] = pow($value[$key1][$key4], -1);
                                $totalSumPangkatMin1[$key1] = $totalSumPangkatMin1[$key1] + $sumPangkatMin1[$key1][$key4];
                                $hasilKali[$key1][$key4] = $isiIsiDataMatriks2 * $value[$key1][$key4];
                                $Pnew = $Pnew + $hasilKali[$key1][$key4];

                                //$isiIsiDataMatriks2 = $matriks2Baru[$key1][$key4];
                            }
                            foreach ($isiDataMatriks2 as $key4 => $isiIsiDataMatriks2) {
                                $matriksUBaru[$key1][$key4] = $sumPangkatMin1[$key1][$key4] / $totalSumPangkatMin1[$key1];
                                $matriksU2Baru[$key1][$key4] = ($sumPangkatMin1[$key1][$key4] / $totalSumPangkatMin1[$key1]) * ($sumPangkatMin1[$key1][$key4] / $totalSumPangkatMin1[$key1]);
                            }
                        }
                    }
                }
            }
            echo "<br/> nilai fungsi objektif P iterasi ke-".$i." = ".$Pnew."<br/> <br/>";

            $marginP = $Pnew - $P;
            if($marginP < $error || $i == $t-1)
            {
                if($marginP < $error)
                {
                    echo "Kondisi Error Sudah Memenuhi pada iterasi ke-".$i." dengan nilai error = ".$marginP;
                }else{
                    echo "Sudah Mencapai iterasi maksimum yang ke-".$t;
                }
                
                echo '<br/>';
                echo '<br/>';

                echo "Matriks U Akhir";
                echo '<br/>';
                echo '<table border="1" >';
                echo "<tr>";
                    echo "<th>No.(0-n)</th>";
                    echo "<th>nilai U(0,n)</th>";
                    echo "<th>nilai U(1,n)</th>";
                    echo "<th>nilai U(2,n)</th>";
                    echo "<th>nilai U(3,n)</th>";
                    echo "<th>nilai U(4,n)</th>";
                echo"</tr>";
                foreach ($matriksUBaru as $key => $baris) {
                    # code...
                    echo "<tr>";
                        echo "<td>".$key."</td>";
                        foreach ($baris as $key => $kolom) {
                            # code...
                            echo "<td>".$kolom."</td>";
                        }
                    echo "</tr>";
                }
                echo '</table>';
                echo '<br/>';
                echo '<br/>';

                echo "Matriks U^2 Akhir";
                echo '<br/>';
                echo '<table border="1" >';
                echo "<tr>";
                    echo "<th>No.(0-n)</th>";
                    echo "<th>nilai U(0,n)</th>";
                    echo "<th>nilai U(1,n)</th>";
                    echo "<th>nilai U(2,n)</th>";
                    echo "<th>nilai U(3,n)</th>";
                    echo "<th>nilai U(4,n)</th>";
                echo"</tr>";
                foreach ($matriksU2Baru as $key => $baris) {
                    # code...
                    echo "<tr>";
                        echo "<td>".$key."</td>";
                        foreach ($baris as $key => $kolom) {
                            # code...
                            echo "<td>".$kolom."</td>";
                        }
                    echo "</tr>";
                }
                echo '</table>';
                echo '<br/>';
                echo '<br/>';

                echo "Cluster UKT Mahasiswa";
                echo "<br/>";
                echo '<table border="1" >';
                echo "<tr>";
                    echo "<th>No.</th>";
                    echo "<th>Mahasiswa</th>";
                    echo "<th>Cluster</th>";
                echo"</tr>";
               
                    foreach ($jawabanMhs as $key => $mhs) {
                        # code...
                        echo"<tr>";
                        $nilaiCluster = 0;
                        $cluster = 0;
                        foreach ($matriksUBaru[$key] as $key2 => $value) {
                            # code...
                            //debug($value);
                            if($value > $nilaiCluster)
                            {
                                $nilaiCluster = $value;
                                $cluster = $key2;
                            }
                        }

                        LihatUkt::where('no_peserta','=',$mhs->no_peserta)
                                        ->update(
                                        array(
                                                'hasil_cluster' => $cluster
                                            )
                                    );
                            echo "<th>".$key."</th>";
                            echo "<th>".$mhs->no_peserta."</th>";
                            echo "<th>".$cluster."</th>";
                        echo"</tr>";
                    }
                
                echo '</table>';
                echo '<br/>';
                echo '<br/>';
                
                
                break;
            }


        }

         //mencari nilai compactness and separation index xie beni
                foreach ($matriksV as $key1 => $values) {
                    # code...
                    //mencari compactness
                    $compact = 0;
                    echo "Tabel Nilai Compactness Index Xie Beni Cluster ke -".$key1;
                    echo "<br/>";
                    echo '<table border="1" >';
                    echo "<tr>";
                        echo "<th>No.</th>";
                        echo "<th>Data 1</th>";
                        echo "<th>Data 2</th>";
                        echo "<th>Data 3</th>";
                        echo "<th>Data 4</th>";
                        echo "<th>Data 5</th>";
                        echo "<th>Data 6</th>";
                        echo "<th>Data 7</th>";
                        echo "<th>Data 8</th>";
                        echo "<th>Data 9</th>";
                        echo "<th>Data 10</th>";
                        echo "<th>Data 11</th>";
                        echo "<th>Data 12</th>";
                        echo "<th>Data 13</th>";
                        echo "<th>Data 14</th>";
                        echo "<th>Data 15</th>";
                        echo "<th>Data 16</th>";
                        echo "<th>Data 17</th>";
                        echo "<th>Data 18</th>";
                    echo"</tr>";



                    foreach ($jawabanMhs as $key3 => $jawabans) {
                    # code...
                        echo'<tr>';
                        echo '<td>'.$key3.'</td>';
                        foreach ($matriksU2Baru as $key4 => $matriksU2) {
                            # code...
                            $arrMatriksU2[$key4] = $matriksU2[$key1];
                        }
                        $i=0;
                        foreach ($jawabans as $key => $jawaban) {
                            # code...
                            //debug($jawaban);
                            $isi[$i] = $jawaban;
                            $i++;
                        }
                        foreach ($values as $key2 => $value) {
                            # code...
                            $compact = $compact + ($arrMatriksU2[$key3]*(pow(abs($isi[$key2 + 1]-$value), 2)));
                            echo '<td>'.$arrMatriksU2[$key3].'*ABS ('.$isi[$key2 + 1].'-'.$value.')^2 = '.($arrMatriksU2[$key3]*(pow(abs($isi[$key2 + 1]-$value), 2))).'</td>';
                           
                        }

                        echo'</tr>';
                    }
                    echo '</table>';
                    echo '<br/>';
                    echo '<br/>';

                    $compactness[$key1] = $compact;
                    
                    //end compactness

                    //membuat separation
                    # code...
                    //$arrNilaiMinCluster = array();
                    echo "Tabel Nilai Separation Index Xie Beni Cluster ke -".$key1;
                    echo "<br/>";
                    echo '<table border="1" >';
                    echo "<tr>";
                        echo "<th>Vkj</th>";
                        foreach ($values as $key2 => $baris) {
                            # code...
                            echo '<td>'.$baris.'</td>';
                            $arrBaris[$key2] = $baris;
                        }
                    echo "</tr>";
                    foreach ($values as $key5 => $kolom) {
                        # code...
                        //$arrNilaiBaris = array();
                        //$arrNilaiMinBaris = array();
                        echo'<tr>';
                            echo '<td>'.$kolom.'</td>';
                            foreach ($values as $key6 => $value) {
                                # code...
                                //echo '<td>'.$kolom.'-'.$arrBaris[$key4].'</td>';
                                $nilai = pow(abs($kolom-$arrBaris[$key6]),2);
                                echo'<td>'.$nilai.'</td>';
                                if($nilai > 0 )
                                {
                                    $arrNilaiBaris[$key6] = $nilai;
                                    //debug($arrNilaiBaris);
                                }
                            }
                            $arrNilaiMinBaris[$key5] = min($arrNilaiBaris);
                             
                          
                        echo'</tr>';
                      
                    }
                    //debug($arrNilaiMinBaris); 
                    $arrNilaiMinCluster[$key1] = min($arrNilaiMinBaris);

                    echo"</table>";
                    echo"<br/>";
                    //end separation
                }
                //debug($compactness);
                //debug($arrNilaiMinCluster);

                echo 'Nilai Index Xie Beni';
                echo '<table border="1">';
                    echo'<tr>';
                        echo'<td>Cluster</td>';
                        echo'<td>Compactness</td>';
                        echo'<td>Separation</td>';
                        echo'<td>Index Xie Beni</td>';
                    echo'</tr>';
                        foreach ($compactness as $key => $valuecompact) {
                            # code...
                        $index_xie_beni[$key] = $valuecompact*$arrNilaiMinCluster[$key];
                        echo '<tr>';
                            echo '<td>'.$key.'</td>';
                            echo '<td>'.$valuecompact.'</td>';
                            echo '<td>'.$arrNilaiMinCluster[$key].'</td>';
                            echo '<td>'.$index_xie_beni[$key].'</td>';
                        echo'</tr>';
                        }
                
                echo '</table>';
                echo '<br/>';
                echo '<br/>';

                asort($index_xie_beni);
                foreach($index_xie_beni as $x => $x_value) {
                     echo "Key=" . $x . ", Value=" . $x_value;
                     echo "<br>";
                }

                foreach ($jawabanMhs as $key => $mhs) {
                    # code...
                    // echo"<tr>";
                    $no_peserta = $mhs->no_peserta;

                    $ClusterMhs = LihatUkt::select('hasil_cluster')->where('no_peserta','=',$no_peserta)->first();
                    
                    $i=1;
                    foreach($index_xie_beni as $x => $x_value) {
                        if($x == $ClusterMhs['hasil_cluster'])
                        {
                            LihatUkt::where('no_peserta','=',$mhs->no_peserta)
                                ->update(
                                array(
                                        'ukt_cluster_xie_beni' => $i,
                                        'hasil_terakhir' => $i
                                    )
                            );
                        }
                    $i++;
                    }
                }
       
    }

}
