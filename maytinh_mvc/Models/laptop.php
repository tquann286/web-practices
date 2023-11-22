<?php
class Laptop {
    private $id;
    private $ten;
    private $gia;
    private $anh;
    private $luot_mua;

    public function __construct($id, $ten, $gia, $anh, $luot_mua) {
        $this->id = $id;
        $this->ten = $ten;
        $this->gia = $gia;
        $this->anh = $anh;
        $this->luot_mua = $luot_mua;
    }

    public function getId() {
        return $this->id;
    }

    public function getTen() {
        return $this->ten;
    }

    public function getGia() {
        return $this->gia;
    }

    public function getAnh() {
        return $this->anh;
    }

    public function getLuotMua() {
        return $this->luot_mua;
    }
}
?>
