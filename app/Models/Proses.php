<?php

namespace App\Models;

use CodeIgniter\Model;

class Proses extends Model
{
  protected $DBGroup          = 'default';
  protected $table            = 'konfirmasi_kehadiran';
  protected $primaryKey       = 'id';
  protected $useAutoIncrement = false;
  protected $insertID         = 0;
  protected $returnType       = 'array';
  protected $useSoftDeletes   = false;
  protected $protectFields    = false;
  protected $allowedFields    = [];

  function select($table, $where)
  {
    $this->select('*');
    $this->from($table);
    $this->where($where);
    return $this->get();
  }

  function insert($table, $data)
  {
    $this->insert('*');
    $this->from($table);
    $this->where($array);
    return $this->get();
  }
}
