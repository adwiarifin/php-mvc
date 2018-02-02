<?php

class Message extends Model {

    public function save($data, $id = null) {
        if ( !isset($data['name']) || !isset($data['email']) || !isset($data['message'])) {
            return false;
        }

        $id = (int)$id;
        $name = $this->db->escape($data['name']);
        $email = $this->db->escape($data['email']);
        $message = $this->db->escape($data['message']);

        if ( !$id ) { // Add new record
            $sql = "INSERT INTO messages SET name = '{$name}', email = '{$email}', message = '{$message}'";
        } else { // Update existing record
            $sql = "UPDATE messages SET name = '{$name}', email = '{$email}', message = '{$message}' WHERE id = {$id}";
        }

        return $this->db->query($sql);
    }
}
