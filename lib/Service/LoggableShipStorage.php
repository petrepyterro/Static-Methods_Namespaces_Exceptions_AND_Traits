<?php
namespace Service;

class LoggableShipStorage implements ShipStorageInterface{
  private $shipStorage;
  
  public function __construct(ShipStorageInterface $shipStorage) {
    return $this->shipStorage = $shipStorage;
  }


  public function fetchAllShipsData() {
    return $this->shipStorage->fetchAllShipsData();
  }
  
  public function fetchSingleShipData($id) {
    $this->shipStorage->fetchSingleShipData($id);  
  }
}

