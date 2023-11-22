<?php
class Maytinh {
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

    public function displayCard() {
        echo "<div class='col-md-4'>";
        echo "<div class='card'>";
        echo "<img src='{$this->anh}' class='card-img-top' alt='Phone Image'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>{$this->ten}</h5>";
        echo "<p class='card-text'>ID: {$this->id}</p>";
        echo "<p class='card-text'>Price: {$this->gia}</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
}
?>
