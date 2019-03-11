<?php

use Illuminate\Database\Seeder;
use GTImports\Status;

class StatusesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status_pending = new Status();
        $status_pending->name = 'Pending';
        $status_pending->description = 'Het veiling wordt afgesloten, dit kan tot 48 uur duren, indien langer gelieve ons te contacteren met het veilingsnummer.';
        $status_pending->save();

        $status_prepare = new Status();
        $status_prepare->name = 'Preparing';
        $status_prepare->description = 'Uw voertuig wordt geïnspecteerd en klaar gemaakt om te voldoen aan de wetgeving.';
        $status_prepare->save();

        $status_shipping = new Status();
        $status_shipping->name = 'Shipping';
        $status_shipping->description = 'Uw voertuig is onderweg naar het gekozen dock.';
        $status_shipping->save();

        $status_ready = new Status();
        $status_ready->name = 'Shipped';
        $status_ready->description = 'Uw voertuig staat klaar aan het gekozen dock, gelieve de meegeleverde papieren mee te brengen bij het ophalen van het voertuig.';
    }
}
