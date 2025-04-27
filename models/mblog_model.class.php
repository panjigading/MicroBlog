<?php
class MBlog_Model extends Model
{
    public function getAll()
    {
        $sql = "SELECT * FROM mblog ORDER BY created_at DESC";

        return $this->mysqli->query($sql);
    }

    public function getByID(int $id)
    {
        $db = $this->mysqli;
        $stmt = $db->prepare("SELECT * FROM mblog WHERE id_mblog = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();

        return $stmt->get_result();
    }

    public function add(string $text) {
        $db = $this->mysqli;
        $stmt = $db->prepare("INSERT INTO mblog (text) VALUES (?)");
        $stmt->bind_param("s", $text);
        
        return $stmt->execute();
    }

    public function update(int $id, string $text) {
        $db = $this->mysqli;
        $stmt = $db->prepare("UPDATE mblog SET text = ? WHERE id_mblog = ?");
        $stmt->bind_param("si", $text, $id);
        
        return $stmt->execute();
    }

    public function delete(int $id) {
        $db = $this->mysqli;
        $stmt = $db->prepare("DELETE FROM mblog WHERE id_mblog = ?");
        $stmt->bind_param("i", $id);
        
        return $stmt->execute();
    }
}
