<?php
include "database/connection.php";
?>
            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col">
                        <h3>Karyawan</h3>
                    </div>
                    <div class="col">
                        <a href="?page=karyawantambah" class="btn btn-success float-end">
                            <i class="fa fa-plus-circle"></i>
                            Tambah
                        </a>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <?php
                        $selectSQL = "SELECT K.*,B.nama nama_bagian FROM karyawan K
                                        LEFT JOIN bagian B ON K.bagian_id = B.id";
                        $result = mysqli_query($connection, $selectSQL);
                        if (!$result){
                        ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo mysqli_error($connection) ?>
                            </div>
                        <?php
                            return;
                        }
                        if (mysqli_num_rows($result) == 0) {
                        ?>
                            <div class="alert alert-light" role="alert">
                                Data kosong
                            </div>
                        <?php
                            return;
                        }
                        ?>
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">NIK</th>
                                    <th scope="col">Nama Karyawan</th>
                                    <th scope="col">Bagian</th>
                                    <th scope="col" width="200">Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($row = mysqli_fetch_assoc($result)){
                                ?>
                                    <tr class="align-middle">
                                        <td>
                                            <?php echo $row["nik"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["nama"] ?>
                                        </td>
                                        <td>
                                            <?php echo $row["nama_bagian"] ?>
                                        </td>
                                        <td>
                                            <a href="?page=karyawanubah&nik=<?php echo $row["nik"] ?>" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                                Ubah
                                            </a>
                                            <a href="?page=karyawanhapus&nik=<?php echo $row["nik"] ?>" 
                                                onclick="javascript: return confirm('Konfirmasi Data Akan Dihapus');"
                                                class="btn btn-danger">
                                                <i class="fa fa-trash"></i>
                                                Hapus
                                            </a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>