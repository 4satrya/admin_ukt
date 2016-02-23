<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\LihatUkt;
use App\PersentaseUkt;

class ProsesHitungElectreController extends Controller
{
    //
    public function proses()
    {
    	$ukt = 4;
    	$id_prodi_tawar = 1;
    	#ambil jumlah mahasiswa di prodi tersebut berdasarkan data yang valid
    	$jumlahMhs = LihatUkt::where('id_prodi_tawar','=',$id_prodi_tawar)->whereNotNull('ukt_cluster_xie_beni')->count();
    	debug($jumlahMhs);
    	#ambil persentase mahasiswa ukt
    	$persentaseUkt = PersentaseUkt::select('presentase_mhs')->where('id_prodi_tawar','=',$id_prodi_tawar)->where('id_ukt','=',$ukt)->first();
    	$persentase = $persentaseUkt['presentase_mhs'];
    	debug($persentase);

    	$jumlahMhsUkt = round($jumlahMhs*($persentase/100));
    	debug($jumlahMhsUkt);
    	if($jumlahMhsUkt == 0)
    	{
    		$jumlahMhsUkt = 1;
    	}

    	if($jumlahMhs == 1)
    	{
    		LihatUkt::where('no_peserta','=',$value2->no_peserta)
                ->update(
                array(
                        'hasil_electre' => $ukt,
                        'hasil_terakhir' => $ukt
                    )
            );
            break;
    	}else if($jumlahMhsUkt > $jumlahMhs)
    	{
    		$where = 'where id_prodi_tawar = '.$id_prodi_tawar.' and status_valid = 1 and hasil_terakhir >='.$ukt;
    	}else
    	{
    		$where = 'where id_prodi_tawar = '.$id_prodi_tawar.' and status_valid = 1 and hasil_terakhir ='.$ukt;
    	}

    	#PROSES 1 AMBIL DATA YANG AKAN DIOLAH; NB:Data yang diolah ialah data yang dinyatakan Valid
        $skorJawabanMhs = DB::select('select `mn`.`no_peserta`, 
                                    `jm1`.`skor` AS skor_jawaban1,
                                    `jm2`.`skor` AS skor_jawaban2,
                                    `jm3`.`skor` AS skor_jawaban3,
                                    `jm4`.`skor` AS skor_jawaban4,
                                    `jm5`.`skor` AS skor_jawaban5,
                                    `jm6`.`skor` AS skor_jawaban6,
                                    `jm7`.`skor` AS skor_jawaban7
                                    from `m_mhs_new` as `mn` 
                                    inner join `t_jawaban_mhs` as `jm1` on `mn`.`no_peserta` = `jm1`.`id_mhs` and jm1.id_pertanyaan =24
                                    inner join `t_jawaban_mhs` as `jm2` on `mn`.`no_peserta` = `jm2`.`id_mhs` and jm2.id_pertanyaan =26
                                    inner join `t_jawaban_mhs` as `jm3` on `mn`.`no_peserta` = `jm3`.`id_mhs` and jm3.id_pertanyaan =28
                                    inner join `t_jawaban_mhs` as `jm4` on `mn`.`no_peserta` = `jm4`.`id_mhs` and jm4.id_pertanyaan =46
                                    inner join `t_jawaban_mhs` as `jm5` on `mn`.`no_peserta` = `jm5`.`id_mhs` and jm5.id_pertanyaan =47
                                    inner join `t_jawaban_mhs` as `jm6` on `mn`.`no_peserta` = `jm6`.`id_mhs` and jm6.id_pertanyaan =48
                                    inner join `t_jawaban_mhs` as `jm7` on `mn`.`no_peserta` = `jm7`.`id_mhs` and jm7.id_pertanyaan =49
                                    '.$where.';');
        

        echo "Matriks Skor Bobot Jawaban Mahasiswa";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
            echo "<th>No.Peserta</th>";
            echo "<th>Skor Jawaban 1</th>";
            echo "<th>Skor Jawaban 2</th>";
            echo "<th>Skor Jawaban 3</th>";
            echo "<th>Skor Jawaban 4</th>";
            echo "<th>Skor Jawaban 5</th>";
            echo "<th>Skor Jawaban 6</th>";
            echo "<th>Skor Jawaban 7</th>";
        echo"</tr>";
        foreach ($skorJawabanMhs as $key => $data) {
            # code...
            echo "<tr>";
                echo "<td>".$key."</td>";
                echo "<td>".$data->no_peserta."</td>";
                echo "<td>".$data->skor_jawaban1."</td>";
                echo "<td>".$data->skor_jawaban2."</td>";
                echo "<td>".$data->skor_jawaban3."</td>";
                echo "<td>".$data->skor_jawaban4."</td>";
                echo "<td>".$data->skor_jawaban5."</td>";
                echo "<td>".$data->skor_jawaban6."</td>";
                echo "<td>".$data->skor_jawaban7."</td>";
            echo "</tr>";
            //membuat data skor mendajadi kolom, array sesuai dengan bnyaknya kolom skor jawaban
            $data0[$key] = $data->skor_jawaban1;
            $data1[$key] = $data->skor_jawaban2;
            $data2[$key] = $data->skor_jawaban3;
            $data3[$key] = $data->skor_jawaban4;
            $data4[$key] = $data->skor_jawaban5;
            $data5[$key] = $data->skor_jawaban6;
            $data6[$key] = $data->skor_jawaban7;
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

        //membuat matriks skor yang baru
        $MatriksSkor = (object) array('0' => $data0, '1'=> $data1 , '2'=> $data2,'3' => $data3, '4' => $data4, '5'=>$data5, '6'=>$data6);
        foreach ($MatriksSkor as $key => $values) {
        	# code...
        	$x = 0;
        	foreach ($values as $key2 => $value) {
        		# code...
        		$x = $x + pow($value,2);
        	}
        	$arrx[$key] = $x;
        }
      
    	foreach ($arrx as $key => $value) {
    		# code...
    		$arrx[$key] = sqrt($arrx[$key]);
    		echo 'nilai x-'.$key.' = '.$arrx[$key].'<br/>';
    	}

    	//memperbaharui matriks skor jawaban mhs
    	foreach ($MatriksSkor as $key => $values) {
    		# code...
    		foreach ($values as $key2 => $value) {
    			# code...
    			if($value == 0 || $arrx[$key] == 0){
    				$arrR[$key2] = 0;
    			}else{
    				$arrR[$key2] = $value/$arrx[$key]; 
    			}
    			
    		}
    		$MatriksR[$key] = $arrR;
    	}

    	//rubah matriks R menjadi matriks barisxkolom
    	foreach ($MatriksR as $key1 => $values) {
    		# code...
    		foreach ($values as $key2 => $value) {
    			# code...
    			$baris[$key2][$key1] = $value;
    		}
    	}

        echo '<br/>';
        echo '<br/>';
    	echo "Matriks R Jawaban Mahasiswa";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
            echo "<th>R1</th>";
            echo "<th>R2</th>";
            echo "<th>R3</th>";
            echo "<th>R4</th>";
            echo "<th>R5</th>";
            echo "<th>R6</th>";
            echo "<th>R7</th>";
        echo"</tr>";
        foreach ($baris as $key1 => $values) {
            # code...
            echo "<tr>";
            	echo "<td>".$key1."</td>";
	            foreach ($values as $key2 => $value) {
	            	# code...
	            	echo "<td>".$value."</td>";
	            }
            echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';


        //nantinya bobot ini akan diambil dari database sesuai dengan programstudi masing-masing
    	$matriksBobot = array('0' => 5, '1' => 2, '2' => 2, '3' => 4, '4' => 5, '5' => 5, '6'=> 5);

    	echo "Matriks W Bobot Pertanyaan";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>W1</th>";
            echo "<th>W2</th>";
            echo "<th>W3</th>";
            echo "<th>W4</th>";
            echo "<th>W5</th>";
            echo "<th>W6</th>";
            echo "<th>W7</th>";
        echo"</tr>";
        foreach ($matriksBobot as $key1 => $value) {
            # code...
            echo '<td>'.$value.'</td>';
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

    	foreach ($baris as $key1 => $values) {
    		# code...
    		foreach ($values as $key2 => $value) {
    			# code...
    			$arrV[$key2] = $value*$matriksBobot[$key2];
    		}
    		$MatriksV[$key1] = $arrV;
    	}

    	echo "Matriks V";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
            echo "<th>V1</th>";
            echo "<th>V2</th>";
            echo "<th>V3</th>";
            echo "<th>V4</th>";
            echo "<th>V5</th>";
            echo "<th>V6</th>";
            echo "<th>V7</th>";
        echo"</tr>";
        foreach ($MatriksV as $key1 => $values) {
            # code...
            echo "<tr>";
            	echo "<td>".$key1."</td>";
	            foreach ($values as $key2 => $value) {
	            	# code...
	            	echo "<td>".$value."</td>";
	            }
            echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

        #mencari himpunan anggota concordiance dan matriks concordiance
        foreach ($MatriksV as $key1 => $values1) {
        	# code...
        	foreach ($MatriksV as $key2 => $values2) {
        		# code...
        		$himpunanC = array();
        		$nilaiC = 0;
        		if($key1 != $key2)
        		{	
        			$i=0;
        			foreach ($values1 as $key3 => $value1) {
        				# code...
        				if($value1 >= $MatriksV[$key2][$key3])
        				{
        					$himpunanC[$i] = $key3;
        					$i++;
        					$nilaiC = $nilaiC + $matriksBobot[$key3];
        				}

        			}
        			//$c[$key1][$key2] = $himpunanC;
        		}
        		#anggota himpunan concordiance
        		$c[$key1][$key2] = $himpunanC;
        		#matriks concordiance
        		$MatriksC[$key1][$key2] = $nilaiC;
        	}
        }

        #mencari himpunan anggota discordance dan matriks disconcordance
        foreach ($MatriksV as $key1 => $values1) {
        	# code...
        	foreach ($MatriksV as $key2 => $values2) {
        		# code...
        		$himpunanD = array();
        		$arrPembilang[0] = 0;
        		$arrPenyebut[0] = 0;
        		if($key1 != $key2)
        		{	
        			$i=0;
        			foreach ($values1 as $key3 => $value1) {
        				# code...
        				if($value1 < $MatriksV[$key2][$key3])
        				{
        					$arrPembilang[$i] = abs($value1 - $MatriksV[$key2][$key3]);
        					$himpunanD[$i] = $key3;
        					$i++;
        				}
        				$arrPenyebut[$key3] = abs($value1 - $MatriksV[$key2][$key3]);
        			}
        			
        		}

        		#debug($arrPembilang);
    			$pembilang = max($arrPembilang);
    			$penyebut = max($arrPenyebut);

    			//debug('nilai pembilang dari ['.$key1.']['.$key2.'] = '.$pembilang);
    			//debug('nilai penyebut dari ['.$key1.']['.$key2.'] = '.$penyebut);
    			if($pembilang == 0 || $penyebut == 0)
    			{
    				$nilaiD = 0;
    			}else{
    				$nilaiD = $pembilang/$penyebut;
    			}

        		#anggota himpunan discordance
        		$d[$key1][$key2] = $himpunanD;
        		#matriks discordance
        		$MatriksD[$key1][$key2] = $nilaiD;

        		#reset array value;
        		unset($arrPembilang);
        		unset($arrPenyebut);
        	}
        }

        echo "Matriks Concordance C";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
         foreach ($MatriksC as $key => $value) {
         	# code...
         	echo "<th>C".$key."</th>";
         }
        echo"</tr>";
            
        foreach ($MatriksC as $key1 => $values) {
            # code...
            
            echo "<tr>";
            	echo "<td>".$key1."</td>";
	            foreach ($values as $key2 => $value) {
	            	# code...
	            	echo "<td>".$value."</td>";
	            }
            echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

        echo "Matriks Discordance D";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
         foreach ($MatriksD as $key => $value) {
         	# code...
         	echo "<th>C".$key."</th>";
         }
        echo"</tr>";
        foreach ($MatriksD as $key1 => $values) {
            # code...
            echo "<tr>";
            	echo "<td>".$key1."</td>";
	            foreach ($values as $key2 => $value) {
	            	# code...
	            	echo "<td>".$value."</td>";
	            }
            echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

        #mencari nilai treshold untuk matriks dominan concordance
        $tresholdCtemp = 0;
        $M = 0;
        foreach ($MatriksC as $key => $values) {
        	# code...
        	foreach ($values as $key => $value) {
        		# code...
        		$tresholdCtemp = $tresholdCtemp + $value;
        	}
        	$M++;
        }

        $tresholdC = $tresholdCtemp/($M*($M-1));
        echo 'Nilai treshold matriks dominan concordance : '.$tresholdC;
        echo '<br/>';
        echo '<br/>';
        //debug($tresholdC);

        #memperbaharui matriks dominan concordance
        foreach ($MatriksC as $key1 => $values) {
        	# code...
        	foreach ($values as $key2 => $value) {
        		# code...
        		if($value >= $tresholdC)
        		{
        			$MatriksC[$key1][$key2] = 1;
        		}else
        		{
        			$MatriksC[$key1][$key2] = 0;
        		}
        	}
        }

        echo "Matriks Dominan Concordance C";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
         foreach ($MatriksC as $key => $value) {
         	# code...
         	echo "<th>C".$key."</th>";
         }
        echo"</tr>";
        foreach ($MatriksC as $key1 => $values) {
            # code...
            echo "<tr>";
            	echo "<td>".$key1."</td>";
	            foreach ($values as $key2 => $value) {
	            	# code...
	            	echo "<td>".$value."</td>";
	            }
            echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

		#mencari nilai treshold untuk matriks dominan discordance
        $tresholdDtemp = 0;
        $M1 = 0;
        foreach ($MatriksD as $key => $values) {
        	# code...
        	foreach ($values as $key => $value) {
        		# code...
        		$tresholdDtemp = $tresholdDtemp + $value;
        	}
        	$M1++;
        }

        $tresholdD = $tresholdDtemp/($M1*($M1-1));
        echo 'Nilai treshold matriks dominan discordance : '.$tresholdD;
        echo '<br/>';
        echo '<br/>';

        #memperbaharui matriks dominan discordance
        foreach ($MatriksD as $key1 => $values) {
        	# code...
        	foreach ($values as $key2 => $value) {
        		# code...
        		if($value >= $tresholdD)
        		{
        			$MatriksD[$key1][$key2] = 0;
        		}else
        		{
        			$MatriksD[$key1][$key2] = 1;
        		}
        	}
        }

        echo "Matriks Dominanan Discordance D";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
         foreach ($MatriksD as $key => $value) {
         	# code...
         	echo "<th>D".$key."</th>";
         }
        echo"</tr>";
        foreach ($MatriksD as $key1 => $values) {
            # code...
            echo "<tr>";
            	echo "<td>".$key1."</td>";
	            foreach ($values as $key2 => $value) {
	            	# code...
	            	echo "<td>".$value."</td>";
	            }
            echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

        #menentukan agregat dominance matriks dengan cara mengalikan matriksC dan matriksD
        foreach ($MatriksC as $key1 => $values) {
        	# code...	
        	foreach ($values as $key2 => $value) {
        		# code...
        		$MatriksE[$key1][$key2] = $value*$MatriksD[$key1][$key2];
        	}
        }

        #menghitung data mana yang mempunyai nilai 1 paling banyak
        foreach ($MatriksE as $key1 => $values) {
        	# code...
        	$nilaiE = 0;
        	foreach ($values as $key2 => $value) {
        		# code...
        		$nilaiE = $nilaiE + $value;
        	}

        	$sumE[$key1] = $nilaiE;
        }
        asort($sumE);
        //debug($sumE);

        echo "Matriks Agregat Dominance";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No</th>";
         foreach ($MatriksE as $key => $value) {
         	# code...
         	echo "<th>E".$key."</th>";
         }
        echo"</tr>";
        foreach ($MatriksE as $key1 => $values) {
            # code...
            echo "<tr>";
            	echo "<td>".$key1."</td>";
	            foreach ($values as $key2 => $value) {
	            	# code...
	            	echo "<td>".$value."</td>";
	            }
            echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';

        #mengurutkan ranking ELECTRE
        echo "Matriks Agregat Dominance";
        echo "<br/>";
        echo '<table border="1" >';
        echo "<tr>";
            echo "<th>No.Peserta</th>";
            echo "<th>Rangking</th>";
        echo"</tr>";
        $i=1;
        foreach ($sumE as $key1 => $value1) {
        	# code...
        	//debug($key);
        	echo "<tr>";
        		
	        	foreach ($skorJawabanMhs as $key2 => $value2) {
	        		# code...
	        		//debug($key2);
	        		if($key1 == $key2)
	        		{
	        			if($i <= $jumlahMhsUkt)
	        			{
	        				#update data masuk diUKT yang sama
	        				LihatUkt::where('no_peserta','=',$value2->no_peserta)
	                            ->update(
	                            array(
	                                    'hasil_electre' => $ukt,
	                                    'hasil_terakhir' => $ukt
	                                )
	                        );
	        			}else
	        			{
	        				#update data masuk diUKT berikutnya
	        				LihatUkt::where('no_peserta','=',$value2->no_peserta)
	                            ->update(
	                            array(
	                                    'hasil_electre' => $ukt+1,
	                                    'hasil_terakhir' => $ukt+1
	                                )
	                        );	
	        			}
	        			
	        			echo "<td>".$value2->no_peserta."</td>";
	        			echo "<td>".$i."</td>";
	        		}

	        	}
	        	$i++;
	        echo "</tr>";
        }
        echo '</table>';
        echo '<br/>';
        echo '<br/>';
   	}
}
