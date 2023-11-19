<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Package;
use Illuminate\Support\Facades\DB;

class PackageTable extends LivewireTableComponent
{
    protected $model = Package::class;

    protected string $tableName = 'packages';

        // for table header button
        public $showButtonOnHeader = true;
        public $buttonComponent = 'packages.table-components.add-button';
    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setPageName('page');
        $this->setDefaultSort('created_at', 'desc');
        $this->setQueryStringStatus(false);
    }
    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Package", "plan_name")
                ->sortable(),
            Column::make("Price", "price")
                ->sortable(),
                Column::make("Currency", "currency_id")
                ->sortable(),
                Column::make("Duration", "package_duration")
                ->sortable(),
            Column::make("Features", "features")
                ->sortable()->format(function ($value, $row, Column $column) {
                    return view('packages.show')
                        ->withValue([
                            'features' => $row->features,
                        ]);
                }),

            Column::make("Description", "Description")
            ->sortable()->format(function ($value, $row, Column $column) {
                return view('packages.show')
                    ->withValue([
                        'Description' => $row->Description,
                    ]);
            }),
               Column::make("status", "status")
            ->sortable()->format(function ($value, $row, Column $column) {
                return view('packages.show')
                    ->withValue([
                        'status' => $row->status,
                    ]);
            }),
            Column::make(__('messages.common.action'), 'id')
                ->format(function ($value, $row, Column $column) {
                    return view('livewire.action-button')->with([
                        'editRoute' => route('packages.edit', $row->id),
                        'dataId' => $row->id,
                        'row' => $row,
                        'editClass' => 'package-edit-btn',
                        'deleteClass' => 'package-delete-btn'
                    ]);
                }),
        ];
    }



}
