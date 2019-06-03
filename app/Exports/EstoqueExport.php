<?php

namespace App\Exports;

use App\Estoque;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EstoqueExport implements FromCollection, WithHeadings
{
    private $startDate;
    private $endDate;

    public function collection()
    {
        //return Estoque::all();
        return DB::table('estoque')->select(['produto_id','quantidade','updated_at'])->get();
    }

    public function headings(): array
    {
        return [
            'Produto',
            'Quantidade',
            'Atualizado Em'
        ];
    }
}