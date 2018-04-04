<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    //
    protected $table="estates";
    //
    public function getTableColumns() {
        return $this->getConnection()->getSchemaBuilder()->getColumnListing($this->getTable());
    }
}
