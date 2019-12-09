<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Invoice extends Model
{
    public function invoiceReport() {
        return $this->belongsTo(InvoiceReport::class);
    }
}