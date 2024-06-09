<?php
include "database/connection.php";
?>
            <div class="container-fluid px-4">
                <div class="row">
                    <div class="col">
                        <h3>Bagian</h3>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <?php
                        $selectSQL = "SELECT * FROM bagian";
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
                                    <th scope="col" width="50">#</th>
                                    <th scope="col">Bagian</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="align-middle">
                                    <th scope="row">1</th>
                                    <td>HRD</td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">2</th>
                                    <td>Finance</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <!-- JavaScript Bundle with Popper -->
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