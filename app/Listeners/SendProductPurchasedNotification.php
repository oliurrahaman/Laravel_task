<?php

namespace App\Listeners;

use App\Events\ProductPurchased;
use App\Models\QuantityHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendProductPurchasedNotification
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductPurchased $event): void
    {
       // Access the product from the event
       $product = $event->product;

       // Perform the logic to update the product quantity
       $product->update([
           'quantity' => $product->quantity,
       ]);
    }
}
