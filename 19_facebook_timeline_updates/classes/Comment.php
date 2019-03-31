<?php
class Comment
{
    private $text;

	public static function getAll(){
        $conn = Db::getInstance();
        $result = $conn->query("select * from comments order by id asc");

        // fetch all records from the database and return them as objects of this __CLASS__ (Post)
        return $result->fetchAll(PDO::FETCH_CLASS, __CLASS__);
    }

    public function Save(){
        $conn = Db::getInstance();
        $statement = $conn->prepare("insert into comments (post_id, user_id, text) values (:post_id, :user_id, :text)");
        $statement->bindValue(":post_id", 1);
        $statement->bindValue(":user_id", 1);
        $statement->bindValue(":text", $this->getText());
        return $statement->execute();        
    }

    /**
     * Get the value of text
     */ 
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set the value of text
     *
     * @return  self
     */ 
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }
}
?>