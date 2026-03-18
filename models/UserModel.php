<?php

class UserModel
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    // Find one user by email
    public function findByEmail(string $email): ?array
    {
        $sql  = "SELECT id, profile_url, password, name FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $row ?: null;
    }
    public function getUserById(int $id): ?array
    {
        $sql = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $row ?: null;
    }
    public function getUserProfile(string $email): ?array
    {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $row = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $row ?: null;
    }

    // Insert a new user, returns true on success
    public function create(string $name, string $email, string $hashedPwd, string $profileUrl): bool
    {
        $sql  = "INSERT INTO users (name, email, password, profile_url) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssss", $name, $email, $hashedPwd, $profileUrl);
        $ok = $stmt->execute();
        $stmt->close();
        return $ok;
    }

    // Return all users (id, name, profile_url)
    public function getAll(): array
    {
        $sql  = "SELECT id, name, profile_url FROM users";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $res   = $stmt->get_result();
        $users = [];
        while ($row = $res->fetch_assoc()) {
            $users[] = $row;
        }
        $stmt->close();
        return $users;
    }
}