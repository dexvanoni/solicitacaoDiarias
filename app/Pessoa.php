<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $connection = 'pgsql';
    protected $table = 'tb_pessoas';
}
public function busca_militar($saram){
  $this->db->from("tb_pessoas");
  $this->db->where("pescodigo", $saram);
  //executando a query no banco
  $usuarios = $this->db->get();

  //verificação
  if ($usuarios->num_rows()) {
    # existe usuarios no db
    $usuario = $usuarios->result_array();
    return $usuario[0];
  }else{
    return FALSE;
  }
}
