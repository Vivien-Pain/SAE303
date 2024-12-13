<?php
class RevenueController {
    private $repository;

    public function __construct($repository) {
        $this->repository = $repository;
    }

    public function getTotalRevenues() {
        return json_encode($this->repository->getTotalRevenues());
    }

    public function getMonthlyRevenues($month, $year) {
        return json_encode($this->repository->getMonthlyRevenues($month, $year));
    }
}
?>