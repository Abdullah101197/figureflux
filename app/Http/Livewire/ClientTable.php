<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Invoice;
use App\Models\Package;
use App\Models\Payment;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Rappasoft\LaravelLivewireTables\Views\Column;

class ClientTable extends LivewireTableComponent
{
    protected $model = Client::class;

    protected string $tableName = 'clients';

    // for table header button
    public $showButtonOnHeader = true;

    public $buttonComponent = 'clients.components.add-button';

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->setDefaultSort('created_at', 'desc');
        $this->setQueryStringStatus(false);


        $this->setTdAttributes(function (Column $column, $row, $columnIndex, $rowIndex) {
            if ($column->getField() === 'first_name') {
                return [
                    'class' => 'w-75',
                ];
            }

            return [];
        });
    }

    public function columns(): array
    {
        return [
            Column::make(__('messages.client.client'), 'user.first_name')
                ->sortable()
                ->searchable()
                ->view('clients.components.full_name'),

            Column::make(__('messages.client.Subscription'), 'id')
                ->sortable()
                ->searchable()->format(function ($value, $row, Column $column) {
                    $client = Client::find($value);
                    return $client->packages()->latest('packages.created_at')->first()?->plan_name;
                }),


            Column::make(__('messages.client.StartDate'), 'id')
                ->sortable()
                ->searchable()->format(function ($value, $row, Column $column) {
                    $client = Invoice::find($value);

                    if ($client != null) {

                        $invoice_id = $client->invoice_id;


                        $date = Payment::find($invoice_id);

                        if ($date != null) {
                            $CurrentDate = $date->payment_date;
                            $final = date_format($CurrentDate, "Y-m-d");
                            return $final;
                        } else {


                            return 'Not paid';
                        }
                    }



                }),


            Column::make(__('messages.client.EndDate'), 'id')
                ->sortable()
                ->searchable()->format(function ($value, $row, Column $column) {
                    $client = Invoice::find($value);

                    if ($client != null) {


                        $invoice_id = $client->invoice_id;

                        $date = Payment::find($invoice_id);


                        if ($date != null) {

                            $CurrentDate = $date->payment_date;

                            $time = strtotime($CurrentDate);
                            $final = date("Y-m-d", strtotime("+1 month", $time));

                            return $final;
                        } else {


                            return 'Not paid';
                        }
                    }


                }),

            Column::make(__('messages.client.business_name'), 'user.business_name')
                ->sortable()
                ->searchable(),

            Column::make('last_name', 'user.last_name')
                ->sortable()
                ->searchable()
                ->hideIf(1),
            Column::make('Invoice', 'website')
                ->sortable()
                ->searchable()
                ->view('clients.components.invoice-count'),
            Column::make(__('messages.common.action'), 'id')
                ->format(function ($value, $row, Column $column) {
                    return view('livewire.action-button')->with([
                        'editRoute' => route('clients.edit', $row->id),
                        'dataId' => $row->id,
                        'editClass' => 'user-edit-btn',
                        'deleteClass' => 'client-delete-btn',
                    ]);
                }),
        ];
    }

    public function builder(): Builder
    {
        $query = Client::with(['user.media', 'country', 'state', 'city'])->withCount('invoices');

        return $query;
    }
}
