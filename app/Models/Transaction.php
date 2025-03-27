<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionFactory> */
    use HasFactory;

    protected $fillable = ["typeTransaction", "dateTransaction", "quantiteTransitee", "prix", "acheteur", "produit_id"];

    public function produit(): BelongsTo
    {
        return $this->belongsTo(Produit::class);
    }
}
