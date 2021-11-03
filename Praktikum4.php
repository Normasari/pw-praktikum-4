<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="Style.css">
    </head>
    <body>
    <div class="header">
            <h2>Daftar Karyawan</h2>
            <h3>"PT.Toribaga3D"</h3>
            <img src="cepatu.com.jpg" style="width:100px; height:100px;">
        </div>
        <?php
            abstract class Pegawai{
                public $id;
                public $nama;
                public $level;
                public $kelamin;
                public $TTL;
                public $status;
                public $gaji;
 
                abstract function setGaji();
        
                function setId($id) {
                    $this->id = $id;
                }

                function setNama($nama) {
                    $this->nama = $nama;
                }

                function setTTL($TTL) {
                    $this->TTL = $TTL;
                }

                function setKelamin($kelamin) {
                    $this->kelamin = $kelamin;
                }

                function setLevel($level) {
                    $this->level = $level;
                }

                function setStatus($status) {
                    $this->status = $status;
                }

                function getId() {
                    return $this->id;
                }

                function getNama() {
                    return $this->nama;
                }

                function getTTL() {
                    return $this->TTL;
                }

                function getKelamin() {
                    return $this->kelamin;
                }

                function getLevel() {
                    return $this->level;
                }

                function getStatus() {
                    return $this->status;
                }

                function getGaji() {
                    return $this->gaji;
                }
            }

            class Fulltime extends Pegawai {
                function __construct($id, $nama, $TTL, $kelamin, $level, $status)
                   { $this->id = $id;
                     $this->nama = $nama;
                     $this->TTL = $TTL;
                     $this->kelamin = $kelamin;
                     $this->level = $level;
                     $this->status = $status;       
                    }

                function setGaji(){
                    if($this->level == "Junior"){
                        $this->gaji = 2000000;
                    }else if ($this->level == "Amateur"){
                        $this->gaji = 3500000;
                    }else if ($this->level == "Senior"){
                        $this->gaji = 5000000;
                    }else {
                        $this->gaji = 0;
                    }
                }
            }

            class Partime extends Pegawai {
                function __construct($id, $nama, $TTL, $kelamin, $level, $status){
                    $this->id = $id;
                    $this->nama = $nama;
                    $this->TTL = $TTL;
                    $this->kelamin = $kelamin;
                    $this->level = $level;
                    $this->status = $status;
                }

                function setGaji(){
                    if($this->level == "Junior"){
                        $this->gaji = 2000000/2;
                    }else if ($this->level == "Amateur"){
                        $this->gaji = 3500000/2;
                    }else if ($this->level == "Senior"){
                        $this->gaji = 5000000/2;
                    }else {
                        $this->gaji = 0;
                    }
                }
            }


            $pegawai1 = new Fulltime("123", "Daraya", "Samuda, 01 Januari 2004", "Laki-laki", "Amateur", "Fulltime");
            $pegawai2 = new Fulltime("456", "Naila", "Ketapang, 5 April 2005", "Perempuan", "Amateur", "Fulltime");
            $pegawai3 = new Partime("789", "Rapika", "Handil, 21 Juni 2001", "Perempuan", "Senior", "Partime");
            $pegawai4 = new Fulltime("234", "Daffa", "Bebirah, 01 September 2012", "Laki-laki", "Junior", "Fulltime");
            $pegawai5 = new Fulltime("345", "Ilouna", "Malang, 02 November 2002", "Perempuan", "Senior", "Fulltime");
            $pegawai6 = new Partime("567", "Aira", "Kuin, 02 Februari 2015", "Perempuan", "Junior", "Partime");
            $pegawai7 = new Fulltime("678", "Rania", "Sampit, 05 Maret 2008", "Perempuan", "Amateur", "Fulltime");
            $pegawai8 = new Fulltime("756", "Fatih", "Kuala, 07 April 2006", "Laki-laki", "Amateur", "Fulltime");
            $pegawai7 = new Partime("435", "Nadine", "Hujung, 23 Mei 2003", "Perempuan", "Senior", "Partime");
            $pegawai9 = new Fulltime("821", "Rania", "Pundu, 05 Maret 2008", "Perempuan", "Amateur", "Fulltime");
            
            $pegawai1->setGaji();
            $pegawai2->setGaji();
            $pegawai3->setGaji();
            $pegawai4->setGaji();
            $pegawai5->setGaji();
            $pegawai6->setGaji();
            $pegawai7->setGaji();
            $pegawai8->setGaji();
            $pegawai9->setGaji();
            
            $pegawai = array($pegawai1, $pegawai2, $pegawai3, $pegawai4, $pegawai5, $pegawai6,
            $pegawai7, $pegawai8, $pegawai9);?>

        <br><br>
        <table align="center">
            <tr>
                <th> ID </th>
                <th> Nama </th>
                <th> Tempat Tanggal Lahir </th>
                <th> Jenis Kelamin </th>
                <th> Level Karyawan</th>
                <th> Status </th>
                <th> Gaji </th>
            </tr>

            <?php foreach ($pegawai as $Pegawai) { ?>
                <tr>
                    <td><?php echo $Pegawai->getId(); ?></td>
                    <td><?php echo $Pegawai->getNama(); ?></td>
                    <td><?php echo $Pegawai->getTTL(); ?></td>
                    <td><?php echo $Pegawai->getKelamin(); ?></td>
                    <td><?php echo $Pegawai->getLevel(); ?></td>
                    <td><?php echo $Pegawai->getStatus(); ?></td>
                    <td><?php echo $Pegawai->getGaji(); ?></td>
                 </tr>
            <?php } ?>
        </table>
        <p>
            Kunjungi Instagram kami: 
            @Cepatudotcom, @Cepatulite @Toribaga.com</p>
    </body>
</html>