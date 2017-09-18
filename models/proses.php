<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Task 1 : Stemming Porter Bahasa Indonesia Dari Sebuah Lirik Lagu</title>

	<!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Stylesheets -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/reset/reset.css"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/bootstrap/bootstrap.min.css"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/plugins/jquery.filer.css?v=1.3.0"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/plugins/themes/jquery.filer-dragdropbox-theme.css?v=1.3.0"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/plugins/prettify/tomorrow.css"> -->
<!--     <link rel="stylesheet" type="text/css" href="http://filer.grandesign.md/css/custom.css?v=1.3.0"> -->

    <!-- Scripts -->
<!--     <script src="http://filer.grandesign.md/js/jquery/jquery.min.js" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/bootstrap.min.js" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/jquery.filer.js?v=1.3.0" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/prettify.js" type="text/javascript"></script> -->
<!--     <script src="http://filer.grandesign.md/js/scripts/scripts.js?v=1.3.0" type="text/javascript"></script> -->
<!--     <script src="./static/src/js/custom.js" type="text/javascript"></script> -->

	<!-- Offline Mode -->
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/reset.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/jquery.filer.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/jquery.filer-dragdropbox-theme.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/vendor/tomorrow.css">
	    <link rel="stylesheet" type="text/css" href="./static/src/css/custom.css">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
	    <script src="./static/src/js/vendor/jquery.min.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/bootstrap.min.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/jquery.filer.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/prettify.js" type="text/javascript"></script>
	    <script src="./static/src/js/vendor/scripts.js" type="text/javascript"></script>
	    <script src="./static/src/js/custom.js" type="text/javascript"></script>
    <!-- -->

	<style type="text/css">
		table {
		  border-collapse: separate;
		  border-spacing: 0 5px;
		}
		
		thead th {
		  background-color: #006DCC;
		  color: white;
		}
		
		tbody td {
		  background-color: #EEEEEE;
		  color: black;
		}
		
		tr td:first-child,
		tr th:first-child {
		  border-top-left-radius: 6px;
		  border-bottom-left-radius: 6px;
		}
		
		tr td:last-child,
		tr th:last-child {
		  border-top-right-radius: 6px;
		  border-bottom-right-radius: 6px;
		}
		.col:hover{background-color:#FF0; cursor:pointer;}
	</style>
</head>
<body>
<section id="home-section">
   <div class="home-inner row">
      <div class="col-md-8">
         <h1 id="plugin-name" class="font-title">Eka Wahyu N</h1>
         <p id="plugin-description">Kumpulan Tugas / Demo dari Mata Kuliah Sistem Temu Kembali Informasi <hr> List of Tasks / Demo by Lesson Class Information Retrieval System</p>
      </div>
   </div>
   <div class="home-faceimg"></div>
</section>
<section id="section1" class="section-white">
   <div class="container">
      <div class="row">
      	 <div class="col-md-4">
      	 	<?php
      	 		$url = "/php-projects/index.html";
      	 		echo '<a class="btn-custom green" href="' . $url . '">Back</a>';
      	 	?>
      	 </div>
         <div class="col-md-12">
         <center><h2>Result Algoritma Stemming Porter Bahasa Indonesia : </h2></center><hr/>
		  <table class="table table-hover">
		    <thead>
		      <tr>
				<th>No</th>
				<th>Inputan</th>
				<th>Hapus Partikel</th>
				<th>Hapus Posessive Pronoun</th>
				<th>Hapus Awalan 1</th>
				<th>Hapus Awalan 2</th>
				<th>Kata Dasar Porter</th>
				<th>Kata Dasar Nazief</th>
		      </tr>
		    </thead>
		    <tbody>
				<?php
					$awal = microtime(true);
					$path_lib_stemming = $_SERVER['DOCUMENT_ROOT'] . "/php-projects/models/stemming.php";
					$path_lib_nazief = $_SERVER['DOCUMENT_ROOT'] . "/php-projects/models/AJAX_SERVER_stemming.php";
					$path_lib_pdftotext = $_SERVER['DOCUMENT_ROOT'] . "/php-projects/models/class.pdf2text.php";
					$path_lib_pdftotext2 = $_SERVER['DOCUMENT_ROOT'] . "/php-projects/models/class.pdf.php";
					$path_lib_file_pdf = $_SERVER['DOCUMENT_ROOT'] . "/php-projects/models/Kewirausahaan.php";
// 					$path_lib_enchanced_cs =  $_SERVER['DOCUMENT_ROOT'] . "/php-projects/models/Enhanced_CS.php";
					include($path_lib_stemming);
					include($path_lib_nazief);
					include($path_lib_pdftotext);
// 					include($path_lib_enchanced_cs);
					$a = new PDF2Text();
					$a->setFilename('Kewirausahaan.pdf');
					$a->decodePDF();
					echo $a->output();
					$file     = $directory.'/'.$filename;
					$fileinfo = pathinfo($path_lib_file_pdf);
					$content  = "";
					
// 					// pdt to text
					if($fileinfo['extension'] == 'pdf')
					{
					   $outpath = preg_replace("/\.pdf$/", "", $file).".txt";
					   system("pdftotext -enc UTF-8 ".escapeshellcmd($file), $ret);
					   if($ret == 0) {
					      $content = file_get_contents($outpath);
					      unlink($outpath);
					   }
					}
					$output = shell_exec('ls -l');
					echo "<pre>";
					echo $output;
					echo "</pre>";
					if(isset($_POST['submit'])){
					    $files_by_path = $_FILES['uploaded-file']['tmp_name'];
					    $files_by_name = $_FILES['uploaded-file']['name'];
					    $filename = "";
					    $file = null;
					    if($files_by_name && $files_by_path){
					        foreach($files_by_name as $file){
					            $filename = $file;
					        }
					        foreach ($files_by_path as $file){
					            $file = $file;
					        }
					        $getcontent = file_get_contents($file);
					        $someWords  = strtolower($getcontent);

					        /* ini proses insert ke tabel korpus */
					        $dbhost = 'localhost';
					        $dbuser = 'root';
					        $dbpass = '';
					        $koneksi = mysqli_connect($dbhost, $dbuser, $dbpass,'stbi');
					        if(! $koneksi )
					        {
					            die('Gagal Koneksi: ' . mysqli_error($koneksi));
					        }
					        $sql = 'INSERT INTO korpus '.
									        '(namafile, pathfile, isi) '.
									        'VALUES ("'.$filename.'", "'.$file.'", "'.$someWords.'")';
					        $result = mysqli_query($koneksi, $sql);
					        if(!$result){
					            $wordChunks = preg_split('/[\s]+/', $someWords);
					            $no = 0;
					            for($i = 0; $i < count($wordChunks); $i++){
					                $word = $wordChunks[$i];
					                $warna = "#DFE3FF";
					                if($warna=="#DFE3FF"){$warna="#ffffff";}else{$warna="#DFE3FF";}
					                
					                /* proses filter stopword menghilangkan kata hubung terhadap term atau kata
					                 * dengan membandingkan pada tabel stoplist saat sebelum dilakukan proses stemming
					                 */
					                $sql = "SELECT stoplist from tb_stoplist where stoplist = '$word'";
					                $result = mysqli_query($koneksi, $sql);
					                $stopword = mysqli_fetch_array($result, MYSQLI_ASSOC);
					                if($stopword['stoplist'] != $word){
					                    
					                    // fungsi mencari kata dasar menggunakan porter & nazief
					                    $partikel_removed = hapuspartikel($word);
					                    $pp_removed = hapuspp($partikel_removed);
					                    $prefix_one_removed = hapusawalan1($pp_removed);
					                    $prefix_two_removed = hapusawalan2($prefix_one_removed);
					                    $stemming_porter_final = hapusakhiran($prefix_two_removed);
					                    $stemming_nazief_final = NAZIEF($word);
					                    
					                    if($stemming_nazief_final || $stemming_porter_final){
					                        $no++;
					                        echo "<tr align='center' bgcolor='$warna' class='col'>
												<td>$no</td>
												<td>$word</td>
												<td>".$partikel_removed."</td>
												<td>".$pp_removed."</td>
												<td>".$prefix_one_removed."</td>
												<td>".$prefix_two_removed."</td>
												<td>".$stemming_porter_final."</td>
												<td>".$stemming_nazief_final."</td>
											</tr>";
					                    }
					                }
					            }
					        }
					        else{
					            $wordChunks = preg_split('/[\s]+/', $someWords);
					            $no = 0;
					            for($i = 0; $i < count($wordChunks); $i++){
					                $word = $wordChunks[$i];
					                $warna = "#DFE3FF";
					                if($warna=="#DFE3FF"){$warna="#ffffff";}else{$warna="#DFE3FF";}
					                // insert to tabel token
					                $sql = 'INSERT INTO tb_token '.
									                '(korpus_id, term) '.
									                'VALUES ("'.$filename.'", "'.$word.'")';
					                mysqli_query($koneksi, $sql);
					                
					                /* proses filter stopword menghilangkan kata hubung terhadap term atau kata
					                 * dengan membandingkan pada tabel stoplist saat sebelum dilakukan proses stemming
					                 */
					                $sql = "SELECT stoplist from tb_stoplist where stoplist = '$word'";
					                $result = mysqli_query($koneksi, $sql);
					                $stopword = mysqli_fetch_array($result, MYSQLI_ASSOC);
					                if($stopword['stoplist'] != $word){
					                    
					                    // fungsi mencari kata dasar menggunakan porter & nazief
					                    $partikel_removed = hapuspartikel($word);
					                    $pp_removed = hapuspp($partikel_removed);
					                    $prefix_one_removed = hapusawalan1($pp_removed);
					                    $prefix_two_removed = hapusawalan2($prefix_one_removed);
					                    $stemming_porter_final = hapusakhiran($prefix_two_removed);
					                    $stemming_nazief_final = NAZIEF($word);
					                    
					                    if($stemming_nazief_final || $stemming_porter_final){
					                        $no++;
					                        // insert to tabel stemming
					                        $sql = 'INSERT INTO tb_stemming '.
									                        '(Stopword_id, Term_porter, Term_nazief) '.
									                        'VALUES ("'.$word.'", "'.$stemming_porter_final.'", "'.$stemming_nazief_final.'")';
					                        mysqli_query($koneksi, $sql);
					                        echo "<tr align='center' bgcolor='$warna' class='col'>
												<td>$no</td>
												<td>$word</td>
												<td>".$partikel_removed."</td>
												<td>".$pp_removed."</td>
												<td>".$prefix_one_removed."</td>
												<td>".$prefix_two_removed."</td>
												<td>".$stemming_porter_final."</td>
												<td>".$stemming_nazief_final."</td>
											</tr>";
					                    }
					                }
					                else{
					                    // insert to tabel stopword
					                    $sql = 'INSERT INTO tb_stopword'.
									                    '(Term) '.
									                    'VALUES ("'.$stopword['stoplist'].'")';
					                    mysqli_query($koneksi, $sql);
					                }
					            }
					        }
					        /* Selesai */
					    }
					    // proses count term frequency
					    $tf_query = 'SELECT token.term as term, token.korpus_id, count(token.korpus_id) as frekuensi from tb_token token '.
									    'join korpus korpus on token.korpus_id = korpus.namafile where korpus.namafile = "'.$filename.'" GROUP BY token.term, token.korpus_id';
					    $result_tf = mysqli_query($koneksi, $tf_query);
					    $term_frequencies = mysqli_fetch_all($result_tf, MYSQLI_ASSOC);
					    foreach($term_frequencies as $tf){
					        $sql = 'INSERT INTO tb_term_frequency'.
									        '(Term, Korpus_id, Frekuensi) '.
									        'VALUES ("'.$tf['term'].'", "'.$tf['korpus_id'].'", "'.$tf['frekuensi'].'")';
					        mysqli_query($koneksi, $sql);
					    }
					    
					    // always truncate table of document frequency first
					    $truncate_df_query = 'TRUNCATE TABLE tb_document_frequency';
					    mysqli_query($koneksi, $truncate_df_query);
					    
					    // insert with new one
					    $df_query = 'SELECT term, count(Frekuensi) as DF, log( (SELECT count(namafile) from korpus) / count(Frekuensi)) as IDF from tb_term_frequency GROUP BY Term';
					    $result_df = mysqli_query($koneksi, $df_query);
					    $document_frequencies = mysqli_fetch_all($result_df, MYSQLI_ASSOC);
					    foreach($document_frequencies as $df){
					        $sql = 'INSERT INTO tb_document_frequency'.
									        '(Term, Df, Idf) '.
									        'VALUES ("'.$df['term'].'", "'.$df['DF'].'", "'.$df['IDF'].'")';
					        mysqli_query($koneksi, $sql);
					    }
					    
					    // always truncate table of ranking per terms first
					    $truncate_rd_query = 'TRUNCATE TABLE tb_ranking_term';
					    mysqli_query($koneksi, $truncate_rd_query);
					    
					    // process to set ranking per terms
					    $rank_query_per_terms = 'SELECT tf.Term as Term, tf.Korpus_id as Korpus_id, (tf.Frekuensi * df.Idf) as Ranking '.
									    'FROM tb_term_frequency tf JOIN tb_document_frequency df ON tf.term = df.Term';
					    $ranking_terms = mysqli_fetch_all(mysqli_query($koneksi, $rank_query_per_terms), MYSQLI_ASSOC);
					    foreach($ranking_terms as $rank_term){
					        $sql = 'INSERT INTO tb_ranking_term'.
									        '(Term, Korpus_id, Ranking) '.
									        'VALUES ("'.$rank_term['Term'].'", "'.$rank_term['Korpus_id'].'", "'.$rank_term['Ranking'].'")';
					        mysqli_query($koneksi, $sql);
					    }
					    
					    // always truncate table of ranking document first
					    $truncate_trd_query = 'TRUNCATE TABLE tb_ranking_document';
					    mysqli_query($koneksi, $truncate_trd_query);
					    
					    // process to set ranking per document
					    $rank_query_per_doc = 'SELECT SUM(ranking) as Ranking, Korpus_id FROM tb_ranking_term GROUP BY korpus_id';
					    $ranking_documents = mysqli_fetch_all(mysqli_query($koneksi, $rank_query_per_doc), MYSQLI_ASSOC);
					    foreach($ranking_documents as $rank_doc){
					        $sql = 'INSERT INTO tb_ranking_document'.
									        '(Document_id, Ranking) '.
									        'VALUES ("'.$rank_doc['Korpus_id'].'", "'.$rank_doc['Ranking'].'")';
					        mysqli_query($koneksi, $sql);
					    }
					}
					$akhir = microtime(true);
					mysqli_close($koneksi);
				?>
		    </tbody>
		  </table><hr/>
		 <b><center><?php $lama = $akhir-$awal; echo "Lama Proses Stemming : $lama detik"; ?></center></b>
         </div>
      </div>
   </div>
</section>
</body>
</html>