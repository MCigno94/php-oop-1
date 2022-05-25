<?php

class Movie {
    private $title;
    private $category;
    private $description;

	public function __getTitle() {
		return $this->title;
	}
    public function __getCategory() {
		return $this->category;
	}
    public function __getDescription() {
		return $this->description;
	}

    function __construct(String $title, String $category, String $description) {
        $this->title = $title;
        $this->category = $category;
        $this->description = $description;
    }

};
