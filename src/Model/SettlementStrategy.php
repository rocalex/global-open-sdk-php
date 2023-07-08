<?php

namespace Alipay\GlobalApiSDK\Model;

class SettlementStrategy {

    public $settlementCurrency;

    public function getSettlementCurrency() {
        return $this->settlementCurrency;
    }

    public function setSettlementCurrency($settlementCurrency) {
        $this->settlementCurrency = $settlementCurrency;
    }
}