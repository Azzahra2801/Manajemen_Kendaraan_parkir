<?php

class Kendaraan {
    protected $id;
    protected $nama;
    protected $statusParkir;

    public function __construct($id, $nama) {
        $this->id = $id;
        $this->nama = $nama;
        $this->statusParkir = "Masuk";
    }

    public function setStatusParkir($status) {
        $this->statusParkir = $status;
    }

    public function displayInfo() {
        return "Kendaraan ID: {$this->id}, Nama: {$this->nama}, Status: {$this->statusParkir}";
    }
}


class Mobil extends Kendaraan {
    private $jenisBahanBakar;

    public function __construct($id, $nama, $jenisBahanBakar) {
        parent::__construct($id, $nama);
        $this->jenisBahanBakar = $jenisBahanBakar;
    }

    public function displayInfo() {
        return "Mobil - ID: {$this->id}, Nama: {$this->nama}, Bahan Bakar: {$this->jenisBahanBakar}, Status: {$this->statusParkir}";
    }
}


class Motor extends Kendaraan {
    private $kapasitasMesin;

    public function __construct($id, $nama, $kapasitasMesin) {
        parent::__construct($id, $nama);
        $this->kapasitasMesin = $kapasitasMesin;
    }

    public function displayInfo() {
        return "Motor - ID: {$this->id}, Nama: {$this->nama}, Kapasitas Mesin: {$this->kapasitasMesin} cc, Status: {$this->statusParkir}";
    }
}


$kendaraanParkir = [
    // MOBIL
    new Mobil("M001", "Toyota Avanza", "Bensin"),
    new Mobil("M002", "Honda Brio", "Bensin"),
    new Mobil("M003", "Suzuki Ertiga", "Bensin"),
    new Mobil("M004", "Daihatsu Xenia", "Bensin"),
    new Mobil("M005", "Mitsubishi Xpander", "Bensin"),
    new Mobil("M006", "Hyundai Ioniq 5", "Listrik"),
    new Mobil("M007", "Tesla Model 3", "Listrik"),
    new Mobil("M008", "Toyota Fortuner", "Solar"),
    new Mobil("M009", "Honda Civic", "Bensin"),
    new Mobil("M010", "Mazda CX-5", "Bensin"),

    // MOTOR
    new Motor("MT001", "Yamaha NMAX", 155),
    new Motor("MT002", "Honda Beat", 110),
    new Motor("MT003", "Kawasaki Ninja", 250),
    new Motor("MT004", "Yamaha Aerox", 155),
    new Motor("MT005", "Vespa Sprint", 150),
    new Motor("MT006", "Suzuki Satria FU", 150),
    new Motor("MT007", "Honda PCX", 160),
    new Motor("MT008", "Yamaha Mio", 125),
    new Motor("MT009", "Honda Vario", 150),
    new Motor("MT010", "Kawasaki Z250", 250)
];

$kendaraanParkir[2]->setStatusParkir("Keluar");
$kendaraanParkir[5]->setStatusParkir("Keluar");
$kendaraanParkir[10]->setStatusParkir("Keluar");
$kendaraanParkir[14]->setStatusParkir("Keluar");
$kendaraanParkir[19]->setStatusParkir("Keluar");

echo "<h2>Daftar Kendaraan di Area Parkiran</h2>";
foreach ($kendaraanParkir as $k) {
    echo $k->displayInfo() . "<br>";
}
?>
