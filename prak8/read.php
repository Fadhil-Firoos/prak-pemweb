<?php
$id = $_GET['id'];
$mahasiswa = mysqli_query($konek," SELECT * FROM mahasiswa WHERE id = '$id'");
$data = mysqli_fetch_array($mahasiswa);
?>
<div class="form">
            <h1>Formulir Pendafataran</h1>
                <table class="pendaftaran">
                    
                    <tr>
                        <td class="label">
                            <label for="nama">Nama</label>
                        </td>
                        <td class="in">
                            <input type="text" name="nama" id="nama" required placeholder="Masukkan Nama" class="input" value="<?php echo $data['nama'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="nim">NIM</label>
                        </td>
                        <td>
                            <input type="number" name="nim" id="nim" required placeholder="Masukkan NIM" class="input" value="<?php echo $data['nim'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="prodi">Program Studi</label>
                        </td>
                        <td>
                            <input type="text" name="prodi" id="prodi" required placeholder="Masukkan Program Studi" class="input" value="<?php echo $data['prodi'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Email</label>
                        </td>
                        <td>
                            <input type="email" name="email" id="email" required placeholder="Masukkan Email" class="input" value="<?php echo $data['email'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                        </td>
                        <td>
                            <select name="jenis_kelamin" id="jenis_kelamin" required  class="input select" disabled>
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
                            <input type="date" name="tanggal_lahir" id="tanggal_lahir" required  class="input" value="<?php echo $data['tgl_lahir'] ?>" disabled>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Alamat</label>
                        </td>
                        <td>
                            <textarea name="alamat" id="alamat" cols="30" rows="10" required placeholder="Masukkan Alamat"  class="input" disabled><?php echo $data['alamat'] ?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            <div class="submit">
                                <a href="?page=tabel" class="btn" style="text-decoration: none; background-color: grey;"><- back</a>
                            </div>
                        </th>
                    </tr>
                </table>
        </div>