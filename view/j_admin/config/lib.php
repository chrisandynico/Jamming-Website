<?php
class Library
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }
    //CRUD J-Article    
     //show
    public function showArt()
    {
        $sql = "SELECT * FROM j_article";
        $query = $this->db->query($sql);
        return $query;
    }
    
    //insert
     public function addArt($id, $article, $description, $picture)
    {
        $sql = "INSERT INTO j_article (id_article, article, description, picture) VALUES('$id', '$article', '$description', '$picture')";
        $query = $this->db->query($sql);
            if(!$query)
            {
                return "Failed";
            }
            else
            {
                return "Success";
            }
    }
    }
    ?>