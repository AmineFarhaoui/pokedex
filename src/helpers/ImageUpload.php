<?php
namespace Amine\Pokedex\helpers;


class ImageUpload {

    public $target_dir = "../public/img/";
    public $target_file;
    public $uploadOk = 1;
    
    public function uploadImage ($img){
        $this->target_file = $this->target_dir . basename($img["img"]["name"]);

        $this->checkIfImageReal($img);

        $this->checkIfImageAlreadyExist();
        
        $this->upload($img);

        return true;
    }

    public function checkIfImageReal($img){
        $check = getimagesize($img["img"]["tmp_name"]);
        if($check !== false) {
            return true;
        } else {
            return false;
        }
    }

    public function checkIfImageAlreadyExist() {
        if (file_exists($this->target_dir)) {
            return true;
        }
    }

    public function upload($img) {
        // Check if $uploadOk is set to 0 by an error
        if ($this->uploadOk == 0) {
            return false;
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($img["img"]["tmp_name"], $this->target_file)) {
                return true;
            } else {
                return false;
            }
        }
    }
}