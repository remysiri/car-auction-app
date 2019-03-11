<?php

namespace GTImports;

use Illuminate\Database\Eloquent\Model;

class AuctionStatus extends Model
{
    protected $table = 'auctions_status';
    protected $fillable = [
        'status_id', 'auction_id',
    ];
}
