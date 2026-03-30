<?php
namespace App\DataTables;

use App\Models\Organization;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;
// use Yajra\DataTables\Services\DataTable;

class OrganizationDataTable extends BaseDataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('type', function ($query) {
                if ($query->type == 1) {
                    return "Commertial";
                }
                return "Industrial";
            })
            ->addColumn('action', function (Organization $organization) {
                return view('backend.pages.organization.partials.action', compact('organization'));
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<Organization>
     */
    public function query(Organization $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('name')->title('প্রতিষ্ঠানের নাম'),
            Column::make('address')->title('প্রতিষ্ঠানের ঠিকানা'),
            Column::make('bin_no')->title('প্রতিষ্ঠানের বিন নম্বর'),
            Column::make('type')->title('প্রতিষ্ঠানের ধরণ'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->addClass('text-center'),
        ];
    }

    protected function getTableId(): string
    {
        return 'organization-table';
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Organization_' . date('YmdHis');
    }
}
