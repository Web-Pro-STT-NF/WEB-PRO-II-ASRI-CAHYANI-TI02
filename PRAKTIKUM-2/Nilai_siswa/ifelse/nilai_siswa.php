<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Nilai Siswa</title>
</head>
<body>
<div class="m-5 p-5 border border-primary rounded">
    <form method="POST" autocomplete="off" action="nilai_siswa.php">
        <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-address-card"></i>
                </div>
                </div> 
            <input id="nama" name="nama" placeholder="Masukan Nama Lengkap Anda" type="text" class="form-control" required="required">
            </div>
        </div>
        </div>
            <div class="form-group row">
        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
        <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select" required="required">
            <option value="pilih">Pilih Matkul</option>
            <option value="DDP">Dasar dasar pemograman</option>
            <option value="pemweb">Pemograman Web</option>
            <option value="Jarkom">Jaringan Komputer</option>
            </select>
        </div>
            </div>
        <div class="form-group row">
        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
        <div class="col-8">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-adjust"></i>
            </div>
            </div> 
            <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
            </div>
        </div>
        </div>
        <div class="form-group row">
        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
        <div class="col-8">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-adjust"></i>
                </div>
            </div> 
            <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS Anda" type="number" class="form-control" required="required">
            </div>
        </div>
        </div>
        <div class="form-group row">
        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
        <div class="col-8">
            <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                <i class="fa fa-adjust"></i>
                </div>
            </div> 
            <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktkum Anda" type="number" class="form-control" required="required">
            </div>
        </div>
        </div> 
        <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="simpan" type="simpan" class="btn btn-primary">Simpan</button>
        </div>
        </div>
    </form>
    </div>
    <div class="m-5 p-5 border border-primary rounded">
        <?php
        $nama= isset($_POST['nama']) ? $_POST['nama'] : '';
        $matkul=isset($_POST['matkul']) ? $_POST['matkul'] : '';
        $nilai_tugas=isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
        $nilai_uts=isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
        $nilai_uas=isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
        $_nilai= isset($_POST['_nilai']) ? $_POST['_nilai'] : '';
        echo "Nama Lengkap : $nama <br>" ;
        echo "Nilai UTS : $nilai_uts <br>" ;
        echo "Nilai UAS : $nilai_uas <br>" ;
        echo "Nilai Tugas/Praktikum : $nilai_tugas <br>" ;
        if ($_nilai >= 85 || $_nilai <= 100) {
            echo "Grade : A <br>" ;
            echo "Kelulusan : LULUS" ;
        } elseif ($_nilai >= 74 || $_nilai <= 84) {
            echo "Grade : B <br>" ;
            echo "Kelulusan : LULUS" ;
        } elseif ($_nilai >= 56 || $_nilai <= 69) {
            echo "Grade : C <br>" ;
            echo "Kelulusan : LULUS" ;
        } elseif ($_nilai >= 36 || $_nilai <= 55) {
            echo "Grade : D <br>" ;
            echo "Kelulusan : TIDAK LULUS" ;
        } elseif ($_nilai >= 0 || $_nilai <= 35) {
            echo "grade : E <br>" ;
            echo "Kelulusan : TIDAK LULUS" ;
        } else {
            echo "Grade : I" ;
        }
    
        ?>
    </div>
</body>
</html>