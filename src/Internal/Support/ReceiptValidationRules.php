<?php


namespace redmenta\SzamlazzHu\Internal\Support;


use Illuminate\Validation\Rule;

trait ReceiptValidationRules {

    /**
     * @return array
     */
    public function validationRulesForObtainingReceipt()
    {
        return [
            'receiptNumber' => ['required', 'string']
        ];
    }

    /**
     * @return array
     */
    public function validationRulesForCancellingReceipt()
    {
        return [
            'receiptNumber' => ['required', 'string']
        ];
    }

    /**
     * @return array
     */
    public function validationRulesForSavingReceipt()
    {
        return [];
    }

}
