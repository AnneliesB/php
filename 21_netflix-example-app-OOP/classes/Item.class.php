<?php
    include_once('Db.class.php');

    class Item {
        private $title;
        private $poster;

        

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Set the value of title
         *
         * @return  self
         */ 
        public function setTitle($title)
        {
                $this->title = $title;

                return $this;
        }

        /**
         * Get the value of poster
         */ 
        public function getPoster()
        {
                return $this->poster;
        }

        /**
         * Set the value of poster
         *
         * @return  self
         */ 
        public function setPoster($poster)
        {
                $this->poster = $poster;

                return $this;
        }

        /*
            Get all items from the database
            @return array
        */
        public static function getAll() {
            $conn = Db::getInstance();
            $statement = $conn->prepare('select * from collection');
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        /*
            Get one item based on $id
        */
        public static function find($id) {
            $conn = Db::getInstance();
            $statement = $conn->prepare("select * from collection where id = :id");
            $statement->bindParam(":id", $id);
            $statement->execute();
            return $statement->fetch(PDO::FETCH_ASSOC);
        }

    }