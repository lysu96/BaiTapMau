<?php 
require_once 'Librory/DBConfing.php';
  class xulySP extends SanPham
  {
    
    function __construct()
    {
      parent:: connect();
    }

    private $reult = NULL;

    public function execute($sql)
    {
      $this->reult = $this->conn->query($sql);
      return $this->reult;
    }

    public function getData()
    {
      if ($this->reult) {
        $data = mysqli_fetch_assoc($this->reult);
      } else{
        $data = 0;
      }
      return $data;

    }

    public function getAllData($table)
    {
      $sql = "SELECT * FROM $table";
      $this->execute($sql);
      if ($this->num_rows() == 0) {
        $data = 0;
      } else{
        while ($datas = $this->getData()) {
          $data[] = $datas;
        }
      }
      return $data;
    }

    public function getAllDatass()
    {
      $sql = "SELECT * FROM `tb_sanpham`, tb_nhasx, tb_danhmucsanpham WHERE tb_sanpham.maNSX = tb_nhasx.maNSX and tb_nhasx.maNSX = tb_danhmucsanpham.maNSX";
      $this->execute($sql);
      if ($this->num_rows() == 0) {
        $data = 0;
      } else{
        while ($datas = $this->getData()) {
          $data[] = $datas;
        }
      }
      return $data;
    }

    public function getEditData($id, $table)
    {
      $sql = "SELECT * FROM $table WHERE id = $id";
      $this->execute($sql);
      if ($this->num_rows() != 0) {
        $data = $this->getData($this->reult);
      } else{
        $data = 0;
      }
      return $data;
    }

    public function num_rows()
    {
      if ($this->reult) {
        $num = mysqli_num_rows($this->reult);
      } else{
        $num = 0;
      }
      return $num;
    }

    function empty($value)
    {
      
    }

    public function InsertData($table,$maSP, $tenSP, $maNSX, $anh)
    {

      $sql = "INSERT INTO `$table`(`id`, `maSP`, `tenSP`, `maNSX`, `img`) VALUES (NULL,'$maSP','$tenSP','$maNSX','$anh')";
      return $this->execute($sql);
    }

    public function Delete($id, $table)
    {
      $sql = "DELETE FROM `$table` WHERE id = $id";
      return $this->execute($sql);
    }

    public function Editdata($id, $maSP, $tenSP, $maNSX, $tenNSX, $ngayNSX)
    {
      $sql = "UPDATE `$table` SET `maSP`='$maSP',`tenSP`='$tenSP',`maNSX`='$maNSX',`tenNSX`='$tenNSX',`img`='$ngayNSX' WHERE id = $id";
      return $this->execute($sql);
    }

  }

 ?>