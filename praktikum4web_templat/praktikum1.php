<?php
include_once 'haeder.php';
?>
<?php
include_once 'sidebar.php';
?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>INI PRAKTIKUM</h1>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">praktikum1</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
              <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <h1>Form Pendaftaran Siswa</h1>
    <form method="post" action="#">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label>
            <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div>
                    <input id="nama" name="nama" type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="laki laki">
                    <label for="jk_0" class="custom-control-label">Laki Laki</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="prempuan">
                    <label for="jk_1" class="custom-control-label">Perempuan</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label class="col-4">Hobi</label>
            <div class="col-8">
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_0" type="checkbox" class="custom-control-input" value="renang">
                    <label for="hobi_0" class="custom-control-label">Renang</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_1" type="checkbox" class="custom-control-input" value="game">
                    <label for="hobi_1" class="custom-control-label">Game</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline">
                    <input name="hobi[]" id="hobi_2" type="checkbox" class="custom-control-input" value="membaca">
                    <label for="hobi_2" class="custom-control-label">Membaca</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="ipk" class="col-4 col-form-label">IPK</label>
            <div class="col-8">
                <input id="ipk" name="ipk" type="text" class="form-control">
            </div>
        </div>

        

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Tangkap data yang dikirimkan
        $nama = isset($_POST['nama']) ? $_POST['nama'] : "";
        $jk = isset($_POST['jk']) ? $_POST['jk'] : "";
        $hobi = isset($_POST['hobi']) ? implode(", ", $_POST['hobi']) : "";
        $ipk = isset($_POST['ipk']) ? $_POST['ipk'] : "";
        $lulus = isset($_POST['lulus']) ? $_POST['lulus'] : "";

        // Validasi IPK
        if ($ipk > 4.0) {
            echo "<p style='color: red;'>Maaf, IPK tidak valid. Silakan masukkan nilai IPK yang benar.</p>";
        } else {
            // Evaluasi IPK untuk menentukan lulus atau tidak
            if ($ipk >= 3.0) {
                $keterangan_lulus = 'Lulus';
            } else {
                $keterangan_lulus = 'Tidak Lulus';
            }

            // Cetak informasi yang dikirim
            echo "<h2>Informasi yang Anda kirim:</h2>";
            echo "Nama: $nama <br>";
            echo "Jenis Kelamin: $jk <br>";
            echo "Hobi: $hobi <br>";
            echo "IPK: $ipk <br>";
            echo "Status: $keterangan_lulus <br>";
        }
    }
    ?>
</body>

</html>

              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include_once 'footer.php';
?>