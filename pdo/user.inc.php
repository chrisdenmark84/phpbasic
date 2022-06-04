<?php

class User extends Dbh
{

    // connects via connect function in Dbh. Returns all rows
    public function getAllUsers()
    {
        $stmt = $this->connect()->query("SELECT * FROM users");
        while ($row = $stmt->fetch()) {
            echo $row['fname'];
        }
    }

    // Prepare statement using id & fname placeholder. Execute passing those variables. 
    // 
    public function getUserWithCountCheck($id)
    {

        $stmt = $this->connect()->prepare("SELECT * FROM users WHERE id=?");
        $stmt->execute([$id]);

        if ($stmt->rowCount()) {
            while ($row = $stmt->fetch()) {
                return $row['fname'] . " " . $row['lname'] . " " . $row['dob'];
            }
        }
    }

    public function setUser($fname, $lname, $dob)
    {
        $sql = "INSERT INTO users (fname, lname, dob) VALUES (?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$fname, $lname, $dob]);
    }
}
