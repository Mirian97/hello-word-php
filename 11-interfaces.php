<?php
// when implements a interface, you are obliged to implement all the methods of that interface
// or became the class who implements to abstract

interface Crud {
	public function create($data);
	public function read();
	public function update();
	public function delete();
}

class News implements Crud {
	public function create($data) {
		// create news
	}
	
	public function read(){
		// read news
	}
	
	public function update(){
		// update news
	}
	
	public function delete(){
		// delete news
	}
}