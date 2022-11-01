<?php
if (isset($_GET['data'])) {
    $id = $_GET['data'];
    //$id['user'] = $id_user;
    //get profil
    $sql = "SELECT * FROM `tabel_feedback` where `id`='$id'";
    //echo $sql;
    $query = mysqli_query($koneksi, $sql);
    while ($data = mysqli_fetch_array($query)) {
        $id = $data['id'];
        $nama = $data['nama'];
        $email = $data['email'];
        $subject = $data['subject'];
        $pesan = $data['pesan'];
    }
?>
    </head>

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h3><i class="fas fa-user-tie"></i> Detail Data Feedback</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php?include=profil">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php?include=feedback">Data Feedback</a></li>
                        <li class="breadcrumb-item active">Detail Data Feedback</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <a href="index.php?include=feedback" class="btn btn-sm btn-warning float-right">
                        <i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Data Feedback<strong></td>
                        </tr>
                        <tr>
                            <td width="20%"><strong>Nama<strong></td>
                            <td width="80%"><?php echo $nama; ?></td>
                        </tr>
                        <tr>
                            <td width="20%"><strong>Email<strong></td>
                            <td width="80%"><?php echo $email; ?></td>
                        </tr>
                        <tr>
                            <td width="20%"><strong>Subject<strong></td>
                            <td width="80%"><?php echo $subject; ?></td>
                        </tr>
                        <tr>
                            <td width="20%"><strong>Pesan<strong></td>
                            <td width="80%"><?php echo $pesan; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">&nbsp;</div>
        </div>
        <!-- /.card -->

    </section>

<?php } ?>