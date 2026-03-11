<?php

interface Pembayaran {
    public function prosesPembayaran();
}

class TransferBank implements Pembayaran {

    public function prosesPembayaran() {
        echo "Pembayaran melalui Transfer Bank";
    }

}

class EWallet implements Pembayaran {

    public function prosesPembayaran() {
        echo "Pembayaran melalui E-Wallet";
    }

}

class KartuKredit implements Pembayaran {

    public function prosesPembayaran() {
        echo "Pembayaran melalui Kartu Kredit";
    }

}

$bank = new TransferBank();
$ewallet = new EWallet();
$kartu = new KartuKredit();

$bank->prosesPembayaran();
echo "<br>";

$ewallet->prosesPembayaran();
echo "<br>";

$kartu->prosesPembayaran();

?>