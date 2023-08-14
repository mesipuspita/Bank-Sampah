<?php
namespace App\Trits;

trait HashFormatRupiah
{
    function formatRupiahhhh($field, $nominal,$prefix=null)
    {
     $prefix = $prefix ? $prefix :'Rp';
        $nominal=$this->attribute[$field];
      return $prefix. number_format($nominal, 0, ',','-');
    }
    }
?>
