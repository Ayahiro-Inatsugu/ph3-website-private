<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}

public function delete() {
    $this->performDeleteOnModel();
}

public function performDeleteOnModel() {
    $this->runSoftDelete();
}

public function runSoftDelete() {
    $query = $this->setKeysForSaveQuery($this->newModelQuery());
    $time = $this->freshTimestamp();
    $columns = [$this->getDeletedAtColumn() => $this->fromDateTime($time)];

    $this->{$this->getDeletedAtColumn()} = $time;

    if ($this->timestamps && ! is_null($this->getUpdatedAtColumn())) {
        $this->{$this->getUpdatedAtColumn()} = $time;
        $columns[$this->getUpdatedAtColumn()] = $this->fromDateTime($time);
    }

    $query->update($columns);

    $this->syncOriginalAttributes(array_keys($columns));
}
