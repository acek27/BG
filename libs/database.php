<?php

class database extends PDO {

    function __construct() {
        try {
            parent::__construct(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function selectAll($query, $fetchMode = PDO::FETCH_ASSOC) {
        try {
            $stmt = $this->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll($fetchMode);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function selectWhere($query, $data = array(), $fetchMode = PDO::FETCH_ASSOC) {
        try {
            $stmt = $this->prepare($query);
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
            return array('row' => $stmt->rowCount(), 'data' => $stmt->fetchAll($fetchMode));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insert($table, $data) {
        ksort($data);
        $values = ':' . implode(', :', array_keys($data));

        try {
            $stmt = $this->prepare("INSERT INTO $table VALUES ($values)");
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function update($query, $data = array()){
        try {
            $stmt = $this->prepare($query);
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function delete($query, $data = array()){
        try {
            $stmt = $this->prepare($query);
            foreach ($data as $key => $value) {
                $stmt->bindValue(":$key", $value);
            }
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}
