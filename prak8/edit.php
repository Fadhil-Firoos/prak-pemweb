<?php
$id = $_GET['id'];
$mahasiswa = mysqli_query($konek," SELECT * FROM mahasiswa WHERE id = '$id'");
$data = mysqli_fetch_array($mahasiswa);
if (isset($_POST['nama'])) {
    echo $_POST['nama'];
    $nama= $_POST['nama'];
    $nim= $_POST['nim'];
    $prodi= $_POST['prodi'];
    $email= $_POST['email'];
    $jenis_kelamin= $_POST['jenis_kelamin'];
    $tanggal_lahir= $_POST['tanggal_lahir'];
    $alamat= $_POST['alamat'];

    $tambah = mysqli_query($konek," UPDATE mahasiswa set nama='$nama', nim='$nim', prodi='$prodi', email='$email', jenis_kelamin='$jenis_kelamin', tgl_lahir='$tanggal_lahir', alamat='$alamat' WHERE id='$id'");
    echo"<script>alert('tambah data berhasil'); document.location = '?page=tabel';</script>";
}
?>
<div class="form">
            <h1>Formulir Pendafataran</h1>
            <form method="post" enctype="multipart/form-data">
                <table class="pendaftaran">
                    
                    <tr>
                        <td class="label">
                            <label for="nama">Nama</label>
                        </td>
                        <td class="in">
                            <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama" class="input" value="<?php echo $data['nama'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nim">NIM</label>
                        </td>
                        <td>
                            <input type="number" name="nim" id="nim" required placeholder="Masukkan NIM" class="input" value="<?php echo $data['nim'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prodi">Program Studi</label>
                        </td>
                        <td>
                            <input type="text" name="prodi" id="prodi" required placeholder="Masukkan Program Studi" class="input" value="<?php echo $data['prodi'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" required placeholder="Masukkan Email" class="input" value="<?php echo $data['email'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                        </td>
                        <td>
                            <select name="jenis_kelamin" id="jenis_kelamin" required  class="input select">
                                <option value="" selected>Pilih</option>
                                <option value="Laki-Laki" <?php if ($data['jenis_kelamin'] == 'Laki-Laki') echo "selected" ?>>Laki-Laki</option>
                                <option value="Perempuan" <?php if ($data['jenis_kelamin'] == 'Perempuan') echo "selected" ?>>Perempuan</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                        </td>
                        <td>
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required  class="input" value="<?php echo $data['tgl_lahir'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Alamat</label>
                        </td>
                        <td>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" required placeholder="Masukkan Alamat"  class="input"><?php echo $data['alamat'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="submit">
                                <input class="btn" type="submit" value="kirim">
                            </div>
                        </th>
                    </tr>
                </table>
            </form>
        </div>