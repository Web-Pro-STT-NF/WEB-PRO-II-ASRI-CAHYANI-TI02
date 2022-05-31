<div class="col-md-12">
 <h3>
 Daftar Mata Kuliah
 </h3>
 <table border="1" width="55%">
 <thead>
 <tr>
 <th>No</th><th>id</th><th>Kode</th><th>Nama</th>
<th>SKS</th><th>Dosen</th>
 </tr>
 </thead>
 <tbody>

 <?php
 $nomor=1;
 foreach($list_mk as $mk){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$mk->id?></td>
 <td><?=$mk->kode?></td>
 <td><?=$mk->nama?></td>
 <td><?=$mk->sks?></td>
 <td><?=$mk->dosen?></td>
 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>