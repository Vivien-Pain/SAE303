<?php

class Sale {
    private $id;
    private $customerId;
    private $movieId;
    private $saleDate;
    private $price;

    public function __construct($id, $customerId, $movieId, $saleDate, $price) {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->movieId = $movieId;
        $this->saleDate = $saleDate;
        $this->price = $price;
    }

    public function getId() {Z
        return $this->id;
    }

    public function getCustomerId() {
        return $this->customerId;
    }

    public function getMovieId() {
        return $this->movieId;
    }

    public function getSaleDate() {
        return $this->saleDate;
    }

    public function getPrice() {
        return $this->price;
    }
}

?>