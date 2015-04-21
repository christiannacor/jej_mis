<?php

class Product_Model
{
    /**
     * @param object $db A PDO database connection
     */
    function __construct($db)
    {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Get all songs from database
     */
    public function getAllSongs()
    {
        $sql = "SELECT id, artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }
    
    /**
     * Get all products
     */
    public function getAllProducts()
    {
        $sql = "SELECT * FROM tb_products";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
    
    public function getSmartphone()
    {
        $sql = "SELECT * FROM tb_products";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        // fetchAll() is the PDO method that gets all result rows, here in object-style because we defined this in
        // core/controller.php! If you prefer to get an associative array as the result, then do
        // $query->fetchAll(PDO::FETCH_ASSOC); or change core/controller.php's PDO options to
        // $options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC ...
        return $query->fetchAll();
    }
    
    /**
     * Checking products
     *
    public function checkProducts() {
        $sql = "SELECT product_id, category, SKU, product_name, product_model, manufacturer_name, release_date, price, link FROM tb_products";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    */
    
    public function getCategories() {
        $sql = "SELECT * FROM tb_categories";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    
    public function addProduct($category, $SKU, $manufacturer_name, $product_name, $product_model, $price, $link)
    {
        $sql = "INSERT INTO tb_products (category, SKU, manufacturer_name, product_name, product_model, price, link) VALUES (:category, :SKU, :manufacturer_name, :product_name, :product_model, :price, :link)";
        $query = $this->db->prepare($sql);
        $parameters = array(':category' => $category, ':SKU' => $SKU, ':manufacturer_name' => $manufacturer_name, ':product_name' => $product_name, ':product_model' => $product_model, ':price' => $price, ':link' => $link);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        $_SESSION["feedback_positive"][] = CRUD_ADDED;
        if (mysql_errno() === 1062) {
            $_SESSION["feedback_negative"][] = CRUD_WAR_ALREADY_DEF;
        }
        if (mysql_errno() === 1065) {
            $_SESSION["feedback_negative"][] = CRUD_WAR_UNKNOWN_QUERY;
        }
    }

    /**
     * Delete a song in the database
     * Please note: this is just an example! In a real application you would not simply let everybody
     * add/update/delete stuff!
     * @param int $song_id Id of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
    
    public function deleteProduct($product_id)
    {
        $sql = "DELETE FROM tb_products WHERE product_id = :product_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':product_id' => $product_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        $_SESSION["feedback_positive"][] = CRUD_DELETE;
    }
    
    public function getProduct($product_id)
    {
        $sql = "SELECT product_id, category, SKU, manufacturer_name, product_name, product_model, price, link FROM tb_products WHERE product_id = :product_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':product_id' => $product_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }

    /**
     * Update a song in database
     * // TODO put this explaination into readme and remove it from here
     * Please note that it's not necessary to "clean" our input in any way. With PDO all input is escaped properly
     * automatically. We also don't use strip_tags() etc. here so we keep the input 100% original (so it's possible
     * to save HTML and JS to the database, which is a valid use case). Data will only be cleaned when putting it out
     * in the views (see the views for more info).
     * @param string $artist Artist
     * @param string $track Track
     * @param string $link Link
     * @param int $song_id Id
     */
    public function updateSong($artist, $track, $link, $song_id)
    {
        $sql = "UPDATE song SET artist = :artist, track = :track, link = :link WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':artist' => $artist, ':track' => $track, ':link' => $link, ':song_id' => $song_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
    
    public function updateProduct($category, $SKU, $manufacturer_name, $product_name, $product_model, $price, $link, $product_id)
    {
        $sql = "UPDATE tb_products SET category = :category, SKU = :SKU, manufacturer_name = :manufacturer_name, product_name = :product_name, product_model = :product_model, price = :price, link = :link WHERE product_id = :product_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':category' => $category, ':SKU' => $SKU, ':manufacturer_name' => $manufacturer_name, ':product_name' => $product_name, ':product_model' => $product_model, ':price' => $price, ':link' => $link, ':product_id' => $product_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
        $_SESSION["feedback_positive"][] = CRUD_UPDATED;
        if (mysql_errno() === 1065) {
            $_SESSION["feedback_negative"][] = CRUD_WAR_UNKNOWN_QUERY;
        }
    }
    
    public function getAmountOfProducts()
    {
        $sql = "SELECT COUNT(product_id) AS amount_of_products FROM tb_products";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_products;
    }
    
    //SORTING RELEASE DATES
    public function sortDate()
    {
        $sql = "SELECT product_id, categor, SKU, product_name, product_model, manufacturer_name, release_date, price, link FROM tb_products ORDER BY release_date";
        $query = $this->db->prepare($sql);
        $query->execute();
        
        return $query->fetchAll();
    }
    
    // **************************************************************************************
    
}