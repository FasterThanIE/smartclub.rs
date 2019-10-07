<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CashCreditsModel extends Model
{
    /**
     * @param $data
     */
    public function addNewRequest($data)
    {
        $pdo = DB::connection()->getPdo();

        $stmt = $pdo->prepare(
            "INSERT INTO cash_credits_requests (name, phone_number, date_of_birth, email, gender, job, location, insurance_length,health, requested_on) VALUES 
            (:name, :phoneNumber, :dateOfBirth, :email, :gender, :job, :location, :insuranceLength, :health, :requestedOn)
            "
        );

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':phoneNumber', $data['phone_number']);
        $stmt->bindParam(':dateOfBirth', $data['date_of_birth']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->bindParam(':job', $data['job']);
        $stmt->bindParam(':location', $data['location']);
        $stmt->bindParam(':insuranceLength', $data['insurance_length']);
        $stmt->bindParam(':health', $data['health']);



    }
}
