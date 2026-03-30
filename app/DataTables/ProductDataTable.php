<?php
namespace App\DataTables;

use App\Models\Product;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Column;

class ProductDataTable extends BaseDataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder<Product> $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('organization_name', function (Product $product) {
                return $product->organization_name;
            })
            ->addColumn('action', function (Product $product) {
                return view('backend.pages.product.partials.action', compact('product'));
            })
            ->filterColumn('organization_name', function ($query, $keyword) {
                $query->where('organizations.name', 'like', "%{$keyword}%");
            })
            ->orderColumn('organization_name', 'organizations.name $1')
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     *
     * @return QueryBuilder<Product>
     */
    public function query(Product $model): QueryBuilder
    {
        return $model->newQuery()
            ->leftJoin('organizations', 'products.organization_id', '=', 'organizations.id')
            ->select('products.*', 'organizations.name as organization_name');
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
            Column::make('name')->title('পণ্যের নাম'),
            Column::make('organization_name')->title('প্রতিষ্ঠানের নাম'),
            Column::computed('action')
                ->exportable(true)
                ->printable(true)
            //   ->width(60)
                ->addClass('text-center'),
        ];
    }

    protected function getTableId(): string
    {
        return 'product-table';
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Product_' . date('YmdHis');
    }
}
