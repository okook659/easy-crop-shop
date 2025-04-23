<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Client;
use App\Models\Produit;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = ["typeTransaction", "dateTransaction", "quantiteTransitee", "prix", "client_id", "produit_id"];

    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }    
}
