<?php

namespace App\Exports;

use DB;
use App\Saida;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SaidasExport implements FromCollection, WithHeadings
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
        return DB::table('saidas')
            ->where('dataVenda','>=',$this->startDate)
            ->where('dataVenda','<=',$this->endDate)
            ->select(['cliente_id','vendedor_id','dataVenda','situacao','observacoes','valor','valorRecebido','valorComissao'])->get();
    }

    public function headings(): array
    {
        return [
            'Cliente',
            'Vendedor',
            'Data',
            'Situação',
            'Observações',
            'Valor',
            'Valor Recebido',
            'Valor Comissão'
        ];
    }
}