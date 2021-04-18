<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\DateTime;

class YearFracTest extends AllSetupTeardown
{
    /**
     * @dataProvider providerYEARFRAC
     *
     * @param mixed $expectedResult
     * @param mixed $arg1
     * @param mixed $arg2
     * @param mixed $arg3
     */
    public function testYEARFRAC($expectedResult, $arg1 = 'omitted', $arg2 = 'omitted', $arg3 = 'omitted'): void
    {
        $this->mightHaveException($expectedResult);
        $sheet = $this->sheet;
        if ($arg1 !== null) {
            $sheet->getCell('A1')->setValue($arg1);
        }
        if ($arg2 !== null) {
            $sheet->getCell('A2')->setValue($arg2);
        }
        if ($arg3 !== null) {
            $sheet->getCell('A3')->setValue($arg3);
        }
        if ($arg1 === 'omitted') {
            $sheet->getCell('B1')->setValue('=YEARFRAC()');
        } elseif ($arg2 === 'omitted') {
            $sheet->getCell('B1')->setValue('=YEARFRAC(A1)');
        } elseif ($arg3 === 'omitted') {
            $sheet->getCell('B1')->setValue('=YEARFRAC(A1, A2)');
        } else {
            $sheet->getCell('B1')->setValue('=YEARFRAC(A1, A2, A3)');
        }
        self::assertEqualswithDelta($expectedResult, $sheet->getCell('B1')->getCalculatedValue(), 1E-6);
    }

    public function providerYEARFRAC(): array
    {
        return require 'tests/data/Calculation/DateTime/YEARFRAC.php';
    }
}
