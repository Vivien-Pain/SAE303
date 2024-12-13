<?php

class RevenueRepository {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getTotalRevenues() {
        $stmt = $this->pdo->prepare("
            SELECT 
                (SELECT IFNULL(SUM(price), 0) FROM Sales) AS total_sales,
                (SELECT IFNULL(SUM(price), 0) FROM Rentals) AS total_rentals
        ");
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function getMonthlyRevenues($month, $year) {
        $stmt = $this->pdo->prepare("
            SELECT 
                (SELECT IFNULL(SUM(price), 0) FROM Sales WHERE MONTH(sale_date) = :month AND YEAR(sale_date) = :year) AS total_sales,
                (SELECT IFNULL(SUM(price), 0) FROM Rentals WHERE MONTH(rental_date) = :month AND YEAR(rental_date) = :year) AS total_rentals
        ");
        $stmt->execute(['month' => $month, 'year' => $year]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>