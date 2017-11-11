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

	<title>Schomed Indonesia</title>

	<link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">

	<link href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

</head>
<body>

	<!-- Panel -->

	<div class="authpage">
		<div class="authpage-inner well well-lg">
			<br>
			<h1>Hello <?php echo $username?>!</h1>
			<h3>Tolong Lengkapi Data Anda!</h3>
			<form class="authpage-form" id="form-fulldata" method="post" action="<?php echo base_url()?>fill_student_data_2">
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
					<input type="text" class="form-control" name="notelp" placeholder="No Telepon (cth:+628**********)" required pattern="[0-9]{10,14}" title="Masukka Minimal 10 Angka dan Maksimal 12 Angka">
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
					<select class="form-control" name="tingkatan" form="form-fulldata">
						<option value="" disabled selected>-- Pilih --</option>
						<option value="tk">TK/RA</option>
						<option value="sd1">Kelas I (SD/MI)</option>
						<option value="sd2">Kelas II (SD/MI)</option>
						<option value="sd3">Kelas III (SD/MI)</option>
						<option value="sd4">Kelas IV (SD/MI)</option>
						<option value="sd5">Kelas V (SD/MI)</option>
						<option value="sd6">Kelas VI (SD/MI)</option>
						<option value="smp1">Kelas VII (SMP/MTs)</option>
						<option value="smp2">Kelas VIII (SMP/MTs)</option>
						<option value="smp3">Kelas IX (SMP/MTs)</option>
						<option value="sma1">Kelas X (SMA/MA)</option>
						<option value="sma2">Kelas XI (SMA/MA)</option>
						<option value="sma3">Kelas XII (SMA/MA)</option>
						<option value="alumni">ALUMNI SMA</option>
					</select>
				</div>
				<div class="form-group">
					<label for="paket">Paket</label>
					<select id="jumlah" class="form-control" name="banyaksiswa" form="form-fulldata">
						<option value="" disabled selected>-- Pilih --</option>
					    <option value="seorang">1 Siswa</option>
					    <option value="duaorang">2 Siswa</option>
					    <option value="tigaorang">3 Siswa</option>
					    <option value="empatorang">4 Siswa</option>
					    <option value="limaorang">5 Siswa</option>
					</select>
					<br>
					<select id="time" class="form-control" name="durasibelajar" form="form-fulldata">
						<option value="" disabled selected>-- Pilih --</option>
					    <option value="t60">60 Menit/Pertemuan</option>
					    <option value="t90">90 Menit/Pertemuan</option>
					    <option value="t120">120 Menit/Pertemuan</option>
					</select>
					<br>
					<select id="pertemuan" class="form-control" name="banyakpertemuan" form="form-fulldata">
						<option value="" disabled selected>-- Pilih --</option>
					    <option value="3">Harian (3 Pertemuan)</option>
					    <option value="6">Mingguan (6 Pertemuan)</option>
					    <option value="12">Bulanan (12 Pertemuan)</option>
					    <option value="96">Tahunan (96 pertemuan)</option>
					</select>
					<br>
					
					<i>catatan: biaya sudah termasuk total keseluruhan siswa</i>
					<input type="hidden" class="form-control" name="jumlahpembayaran" id="jumlahpembayaran" value="0">
				</div>
				<div class="form-group">
					<label for="classtype">Program Pembelajaran</label>
					<select class="form-control" name="program" form="form-fulldata" id="program">
						<option value="" disabled selected>-- Pilih --</option>
						<option value="osn">Kelas OSN</option>
						<option value="sbmptn">Kelas SBMPTN</option>
						<option value="persiapan">Kelas Persiapan</option>
						<option value="khusus">Kelas Khusus</option>
					</select>
					<br>
					<select class="form-control" name="classtype" form="form-fulldata" id="classtype">
						<option value="" disabled selected>-- Pilih --</option>
					</select>
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
			$('#form-fulldata').submit(function (){
				var val1 = $('#jumlah').val();
				var val2 = $('#time').val();
				var val3 = $('#pertemuan').val();
				if(val1 == "seorang"){
			    	if(val2 == "t60"){
			    		var result = 225000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 360000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 450000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	}
			    } else if(val1 == "duaorang"){
			    	if(val2 == "t60"){
			    		var result = 2 * 180000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 2 * 300000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 2 * 390000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	}
			    } else if(val1 == "tigaorang"){
			    	if(val2 == "t60"){
			    		var result = 3 * 135000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 3 * 240000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 3 * 33000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	}
			    } else if(val1 == "empatorang"){
			    	if(val2 == "t60"){
			    		var result = 4 * 75000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 4 * 180000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 4 * 270000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	}
			    } else if(val1 == "limaorang"){
			    	if(val2 == "t60"){
			    		var result = 5 * 60000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t90"){
			    		var result = 5 * 150000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	} else if (val2 == "t120"){
			    		var result = 5 * 240000 * val3 / 3;
			    		if(val3 == "3"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "6"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "12"){
			    			$('#jumlahpembayaran').val(result);
			    		} else if(val3 == "96"){
			    			$('#jumlahpembayaran').val(result);
			    		}
			    	}
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
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>
</body>
</html>

<!-- #038d3d -->