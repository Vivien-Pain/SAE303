<?php
class Rental {
    private $id;
    private $customerId;
    private $movieId;
    private $rentalDate;
    private $returnDate;
    private $price;

    public function __construct($id, $customerId, $movieId, $rentalDate, $returnDate, $price) {
        $this->id = $id;
        $this->customerId = $customerId;
        $this->movieId = $movieId;
        $this->rentalDate = $rentalDate;
        $this->returnDate = $returnDate;
        $this->price = $price;
    }

    public function getId() {
        return $this->id;
    }

    public function getCustomerId() {
        return $this->customerId;
    }

    public function getMovieId() {
        return $this->movieId;
    }

    public function getRentalDate() {
        return $this->rentalDate;
    }

    public function getReturnDate() {
        return $this->returnDate;
    }

    public function getPrice() {
        return $this->price;
    }
}
