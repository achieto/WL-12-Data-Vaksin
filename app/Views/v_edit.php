<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Tambah Data Vaksin</title>

    <style type="text/css">
        ::selection {
            background-color: #E13300;
            color: white;
        }

        ::-moz-selection {
            background-color: #E13300;
            color: white;
        }

        by {
            background-color: #fff;
            margin: 40px;
            font: 13px/20px normal Helvetica, Arial, sans-serif;
            color: #4F5155;
        }

        a {
            color: #003399;
            background-color: transparent;
            font-weight: normal;
        }

        cd {
            font-family: Consolas, Monaco, Courier New, Courier, monospace;
            font-size: 12px;
            /* background-color: #f9f9f9; */
            /* border: 1px solid #D0D0D0; */
            color: #002166;
            display: block;
            margin: 14px 14px 14px 14px;
            padding: 12px 10px 12px 10px;
        }

        #by {
            margin: 15px 15px 15px 15px;
        }

        /* p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
        } */

        #cont {
            margin: 10px;
            border: 1px solid #D0D0D0;
            box-shadow: 0 0 8px #D0D0D0;
        }
    </style>
</head>
<cd>
    <by>
        <div id="cont" style="padding: 6px;">
            <h1 style="color:#444; background-color: transparent;
            border-bottom: 1px solid #D0D0D0;
            font-size: 19px;
            font-weight: normal;
            margin: 0 0 14px 0;
            padding: 14px 15px 10px 15px;">Edit Data Vaksin</h1>

            <div id="by" style="padding: 6px;">
                <table cellpadding="5" cellspacing="5">
                    <form action="/update/<?= $row['no_batch']; ?>" method="post">
                        <tr>
                            <td>No Batch</td>
                            <td><input type="text" value="<?php echo strtoupper($row['no_batch']) ?>" disabled></td>
                            <td><input type="hidden" name="no_batch" value="<?php echo $row['no_batch'] ?>"></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td><input type="text" name="nik" required value="<?php echo $row['nik'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" required value="<?php echo $row['nama'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><input type="radio" name="jenis_kelamin" id="ll" value="Laki-Laki" required>
                                <label for=" ll">Laki-Laki</label>
                            </td>
                            <td><input type="radio" name="jenis_kelamin" id="p" value="Perempuan" required>
                                <label for=" p">Perempuan</label>
                            </td>
                        </tr>
                        <tr>
                            <td>Usia</td>
                            <td><input type="text" name="usia" required value=" <?php echo $row['usia'] ?>"></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="kategori">Kategori</label>
                                    </div>
                                    <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="kategori" id="kategori" required>
                                        <option selected="true" disabled="disabled">Pilih...</option>
                                        <option value="Tenaga Medis">Tenaga Medis</option>
                                        <option value="Non-Tenaga Medis">Non-Tenaga Medis</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Vaksin</td>
                            <td>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="dosis">Dosis</label>
                                    </div>
                                    <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="dosis" id="dosis" required>
                                        <option selected="true" disabled="disabled">Pilih...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="input-group mr-5">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" for="jenis_vaksin">Jenis Vaksin</label>
                                    </div>
                                    <select class="custom-select" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" name="jenis_vaksin" id="jenis_vaksin" required>
                                        <option selected="true" disabled="disabled">Pilih...</option>
                                        <option value="Sinovac">Sinovac</option>
                                        <option value="AstraZeneca">AstraZeneca</option>
                                        <option value="Sinopharm">Sinopharm</option>
                                        <option value="Moderna">Moderna</option>
                                        <option value="Novavax">Novavax</option>
                                        <option value="Sputnik-V">Sputnik-V</option>
                                        <option value="Janssen">Janssen</option>
                                        <option value="Convidencia">Convidencia</option>
                                        <option value="Zifivax">Zifivax</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><input class=" btn btn-secondary" style="font: 13px/20px normal Helvetica, Arial, sans-serif;" type="submit" value="Save"></td>
                        </tr>
                    </form>
                </table>
            </div>

        </div>

    </by>
</cd>

</html>