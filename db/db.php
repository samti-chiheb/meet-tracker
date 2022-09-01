<?php
include './config/const.php';
Class Conn{
  public $conn;

  private $tableRow3 = ["date", "name", "company", "phone", "mail", "client_name", "mission_duration", "mission_info", "process_step", "process_state", "appointments"];
  


  public function __construct(){
    try {
        $this->conn = new mysqli(SNAME,UNAME,PASSWORD,DB_NAME);
        } catch (Exception $e) {
          echo "connection failed" . $e->getMessage();
        }
  }

  // insert list of string into db ( string must be be quoted "'string'" )
  function insertList($tableData){
      $data = implode(",", $tableData) ;
      $row = implode(",",$this->tableRow3) ;
      $sql = " INSERT INTO recruter ($row) 
                VALUES ($data) " ;
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      return true;
    }
  
  public function read(){
    $data = null;
    $query = " SELECT * FROM recruter " ;
    
    if($sql = $this->conn->query($query)) {
      while ($row = mysqli_fetch_assoc($sql)){
        $data[]=$row;
      }
    }
    return $data;
  }
  

}






$test2 = ["'2022-08-03'", "'emilly'", "'ASW'", "'0505050'", "'couc@coucou'", "'amazon'", "'1year'", "'check eh and check'", "'1'", "'qsdqs'", "'2022-08-19'"];

$recruter = new Conn();

$recruter->read();



?>