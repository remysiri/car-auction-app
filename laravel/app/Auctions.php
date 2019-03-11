<?php

namespace GTImports;

use Illuminate\Database\Eloquent\Model;

class Auctions extends Model
{
    protected $fillable = [
        'title', 'description', 'price', 'miles', 'kilometres', 'model', 'chassis', 'manufacture', 'color', 'fueltype', 'transmission', 'exteriorfeature', 'interiorfeature', 'safetyfeature', 'audiofeature',
    ];

    public function status()
    {
        return $this->belongsToMany(Status::class, 'auctions_status', 'status_id', 'auctions_id');
    }

    public function getAuctionRole()
    {
        return $this->status()->first();
    }

    public function authorizeStatus($status)
    {
        if (is_array($status)) {
            return $this->hasAnyStatus($status) ||
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasStatus($status) ||
            abort(401, 'This action is unauthorized');
    }

    public function hasAnyRole($status)
    {
        return null !== $this->status()->whereIn('name', $status)->first();
    }

    public function hasRole($status)
    {
        return null != $this->status()->where('name', $status)->first();
    }
}
