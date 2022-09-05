<?php

/**
 * 物流クラス
 */
class PhysicalDistributionBase
{

    /**
     * 出庫
     *
     * @param Baggage $baggage
     * @return Baggage
     */
    public function Ship(Baggage $baggage): Baggage
    {
    }

    /**
     * 入庫
     *
     * @param Baggage $baggage
     * @return void
     */
    public function Receive(Baggage $baggage): void
    {
    }
}
