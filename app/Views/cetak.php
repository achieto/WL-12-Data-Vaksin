<html>

<head>

    <title>Cetak Hasil Vaksinasi</title>
    <style>
        .garis_tepi1 {
            width:750px;
            height: 500px;
            border: 20px groove #5885AF;
            border-radius: 20px;
            margin: 0 auto;
        }
    </style>

</head>

<body>

    <div align="center">
        <table>
            <tr>

                <td>
                    <div align="center">
                        <font size="5"><b>
                            Prianly Vacinate Covid-19</b></font>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        <font size="4"><b>
                            Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Gedong Meneng</b></font>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        No. Izin : 3612/DINAS-COVID/XII/2021
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                        No telp. (0721) 267 128 | email : prianly3612@gmail.com
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <hr>
    <br><br>
    <div class="garis_tepi1">
        <center> 
            <div>
                <h1><u>KARTU VAKSINASI COVID-19</u></h1>
            </div>


            <div>
                <table width="60%">

                    <tr>
                        <td>No. Batch</td>
                        <td><?php echo ":  " . $row['no_batch']; ?></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td><?php echo ":  " . $row['nik']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td><?php echo ":  " . $row['nama']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td><?php echo ":  " . $row['jenis_kelamin']; ?></td>
                    </tr>
                    <tr>
                        <td>Usia</td>
                        <td><?php echo ":  " . $row['usia']; ?></td>
                    </tr>
                    <tr>
                        <td>Dosis</td>
                        <td><?php echo ":  " . $row['dosis']; ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Vaksin</td>
                        <td><?php echo ":  " . $row['jenis_vaksin']; ?></td>
                    </tr>
                </table>
            </div>
        </center>
        <br><br>
        <br> <br> <br><br>
        <div style="padding: 15px">
            <right>
                <b><u>Penanggung Jawab</b>
                <br><br><br><br><br>
                dr. Aprila Dwi Utami</u>
                <br>NIP. 1917051012
            </right>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>