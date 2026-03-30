<?php

namespace App\DataTables;

use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Services\DataTable;

abstract class BaseDataTable extends DataTable
{
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('organization-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('lBfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->parameters([
                'dom'          =>
                "<'row align-items-center mb-3'" .
                "<'col-md-6'l>" .
                "<'col-md-6 d-flex justify-content-end flex-wrap gap-2'B>" .
                ">" .
                "<'row mb-3'" .
                "<'col-md-12 d-flex justify-content-end'f>" .
                ">" .
                "<'row'<'col-sm-12'tr>>" .
                "<'row mt-3'" .
                "<'col-md-5'i>" .
                "<'col-md-7 d-flex justify-content-end'p>" .
                ">",
                'initComplete' =>
                'function(settings, json) {
                    $(".dt-buttons button").removeClass("btn-secondary").addClass("btn-primary");
                }',
            ])
            ->buttons($this->getButtons());
    }

    protected function getButtons(): array
    {
        return [
                Button::make('excel')->className('btn btn-primary btn-sm'),
                Button::make('csv')->className('btn btn-primary btn-sm'),
                Button::make('pdf')->className('btn btn-primary btn-sm'),
                Button::make('print')->className('btn btn-primary btn-sm'),
            ];
    }

    abstract protected function getTableId(): string;
}
