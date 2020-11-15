<?php 
class Product extends Db {
    public function getAllProducts() {
        $sql = self::$connection->prepare("SELECT * FROM products");
        $sql->execute(); 
        
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items; 
    }

    public function getAllTypes() {
        $sql = self::$connection->prepare("SELECT * FROM protypes");
        $sql->execute(); 
        
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items; 
    }

    public function getAllManufactures() {
        $sql = self::$connection->prepare("SELECT * FROM manufactures");
        $sql->execute(); 
        
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items; 
    }

    public function getListProductsNew() {
        $sql = self::$connection->prepare("SELECT * FROM products ORDER BY create_at DESC LIMIT 8");
        $sql->execute(); 
        
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
        
        return $items; 
    }

    public function getListProductsFeature ()
    {
        $sql = self::$connection->prepare("SELECT * FROM products WHERE feature = 1 LIMIT 8");
        $sql->execute(); 
        
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items; 
    }

    public function getProductById($id){
        $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
        $sql ->bind_param("i", $id);
        $sql->execute(); 
        
        $items = array();
        $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);

        return $items;
    }
}