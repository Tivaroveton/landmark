<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Invoice;
use App\Models\Job;

class OpeDetails extends Component
{
    public $invoiceId;
    public $invoice;
    public $job;

    public function mount($id)
    {
        $this->invoiceId = $id;
        $this->invoice = Invoice::findOrFail($id);

        $this->job = Job::findOrFail($id);
    }

    public function render_details($id)
    {
        $this->mount($id);
        return view('livewire.invoice.ope-details', ['invoice' => $this->invoice, 'job' => $this->job]);
    }

    public function render_edit($id)
    {
        $this->mount($id);
        return view('livewire.invoice.ope-edit', ['invoice' => $this->invoice, 'job' => $this->job]);
    }
}
