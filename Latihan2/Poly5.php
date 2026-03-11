<?php
# Interface
interface Notifikasi {
    public function kirim();
}

# Implementasi Email
class Email implements Notifikasi {
    public function kirim(){
        echo "Notifikasi dikirim melalui Email\n";
    }
}

# Implementasi SMS
class SMS implements Notifikasi {
    public function kirim(){
        echo "Notifikasi dikirim melalui SMS\n";
    }
}

# Implementasi WhatsApp
class WhatsApp implements Notifikasi {
    public function kirim(){
        echo "Notifikasi dikirim melalui WhatsApp\n";
    }
}

# Pemanggilan
$email = new Email();
$sms = new SMS();
$wa = new WhatsApp();

$email->kirim();
$sms->kirim();
$wa->kirim();
?>