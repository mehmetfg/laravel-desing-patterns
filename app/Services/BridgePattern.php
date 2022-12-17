<?php
// Resim türleri için abstraksiyon
abstract class Image {
  protected $implementation;

  public function __construct(Implementation $implementation) {
    $this->implementation = $implementation;
  }

  abstract public function display();
}

// JPG resim türü için uygulama
class Jpeg extends Image {
  public function display() {
    return $this->implementation->displayJpeg();
  }
}

// PNG resim türü için uygulama
//yeni
class Png extends Image {
  public function display() {
    return $this->implementation->displayPng();
  }
}

// Çözümleme işlemleri için abstraksiyon
abstract class Implementation {
  abstract public function displayJpeg();
  abstract public function displayPng();
}

// Çözümleme işlemleri için uygulama
class ImageImplementation extends Implementation {
  public function displayJpeg() {
    // JPG resmini çözümle
  }

  public function displayPng() {
    // PNG resmini çözümle
  }
}

// Kullanım
$jpg = new Jpeg(new ImageImplementation());
$png = new Png(new ImageImplementation());
