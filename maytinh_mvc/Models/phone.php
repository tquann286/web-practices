<?php
class Phone {
    private $id;
    private $ten;
    private $gia;
    private $anh;

    public function __construct($id, $ten, $gia, $anh) {
        $this->id = $id;
        $this->ten = $ten;
        $this->gia = $gia;
        $this->anh = $anh;
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
}
?>
