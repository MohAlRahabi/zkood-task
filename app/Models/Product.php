<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    protected $appends = [
        'total_quantity',
        'total_quantity_by_unit_id',
        'image_path',
    ];

    public function units()
    {
        return $this->belongsToMany(Unit::class,'product_unit');
    }

    public function inventories()
    {
        return $this->hasMany(Inventory::class)->with('unit');
    }

    public function getTotalQuantityAttribute()
    {
        $product_units = $this->inventories;
        $total = 0;
        foreach ($product_units as $product_unit){
            $total += $product_unit->amount * $product_unit->unit->modifier;
        }
        return $total;
    }

    public function getTotalQuantityByUnitIdAttribute()
    {
        if(isset(request()->unit_id)){
            $unit_id = request()->unit_id;
            $product_units = $this->inventories()->where('unit_id',$unit_id)->get();
            $total = 0;
            foreach ($product_units as $product_unit){
                $total += $product_unit->amount * $product_unit->unit->modifier;
            }
            return $total;
        }
        return 0;
    }

    public function getImagePathAttribute()
    {
        return $this->image == null ? null : $this->image->path ;
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'o');
    }

}
