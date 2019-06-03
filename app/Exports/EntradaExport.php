<?php

namespace App\Exports;

use DB;
use App\Entrada;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EntradaExport implements FromCollection, WithHeadings
{

    private $startDate;
    private $endDate;

    public function __construct($_startDate, $_endDate)
    {
        $this->startDate = $_startDate;
        $this->endDate = $_endDate;
    }

    public function collection()
    {
        return DB::table('entradas')
            ->where('dataCompra','>=',$this->startDate)
            ->where('dataCompra','<=',$this->endDate)
            ->select(['fornecedor_id','dataCompra','situacao','observacoes','valor','valorPago'])->get();
    }

    public function headings(): array
    {
        return [
            'Fornecedor',
            'Data',
            'Situação',
            'Observações',
            'Valor',
            'Valor Pago'
        ];
    }
}