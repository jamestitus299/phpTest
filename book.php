<?php 

    class Book{

        private $title;
        private $author;
        private $pages;

        public function __construct($title, $author, $pages){
            $this->title = $title;
            $this->author = $author;
            $this->pages = $pages;
        }

        public function print_book(){
            echo $this->title . " ". $this->author . " ".  $this->pages . "<br>";
        }

    }

    $book1 = new Book("Harry Potter", "J K Rowling", "2500");
    $book2 = new Book("Lord of the Rings", "J R Tolkein", "2500");
    $book1->print_book();
    $book2->print_book();


?>