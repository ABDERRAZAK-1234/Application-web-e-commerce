<?php
namespace Projet\App\Models;

use Projet\App\Core\Database;
use PDO;

abstract class BaseModel
{
    protected PDO $db;
    protected string $table;

    public function __construct()
    {
        $this->db = Database::connexion();
    }

    // Fetch object
    protected function fetchObject(string $sql, array $params = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);

        $stmt->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $stmt->fetch();
    }

    // Fetch all objects
    protected function fetchAllObjects(string $sql, array $params = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($params);

        $stmt->setFetchMode(PDO::FETCH_CLASS, static::class);
        return $stmt->fetchAll();
    }

    // Find by ID
    public function find(int $id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        return $this->fetchObject($sql, [$id]);
    }

    // Get all
    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->fetchAllObjects($sql);
    }

    // Find by column
    public function findBy(string $column, $value)
    {
        $sql = "SELECT * FROM {$this->table} WHERE {$column} = ?";
        return $this->fetchObject($sql, [$value]);
    }

    // Create
    public function create(array $data): bool
    {
        $columns = array_keys($data);
        $placeholders = array_fill(0, count($columns), '?');

        $sql = "INSERT INTO {$this->table} (" . implode(',', $columns) . ")
                VALUES (" . implode(',', $placeholders) . ")";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute(array_values($data));
    }

    // Update
    public function update(int $id, array $data): bool
    {
        $columns = array_keys($data);

        $setClause = implode(', ', array_map(function ($col) {
            return "$col = ?";
        }, $columns));

        $sql = "UPDATE {$this->table} SET {$setClause} WHERE id = ?";

        $stmt = $this->db->prepare($sql);

        $values = array_values($data);
        $values[] = $id;

        return $stmt->execute($values);
    }

    // Delete
    public function delete(int $id): bool
    {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";

        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }
}
