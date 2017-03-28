<?php
namespace Service;

class LoggableShipStorage implements ShipStorageInterface{
  private $shipStorage;
  
  public function __construct(ShipStorageInterface $shipStorage) {
    $ships =  $this->shipStorage = $shipStorage;
    
    $this->log(sprintf('Just fetched %s ships', count($ships)));
    
    return $ships;
  }


  public function fetchAllShipsData() {
    return $this->shipStorage->fetchAllShipsData();
  }
  
  public function fetchSingleShipData($id) {
    $this->shipStorage->fetchSingleShipData($id);  
  }
  
  private function log($message) {
    //todo -actually log this somewhere, instead of printing!
    echo $message;
  }
}

