<?php

namespace App\Listeners;

use App\Events\RechargeApply;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class RechargeApplyListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  RechargeApply  $event
     * @return void
     */
    public function handle(RechargeApply $event)
    {
        //
    }
}
