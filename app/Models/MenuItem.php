<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
     /**
     * Get the children for the Menu.
     */
    public function allChildren()
    {
        return $this->hasMany(Self::class, 'parent_id');
    }

    // This will fecth sub-childrens
    public function children()
    {
        return $this->allChildren()->with('children');
    }
}
