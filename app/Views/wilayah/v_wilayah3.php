<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

<head>
    <meta charset="utf-8">
    <title>Data Vaksin</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        body {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: white;
            background-color: transparent;
            font-weight: normal;
        }

        div {
            padding: 6px;
        }

        h1 {
            color: #444;
            background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;
        }

        code {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            background-color: #f9f9f9;
            border: 1px solid #D0D0D0;
            color: #002166;
            display: block;
            margin: 14px 0 14px 0;
            padding: 12px 10px 12px 10px;
        }

        #body {
            margin: 0 15px 0 15px;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        }

        #container {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>

<body>

    <div id="container">
        <h1>Pendataan Vaksin <br></br>
            <button class=" btn btn-secondary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" onclick="document.location.href='<?php echo base_url('/input') ?>'">Tambah Data</button>
        </h1>

        <div id="body">
            <table style="text-align:center" class="table table-striped" width="1200px">
                <tr>
                    <td scope="col">No.Batch</td>
                    <td scope="col">NIK</td>
                    <td scope="col">Nama</td>
                    <td scope="col">Jenis Kelamin</td>
                    <td scope="col">Usia</td>
                    <td scope="col">Dosis</td>
                    <td scope="col">Jenis Vaksin</td>
                    <td scope="col">Action</td>
                </tr>
                <?php
                $db = \Config\Database::connect();
                $db = db_connect();
                $vaksinasi = $db->query('SELECT * FROM vaksinasi WHERE wilayah = "3"');
                foreach ($vaksinasi->getResult() as $row) :
                ?>
                    <tr>
                        <td scope="row"><?= strtoupper($row->no_batch) ?></td>
                        <td scope="row"><?= $row->nik ?></td>
                        <td scope="row"><?= $row->nama ?></td>
                        <td scope="row"><?= $row->jenis_kelamin ?></td>
                        <td scope="row"><?= $row->usia ?></td>
                        <td scope="row"><?= $row->dosis ?></td>
                        <td scope="row"><?= $row->jenis_vaksin ?></td>
                        <td scope="row" style="text-align:center">
                            <button type="button" class="btn btn-primary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;"><a href="<?= base_url("edit/" . $row->no_batch) ?>"> Edit</a></button>
                            <form action="delete/<?= $row->no_batch ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="Delete">
                                <button type="submit" class="btn btn-danger" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" onclick="return confirm('Apakah anda yakin menghapus Post ini ?'); ">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>

    </div>

</body>

</html>