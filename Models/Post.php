<?php

namespace App\Models;

use DateTime;

class Post extends Model{

  protected $table = 'posts';


  public function getCreateAt(): string{
    
    return (new DateTime($this->create_at))->format('d/m/Y à H:m');
  }
}