<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobTable extends LivewireTableComponent
{
    protected $model = Job::class;

    public $showButtonOnHeader = true;
    public $buttonComponent = 'jobs.table-components.add-button';

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
            Column::make("Title", "title")
                ->sortable(),
            Column::make("Description", "Description")
                ->sortable(),
            Column::make(__('messages.common.action'), 'id')
                ->format(function ($value, $row, Column $column) {
                    return view('livewire.action-button')->with([
                        'editRoute' => route('jobs.edit', $row->id),
                        'dataId' => $row->id,
                        'row' => $row,
                        'editClass' => 'job-edit-btn',
                        'deleteClass' => 'job-delete-btn'
                    ]);
                }),
        ];
    }
}
