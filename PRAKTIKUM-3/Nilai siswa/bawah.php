<div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai Siswa</p>
                <hr>
            </div>
        </div>
    <div class="m-3 p-3 border">
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
    <label for="uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="uts" name="uts" placeholder="UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="uas" name="uas" placeholder="UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label> 
    <div class="col-8">
      <input id="tugas" name="tugas" placeholder="TUGAS" type="text" class="form-control">
    </div>
  </div> 
        <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="simpan" type="simpan" class="btn btn-primary">Simpan</button>
        </div>
        </div>
    </form>
    </div>
    <div class="m-3 p-3 border">
        <?php
        include_once 'libfungsi.php';
        $proses= isset($_POST['proses']) ? $_POST['proses'] : '';
        $nama= isset($_POST['nama']) ? $_POST['nama'] : '';
        $matkul=isset($_POST['matkul']) ? $_POST['matkul'] : '';
        $nilai_tugas=isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';
        $nilai_uts=isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
        $nilai_uas=isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
        $_nilai= isset($_POST['_nilai']) ? $_POST['_nilai'] : '';
        echo "</br>Nama Lengkap :  $nama " ;
        echo "</br>Nilai UTS :  $nilai_uts " ;
        echo "</br>Nilai UAS :  $nilai_uas " ;
        echo "</br>Nilai Tugas :  $nilai_tugas " ;

        $result = persentase($nilai_uts, $nilai_uas, $nilai_tugas);
        $grade_nilai = grade_nilai($result);
        echo "</br>Nilai Akhir:  $result";
        echo "</br>Status :", kelulusan($result);
        echo "</br>Grade Nilai : ", grade_nilai($result);
        echo "</br>Predikat Nilai :", Predikat_nilai($result);
        
        ?>
         </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Develop by Mahasiswa STT NF</p>
            </div>
        </div>
</div>
</body>
</html>