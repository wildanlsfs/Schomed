<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hasil Kerja Praktik">
    <meta name="author" content="Hery Nugroho dan Wildan Lutfi">
    <link rel="icon" href="<?php echo base_url();?>assets/img/icon.png" type="image/x-icon"/>

	<title>Schomed Indonesia - Fill Student Data</title>

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body>

	<!--  -->
	<div id="errortext"></div>
	<!--  -->

	<!-- Panel -->

	<div class="authpage">
		<div class="authpage-inner well well-lg">
			<br>
			<h1>Hello!</h1>
			<h3>Tolong Lengkapi Data Anda!</h3>
			<form class="authpage-form" id="form-fulldata" method="post" action="<?php echo base_url()?>bill">
				<div class="form-group">
					<label for="fname">Nama Lengkap</label>
					<input type="text" class="form-control" name="fname" placeholder="Nama Lengkap" required pattern="[A-Za-z].{4,}" title="Nama Minimal 4 Karakter Alphabet">
					<div id="field"></div>
				</div>
				<div class="form-group">
					<label for="jeniskelamin">Jenis Kelamin</label>
					<select class="form-control" name="jeniskelamin" form="form-fulldata">
						<option value="lakilaki">Laki-Laki</option>
						<option value="perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<label for="alamat">Alamat</label>
					<input type="text" class="form-control" name="alamat" placeholder="Alamat Lengkap (cth: Jl. Poros Tamalanrea, Perumahan BTP Blok L No. 1000 Samping Toko Anugrah))" required pattern=".{8,}" title="Masukkan Alamat Lengkap">
					<div id="field2"></div>
				</div>
				<div class="form-group">
					<label for="notelp">No Telepon</label>
					<input type="text" class="form-control" name="notelp" placeholder="No Telepon (cth:08**********)" required pattern="[0-9]{10,14}" title="Masukkan Minimal 10 Angka dan Maksimal 12 Angka">
					<div id="field3"></div>
				</div>
				<div class="form-group">
					<label for="lineID">ID Line</label>
					<input type="text" class="form-control" name="lineID" placeholder="ID LINE" required pattern=".{6,}" title="Masukkan Minimal 6 Karakter">
					<div id="field4"></div>
				</div>
				<div class="form-group">
					<label for="asalsekolah">Asal Sekolah</label>
					<input type="text" class="form-control" name="asalsekolah" placeholder="Asal Sekolah" required pattern=".{8,}" title="Masukkan Minimal 8 Karakter">
					<div id="field5"></div>
				</div>
				<div class="form-group">
					<label for="tingkatan">Tingkatan</label>
					<select class="form-control" name="tingkatan" form="form-fulldata" required title="Harap Pilih">
						<option value="" disabled selected>-- Pilih --</option>
						<option value="TK/RA">TK/RA</option>
						<option value="Kelas I (SD/MI)">Kelas I (SD/MI)</option>
						<option value="Kelas II (SD/MI)">Kelas II (SD/MI)</option>
						<option value="Kelas III (SD/MI)">Kelas III (SD/MI)</option>
						<option value="Kelas IV (SD/MI)">Kelas IV (SD/MI)</option>
						<option value="Kelas V (SD/MI)">Kelas V (SD/MI)</option>
						<option value="Kelas VI (SD/MI)">Kelas VI (SD/MI)</option>
						<option value="Kelas VII (SMP/MTs">Kelas VII (SMP/MTs)</option>
						<option value="Kelas VIII (SMP/MTs)">Kelas VIII (SMP/MTs)</option>
						<option value="Kelas IX (SMP/MTs)">Kelas IX (SMP/MTs)</option>
						<option value="Kelas X (SMA/MA)">Kelas X (SMA/MA)</option>
						<option value="Kelas XI (SMA/MA)">Kelas XI (SMA/MA)</option>
						<option value="Kelas XII (SMA/MA)">Kelas XII (SMA/MA)</option>
						<option value="ALUMNI SMA">ALUMNI SMA</option>
					</select>
				</div>
				<div class="form-group">
					<label for="paket">Paket</label>
					<select id="jumlah" class="form-control" name="banyaksiswa" form="form-fulldata" required title="Harap Pilih">
						<option value="" disabled selected>-- Pilih --</option>
					    <option value="Satu">1 Siswa</option>
					    <option value="Dua">2 Siswa</option>
					    <option value="Tiga">3 Siswa</option>
					    <option value="Empat">4 Siswa</option>
					    <option value="Lima">5 Siswa</option>
					</select>
					<br>
					<select id="time" class="form-control" name="durasibelajar" form="form-fulldata" required title="Harap Pilih">
						<option value="" disabled selected>-- Pilih --</option>
					    <option value="t60">60 Menit/Pertemuan</option>
					    <option value="t90">90 Menit/Pertemuan</option>
					    <option value="t120">120 Menit/Pertemuan</option>
					</select>
					<br>
					<select id="pertemuan" class="form-control" name="banyakpertemuan" form="form-fulldata" required title="Harap Pilih">
						<option value="" disabled selected>-- Pilih --</option>
					    <option value="3">Harian (3 Pertemuan)</option>
					    <option value="6">Mingguan (6 Pertemuan)</option>
					    <option value="12">Bulanan (12 Pertemuan)</option>
					    <option value="96">Tahunan (96 pertemuan)</option>
					</select>
					<br>
					
					<i>catatan: biaya sudah termasuk total keseluruhan siswa</i>
					<input type="text" class="form-control" name="jumlahpembayaran" id="jumlahpembayaran" value="0" readonly>
				</div>
				<div class="form-group">
					<label for="classtype">Program Pembelajaran</label>
					<select class="form-control" name="program" form="form-fulldata" id="program" required title="Harap Pilih">
						<option value="" disabled selected>-- Pilih --</option>
						<option value="osn">Kelas OSN</option>
						<option value="sbmptn">Kelas SBMPTN</option>
						<option value="persiapan">Kelas Persiapan</option>
						<option value="khusus">Kelas Khusus</option>
					</select>
					<br>
					<select class="form-control" name="classtype" form="form-fulldata" id="classtype" required title="Harap Pilih">
						<option value="" disabled selected>-- Pilih --</option>
					</select>
				</div>

				<br>
				<h3>Silahkan memilih mata pelajaran dan tentornya!	</h3>
				<i>Catatan : usahakan untuk fokus pada satu mata pelajaran, jika memilih lebih dari satu mata pelajaran, tentukan banyak pertemuan di tiap pelajaran dengan jumlah maksimal sesuai dengan paket yang anda pilih</i>
				<br>
				<br>
				<div class="form-group">
					<label for="banyakMapel">Banyak Mapel Yang Diinginkan</label>
					<select class="form-control" id="banyakMapel" name="banyakMapel" form="form-fulldata" >
						<option value="1" selected>1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</div>
				<div class="form-group">
					<label for="mapel1">Mata Pelajaran ke 1</label>
					<select class="form-control" id="mapel1" name="mapel1" form="form-fulldata" required title="Harap Pilih">
						<option value="" selected disabled>Pilih</option>
						<option value="matematika">Matematika</option>
						<option value="bindo">Bahasa Indonesia</option>
						<option value="binggi">Bahasa Inggris</option>
						<option value="biologi">Biologi</option>
						<option value="fisika">Fisika</option>
						<option value="kimia">Kimia</option>
						<option value="tpa">Tes Potensi Akademik</option>
						<option value="ipa">IPA Terpadu</option>
					</select>
					<br>
					<label for="tentor1">Tentor Mata Pelajaran Ke 1</label>
					<select class="form-control" id="tentor1" name="tentor1" form="form-fulldata"  required title="Harap Pilih">
						<option value="" selected disabled>Pilih</option>
					</select>
					<br>
					<label for="kuota1">Banyak Pertemuan Mata pelajaran ke 1</label>
					<input class="form-control" type="number" id="kuota1" name="kuota1" value="0" required title="Harap Isi Sesuai Dengan Jumlah Pertemuan" min="0" max="">
					<br>
					<div id="ke2">
						<label for="mapel2">Mata Pelajaran ke 2</label>
						<select class="form-control" id="mapel2" name="mapel2" form="form-fulldata"  required title="Harap Pilih">
							<option value="" selected disabled>Pilih</option>
							<option value="matematika">Matematika</option>
							<option value="bindo">Bahasa Indonesia</option>
							<option value="binggi">Bahasa Inggris</option>
							<option value="biologi">Biologi</option>
							<option value="fisika">Fisika</option>
							<option value="kimia">Kimia</option>
							<option value="tpa">Tes Potensi Akademik</option>
							<option value="ipa">IPA Terpadu</option>
						</select>
						<br>
						<label for="tentor2">Tentor Mata Pelajaran Ke 2</label>
						<select class="form-control" id="tentor2" name="tentor2" form="form-fulldata"  required title="Harap Pilih">
							<option value="" selected disabled>Pilih</option>
						</select>
						<br>
						<label for="kuota2">Banyak Pertemuan Mata pelajaran ke 2</label>
						<input class="form-control" type="number" id="kuota2" name="kuota2" value="0" required title="Harap Isi Sesuai Dengan Jumlah Pertemuan" min="3" max="">
					</div>
					<br>
					<div id="ke3">
						<label for="mapel3">Mata Pelajaran ke 3</label>
						<select class="form-control" id="mapel3" name="mapel3" form="form-fulldata"  required title="Harap Pilih">
							<option value="" selected disabled>Pilih</option>
							<option value="matematika">Matematika</option>
							<option value="bindo">Bahasa Indonesia</option>
							<option value="binggi">Bahasa Inggris</option>
							<option value="biologi">Biologi</option>
							<option value="fisika">Fisika</option>
							<option value="kimia">Kimia</option>
							<option value="tpa">Tes Potensi Akademik</option>
							<option value="ipa">IPA Terpadu</option>
						</select>
						<br>
						<label for="tentor3">Tentor Mata Pelajaran Ke 3</label>
						<select class="form-control" id="tentor3" name="tentor3" form="form-fulldata"  required title="Harap Pilih">
							<option value="" selected disabled>Pilih</option>
						</select>
						<br>
						<label for="kuota3">Banyak Pertemuan Mata pelajaran ke 3</label>
						<input class="form-control" type="number" id="kuota3" name="kuota3" value="0" required title="Harap Isi Sesuai Dengan Jumlah Pertemuan" min="0" max="">
					</div>
				</div>
				<button type="submit" class="authpage-button">SELANJUTNYA</button>
			</form>
		</div>
	</div>

	<!-- Script -->
	<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>assets/js/script.js"></script>
	<script>
		$(document).ready(function () {
			$('#program').change(function(){
				var val = $(this).val();
				if(val == "osn" || val == "sbmptn" || val == "persiapan"){
					$('#classtype').html('<option value="reguler">Kelas Reguler</option><option value="intensif">Kelas Intensif</option>');
				}else{
					$('#classtype').html('<option value="liburan">Kelas Liburan</option><option value="ramadhan">Kelas Ramadhan</option>)');
				} 
			});
			$('#form-fulldata').change(function (){
				var val1 = $('#jumlah').val();
				var val2 = $('#time').val();
				var val3 = $('#pertemuan').val();
				var val4 = $('#banyakMapel').val();
				var val6 = $('#kuota1').val();
				var val7 = $('#kuota2').val();
				var val8 = $('#kuota3').val();
				var max  = val3;

				if(val1 == "Satu"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  225000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  360000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  450000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Dua"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  2 * 180000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  2 * 300000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  2 * 390000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Tiga"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  3 * 135000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  3 * 240000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  3 * 33000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Empat"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  4 * 75000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  4 * 180000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  4 * 270000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    } else if(val1 == "Lima"){
			    	if(val2 == "t60"){
			    		var result = 100000 +  5 * 60000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 100000 +  5 * 150000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 100000 +  5 * 240000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val("Rp. " + result + ",00");
			    		}
			    	}
			    }
			    if(val4 == "1"){
			    	$('#kuota1').attr("max", max);
			    } else if(val4 == "2"){
			    	$('#kuota1').attr("max", max - val7);
			    	$('#kuota2').attr("max", max - val6);
			    } else if(val4 == "3"){
			    	$('#kuota1').attr("max", max - val7 - val8);
			    	$('#kuota2').attr("max", max - val6 - val8);
			    	$('#kuota3').attr("max", max - val6 - val7);
			    }
			});
		});
	</script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/additional-methods.min.js"></script>
    <script>
		$( "#form-fulldata" ).validate({
			rules: {
			},
			errorElement: 'i',
			errorContainer: {
				fname: 'field',
				alamat: 'field2',
				notelp: 'field3',
				lineID: 'field4',
				asalsekolah:'field5'
			},
			errorClass: 'errormessage'
		});
	</script>
	<script >
	    $(document).ready(function(){
	    	$('#ke2').hide();
			$('#ke3').hide();
	    	$('#banyakMapel').change(function(){
	    		var val = $(this).val();
	    		if(val == 1){
	    			$('#ke2').hide();
					$('#ke3').hide();
	    		}
	    		else if(val == 2){
	    			$('#ke2').show();
	    			$('#ke3').hide();
	    		}
	    		else if(val == 3){
	    			$('#ke2').show();
	    			$('#ke3').show();
	    		}
	    	});
	        $('#mapel1').change(function(){
	            var val 	= $(this).val();
	            var val2 	= $('#program').val();
	            var val3 	= $('#classtype').val();
	            $.ajax({
	                url : "<?php echo base_url();?>index.php/Registration/getAvailableTutorList1",
	                method : "POST",
	                data : {mapel1: val, program: val2, classtype: val3},
	                async : false,
	                dataType : 'json',
	                success: function(data){
	                    var html = '';
	                    var i;
	                    for(i=0; i<data.length; i++){
	                        html += '<option value='+data[i].ID+'>'+data[i].NamaLengkap+'</option>';
	                    }
	                    $('#tentor1').html(html);
	                }, 
	                error: function(tr){
	                	$('#errortext').html(tr.responseText);
	                }
	            });
	        });
	        $('#mapel2').change(function(){
	            var val 	= $(this).val();
	            var val2 	= $('#program').val();
	            var val3 	= $('#classtype').val();
	            $.ajax({
	                url : "<?php echo base_url();?>index.php/Registration/getAvailableTutorList2",
	                method : "POST",
	                data : {mapel2: val, program: val2, classtype: val3},
	                async : false,
	                dataType : 'json',
	                success: function(data){
	                    var html = '';
	                    var i;
	                    for(i=0; i<data.length; i++){
	                        html += '<option value='+data[i].ID+'>'+data[i].NamaLengkap+'</option>';
	                    }
	                    $('#tentor2').html(html);
	                }
	            });
	        });
	        $('#mapel3').change(function(){
	            var val 	= $(this).val();
	            var val2 	= $('#program').val();
	            var val3 	= $('#classtype').val();
	            $.ajax({
	                url : "<?php echo base_url();?>index.php/Registration/getAvailableTutorList3",
	                method : "POST",
	                data : {mapel3: val, program: val2, classtype: val3},
	                async : false,
	                dataType : 'json',
	                success: function(data){
	                    var html = '';
	                    var i;
	                    for(i=0; i<data.length; i++){
	                        html += '<option value='+data[i].ID+'>'+data[i].NamaLengkap+'</option>';
	                    }
	                    $('#tentor3').html(html);
	                }
	            });
	        });
	    });
	</script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
</body>
</html>

<!-- #038d3d -->