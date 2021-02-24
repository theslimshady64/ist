<?php

namespace App\Services;

class Test {

    public function import($request)
    {
        return file_get_contents($request->files->all()['currency']);
    }

    public function export($request)
    {
        $allCurrency = json_decode($request->allCurrency, true);
        $currency = json_decode(file_get_contents($request->files->all()['currency']), true);
        $result = collect();

        foreach ($allCurrency as $item) {
            if ($item['office_id'] == $currency['office_id']
                && $item['begins_at'] == $currency['at_date']) {
                $result->push($item['currency']);
            }
        }

        return $result->toJson();
    }
}
