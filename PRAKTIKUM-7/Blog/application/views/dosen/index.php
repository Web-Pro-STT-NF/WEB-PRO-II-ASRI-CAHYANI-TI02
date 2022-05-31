<div class="col-md-12">
 <h3>
 Daftar Dosen
 </h3>
 <table border="1" width="55%">
 <thead>
 <tr>
 <th>No</th><th>Nama</th><th>NIDN</th>
<th>Pendidikan</th>
 </tr>
 </thead>
 <tbody>

 <?php
 $nomor=1;
 foreach($list_dsn as $dsn){
 ?>
 <tr>
 <td><?=$nomor?></td>
 <td><?=$dsn->nama?></td>
 <td><?=$dsn->nidn?></td>
<td><?=$dsn->pendidikan?></td>

 </tr>
 <?php
 $nomor++;
 }
 ?>
 </tbody>
 </table>
</div>