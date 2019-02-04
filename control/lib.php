<?php
class Library
{
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=jamming','root','');
    }

//Register USER
    public function addUser($id, $username, $password, $email, $nama, $ttl, $twibbon, $level)
    {
        $sql = "INSERT INTO j_user (id, username, password, email, nama, ttl, twibbon, level) VALUES('$id', '$username', '$password', '$email', '$nama', '$ttl', '$twibbon', '$level')";
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
    
    

//CRUD Team 
    //add
    public function addTeam($id, $name, $email, $picture, $quotes, $password, $access)
    {
        $sql = "INSERT INTO team (id, name, email, picture, quotes, password, access) VALUES('$id', '$name', '$email', '$picture', '$quotes', '$password', '$access')";
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

    //edit
    public function editTeam($id)
    {
        $sql = "SELECT * FROM team WHERE id='$id'";
        $query = $this->db->query($sql);
        return $query;
    }

    //update
    public function updateTeam($id, $name, $email, $picture, $quotes, $password)
    {
        $sql = "UPDATE team SET name='$name', email='$email', picture='$picture', quotes='$quotes', password='$password' WHERE id='$id'";
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
    
    //show
    public function showTeam()
    {
        $sql = "SELECT * FROM team";
        $query = $this->db->query($sql);
        return $query;
    }
//End CRUD Team

//CRUD Portofolio
        
    //add
    public function addPortofolio($id, $id_team, $name, $category, $explanation, $link, $picture)
    {
        $sql = "INSERT INTO portofolio (id, id_team, name, category, explanation, link, picture) VALUES('$id', '$name', '$email', '$picture', '$quotes', '$password', '$access')";
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

    //show
    public function showPortofolio()
    {
        $sql = "SELECT * FROM portofolio";
        $query = $this->db->query($sql);
        return $query;
    }
    
}
?>