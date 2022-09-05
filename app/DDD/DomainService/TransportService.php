<?php

/**
 * 輸送クラス
 */
class TransportService
{
    /**
     * 輸送
     *
     * @param PhysicalDistributionBase $to
     * @param Baggage $baggage
     * @return void
     */
    public function Transport(PhysicalDistributionBase $from, PhysicalDistributionBase $to, Baggage $baggage): void
    {
        $shippedBaggage = $from->Ship($baggage);
        $to->Receive($shippedBaggage);

        // 配送の記録を行う
        // ...略...
    }
}
