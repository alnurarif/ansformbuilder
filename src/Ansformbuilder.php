<?php

namespace Alnurarif\Ansformbuilder;

class Ansformbuilder{
	private $name = "";
	private $tagType = "";
	private $inputType = "text";
	private $inputValue = "";
	private $tagClasses = [];
	private $tagID = [];
	private $tagRequired = false;
	private $value = [];
	private $setActiveValue = '';
	private $rendered_data = [];

	public function createInput(){
		$this->tagType = 'input';
        return $this;
	}
	public function createSelect(){
		$this->tagType = 'select';
        return $this;
	}
	public function createCheckbox(){
		$this->tagType = 'checkbox';
        return $this;
	}
	public function createRadio(){
		$this->tagType = 'radio';
        return $this;
	}
	public function setInputType($inputType = "text"){
		$this->inputType = $inputType;
		return $this;
	}
    public function setName($name = "input"){
        $this->name = $name;
        return $this;
    }
    public function setClass($class = ""){
        array_push($this->tagClasses,$class);
        return $this;
    }
    public function setClasses($classes = []){
        $this->tagClasses = $classes;
        return $this;
    }
    public function setID($id = ""){
    	array_push($this->tagID, $id);
    	return $this;
    }
    public function setRequired($required = false){
    	$this->tagRequired = $required;
    	return $this;
    }
    public function setValues($value = []){
    	$this->value = $value; 
    	return $this;
    }
    public function setActiveValue($value = ''){
    	$this->activeValue = $value; 
    	return $this;
    }
    public function setInputValue($value = ""){
    	$this->inputValue = $value;
    	return $this;
    }
    public function getClass(){
    	return $this;
    }
    public function getData(){
		
	   	if($this->tagType == "input"){
	   		$this->renderInput();
    	}elseif($this->tagType == "select"){
    		$this->renderSelect();
    	}elseif($this->tagType == "checkbox"){
    		$this->renderCheckbox();
    	}elseif($this->tagType == "radio"){
    		$this->renderRadio();
    	}
    	return $this->rendered_data;
    }
	private function renderInput(){
		$this->rendered_data = [
			"ids" => $this->tagID,
		    "classes" => $this->tagClasses,
		    "type" => $this->inputType,
		    "name" => $this->name,
		    "values" => [
		        "prev_value" => $this->inputValue //(this is the previous posted value)
		    ],
		    "required" => $this->tagRequired

		];
	}
	private function renderSelect(){
		$this->rendered_data = [
			"ids" => $this->tagID,
			"classes" => $this->tagClasses,
			"name" => $this->name,
			"values" => $this->value,
			"active" => $this->activeValue,
			"required" => $this->tagRequired
		];
	}
	private function renderCheckbox(){
		$this->rendered_data = [
			"ids" => $this->tagID,
			"classes" => $this->tagClasses,
			"name" => $this->name,
			"values" => $this->value,
			"active" => $this->activeValue,
			"required" => $this->tagRequired
		];
	}
	private function renderRadio(){
		$this->rendered_data = [
			"ids" => $this->tagID,
			"classes" => $this->tagClasses,
			"name" => $this->name,
			"values" => $this->value,
			"active" => $this->activeValue,
			"required" => $this->tagRequired
		];
	}
}