<?php

namespace App\MOA\AzubiManagement;

require 'vendor/autoload.php';

class Azubi {
    private $id;

    private $firstname;
    private $lastname;
    private $birthdate;

    private $yearOfTraining = 1;
    private $personioId = null;
    private $email = null;

    private $startDate;
    private $endDate;

    private $createdAt;
    private $updatedAt;

    public function __construct($firstname, $lastname, $birthdate, $startDate, $endDate) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->birthdate = $birthdate;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->createdAt = date('Y-m-d H:i:s');
        $this->updatedAt = date('Y-m-d H:i:s');
    }

    
}


