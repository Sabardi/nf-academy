<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<?php
$nama = $_POST["Nama"];
$matkul = $_POST["Matkul"];
$nilai = $_POST["Nilai"];


$ket = ($nilai >=60) ? "lulus" : "gagal";

if ($nilai >= 85 && $nilai <= 100 ) {
    # code...
    $grade = "A";
}elseif($nilai >= 75 && $nilai <= 85){

    $grade = "B";
}elseif($nilai >= 65 && $nilai <= 75){

    $grade = "C";
}

switch ($grade) {
    case 'A':
        # code...
        $predikat = "memuaskan";
        break;
        case 'A':
            # code...
            $predikat = "Baik";
            break;
        case 'B':
            # code...
            $predikat = "cukup";
            break;
        case 'C':
                # code...
                $predikat = "jelek";
                break;
        default:
            # code...
            $predikat = "";
            break;
}




?>
<!-- <table border="1">
    <tr>
        <td>
            <label for="">Nama</label>
        </td>
        <td><?= $nama ?></td>
    </tr>
    <tr>
        <td>
            <label for="">matkul</label>
        </td>
        <td><?= $matkul ?></td>
    </tr>
    <tr>
        <td>
            <label for="">Nilai</label>
        </td>
        <td><?= $nilai ?></td>
    </tr>
    <tr>
        <td>
            <label for="">keterangan</label>
        </td>
        <td><?= $ket ?></td>
    </tr>
    <tr>
        <td>
            <label for="">Grade</label>
        </td>
        <td><?= $grade ?></td>
    </tr>
</table> -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-6">
			<form role="form" method="post">
				<div class="form-group">
					 
					<label for="">
						Nama
					</label>
					<input type="text" name="Nama" class="form-control" id="exampleInputEmail1" />
				</div>
                <div class="form-group">
                    <label for="">Matakuliah</label>
                <select id="Matkul" name="Matkul" class="custom-select">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="HTML">HTML</option>
                    <option value="UI/UX">UI/UX</option>
                    <option value="PHP">PHP</option>
                    <option value="Laravel">Laravel</option>
                </select>
                    </div>
                 <div class="form-group">
                     <label for="">
                         Nilai
                     </label>
                     <input type="text" name="Nilai" class="form-control" id="exampleInputEmail1" />
                 </div>
				<button type="submit" class="btn btn-primary">
					Submit
				</button>
			</form>
		</div>

		<div class="col-md-6">
			<table class="table">
				<thead>
					<tr>
						<th>
							Data
						</th>
						<th>
							keterangan
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
                        <td><Label>Nama</Label></td>
						<td>
							<?= $nama ?>
						</td>
					</tr>
                    <tr>
                        <td><Label>Matakuliah</Label></td>
						<td>
							<?= $matkul ?>
						</td>
					</tr>
                    <tr>
                        <td><label for="">keterangan</label></td>
                        <td>
                            <?= $ket ?>
                        </td>
                    </tr>
                    <tr>
                        <td><Label>Nilai</Label></td>
                        <td>
                            <?= $nilai ?>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="">grade</label></td>
                        <td>
                            <?= $grade ?>
                        </td>
                    </tr>
				</tbody>
			</table>
		</div>
	</div>
</div>