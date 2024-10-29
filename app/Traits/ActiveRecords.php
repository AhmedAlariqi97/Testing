<?php

namespace App\Traits;

trait ActiveRecords
{
    /**---------------------------------------
     *  used $this->getTable()
     *  to know that the is_active is of the table
     *  that implement this trait so it not through an error 
     *  when using with relation 
     *-------------------------------------------------**/
    public function scopeActive($query)
    {

        $query->where($this->getTable() . '.is_active', 1);
    }
}
