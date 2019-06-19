<div class="slim-mainpanel">
    <div class="container">
        <div class="slim-pageheader">
            <ol class="breadcrumb slim-breadcrumb">
                <?php
                $hari = date("D");
                switch ($hari) {
                    case 'Sun':
                        $hari_ini = "Minggu";
                        break;
                    case 'Mon':
                        $hari_ini = "Senin";
                        break;
                    case 'Tue':
                        $hari_ini = "Selasa";
                        break;
                    case 'Wed':
                        $hari_ini = "Rabu";
                        break;
                    case 'Thu':
                        $hari_ini = "Kamis";
                        break;
                    case 'Fri':
                        $hari_ini = "Jumat";
                        break;
                    case 'Sat':
                        $hari_ini = "Sabtu";
                        break;
                    default:
                        $hari_ini = "Tidak diketahui";
                        break;
                }

                $bulan = date("m");
                switch ($bulan) {
                    case '01':
                        $bulan_ini = "Januari";
                        break;
                    case '02':
                        $bulan_ini = "Februari";
                        break;
                    case '03':
                        $bulan_ini = "Maret";
                        break;
                    case '04':
                        $bulan_ini = "April";
                        break;
                    case '05':
                        $bulan_ini = "Mei";
                        break;
                    case '06':
                        $bulan_ini = "Juni";
                        break;
                    case '07':
                        $bulan_ini = "Juli";
                        break;
                    case '08':
                        $bulan_ini = "Agustus";
                        break;
                    case '09':
                        $bulan_ini = "September";
                        break;
                    case '10':
                        $bulan_ini = "Oktober";
                        break;
                    case '11':
                        $bulan_ini = "November";
                        break;
                    case '12':
                        $bulan_ini = "Desember";
                        break;
                    default:
                        $bulan_ini = "Tidak diketahui";
                        break;
                }


                ?>
                <li class="breadcrumb-item"><b><?php echo $hari_ini; ?>, <?php echo date('d') . " " . $bulan_ini . " " . date('Y'); ?></b> Last Updated at

                    <?php
                    foreach ($last_update as $last_update) {
                        echo date("H:i:s", strtotime($last_update->tanggal_update));
                    } ?></li>
            </ol>
            <h6 class="slim-pagetitle"><?php echo $title; ?></h6>
        </div><!-- slim-pageheader -->
        <div class="section-wrapper">
            <?php
            if ($this->session->flashdata('sukses')) {
                echo '<div class="alert alert-success">';
                echo $this->session->flashdata('sukses');
                echo '</div>';
            }
            //error validasi
            echo validation_errors('<div class="alert alert-warning">', '</div>'); ?>
            <div class="table-responsive">
                <br><br>
                <table id="datatable1" class="table mg-b-0 table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th class="wd-20p">Layanan</th>
                            <th>Tanggal</th>
                            <th class="wd-10p">LK</th>
                            <th class="wd-10p">PR</th>
                            <th class="wd-10p">Jumlah Angka</th>
                            <th>Aksi</th>
                        </tr>
                        </th>
                    <tbody>
                        <?php $x = 0;
                        foreach ($angka as $angka) { ?>
                            <tr>
                                <?php echo form_open(base_url('admin/layanan/edit/' . $angka->id_angka));
                                ?>
                                <td><?php $x = $x + 1;
                                    echo $x; ?></td>
                                <td><?php echo $angka->nama_layanan; ?></td>
                                <?php $bulan = date("m", strtotime($angka->tanggal_angka));
                                switch ($bulan) {
                                    case '01':
                                        $current_month = "Januari";
                                        break;
                                    case '02':
                                        $current_month = "Februari";
                                        break;
                                    case '03':
                                        $current_month = "Maret";
                                        break;
                                    case '04':
                                        $current_month = "April";
                                        break;
                                    case '05':
                                        $current_month = "Mei";
                                        break;
                                    case '06':
                                        $current_month = "Juni";
                                        break;
                                    case '07':
                                        $current_month = "Juli";
                                        break;
                                    case '08':
                                        $current_month = "Agustus";
                                        break;
                                    case '09':
                                        $current_month = "September";
                                        break;
                                    case '10':
                                        $current_month = "Oktober";
                                        break;
                                    case '11':
                                        $current_month = "November";
                                        break;
                                    case '12':
                                        $current_month = "Desember";
                                        break;
                                    default:
                                        $current_month = "Tidak diketahui";
                                        break;
                                } ?>
                                <td><?php echo date("d", strtotime($angka->tanggal_angka)) . " " . $current_month . " " . date("Y", strtotime($angka->tanggal_angka)); ?></td>
                                <td> <input type="number" class="form-control" placeholder="Laki-laki" name="lk" id="lk<?php echo $x; ?>" onkeyup="sum<?php echo $x; ?>();" value="<?php echo $angka->lk; ?>"></td>
                                <td><input type="number" class="form-control" placeholder="Perempuan" name="pr" id="pr<?php echo $x; ?>" onkeyup="sum<?php echo $x; ?>();" value="<?php echo $angka->pr; ?>"></td>
                                <td><input type="number" class="form-control" placeholder="Jumlah Angka" name="jumlah_angka" id="jumlah_angka<?php echo $x; ?>" value="<?php echo $angka->jumlah_angka; ?>" required></td>
                                <td>
                                    <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="fa fa-calendar"></i> Edit</button>
                                    <button type="reset" class="btn btn-default btn-sm" onclick="reset<?php echo $x; ?>()"><i class="fa fa-refresh"></i> Reset</button>
                                    <?php include('hapus.php'); ?>
                                </td>
                                <script>
                                    function sum<?php echo $x; ?>() {
                                        var lk1 = document.getElementById('lk<?php echo $x; ?>').value;
                                        var pr1 = document.getElementById('pr<?php echo $x; ?>').value;

                                        if (lk1 == "") {
                                            lk1 = 0;
                                        }
                                        if (pr1 == "") {
                                            pr1 = 0;
                                        }

                                        if (lk1 != "" || pr1 != "") {
                                            document.getElementById("jumlah_angka<?php echo $x; ?>").readOnly = true;
                                        } else {
                                            document.getElementById("jumlah_angka<?php echo $x; ?>").readOnly = false;
                                        }

                                        var jumlah_angka1 = parseInt(lk1) + parseInt(pr1);

                                        if (!isNaN(jumlah_angka1)) {
                                            document.getElementById('jumlah_angka<?php echo $x; ?>').value = jumlah_angka1;
                                        }
                                    }

                                    function reset<?php echo $x; ?>() {
                                        document.getElementById("jumlah_angka<?php echo $x; ?>").readOnly = false;
                                    }
                                </script>
                                <?php echo form_close(); ?>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- section-wrapper -->
    </div><!-- container -->
</div><!-- slim-mainpanel -->