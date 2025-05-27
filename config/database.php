<?php
class Database {
    private $host = "localhost";
    private $db_name = "harar_museum";
    private $username = "root";
    private $password = "";
    private $conn;

    // Get database connection
    public function getConnection() {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host=" . $this->host . ";dbname=" . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch(PDOException $e) {
            echo "Connection Error: " . $e->getMessage();
        }

        return $this->conn;
    }

    // Close database connection
    public function closeConnection() {
        $this->conn = null;
    }

    // Execute query with parameters
    public function executeQuery($query, $params = []) {
        try {
            $stmt = $this->conn->prepare($query);
            $stmt->execute($params);
            return $stmt;
        } catch(PDOException $e) {
            echo "Query Error: " . $e->getMessage();
            return false;
        }
    }

    // Get single row
    public function getRow($query, $params = []) {
        $stmt = $this->executeQuery($query, $params);
        return $stmt ? $stmt->fetch() : false;
    }

    // Get multiple rows
    public function getRows($query, $params = []) {
        $stmt = $this->executeQuery($query, $params);
        return $stmt ? $stmt->fetchAll() : false;
    }

    // Insert data and return last insert ID
    public function insert($query, $params = []) {
        $stmt = $this->executeQuery($query, $params);
        return $stmt ? $this->conn->lastInsertId() : false;
    }

    // Update data and return affected rows
    public function update($query, $params = []) {
        $stmt = $this->executeQuery($query, $params);
        return $stmt ? $stmt->rowCount() : false;
    }

    // Delete data and return affected rows
    public function delete($query, $params = []) {
        $stmt = $this->executeQuery($query, $params);
        return $stmt ? $stmt->rowCount() : false;
    }
}
?> 