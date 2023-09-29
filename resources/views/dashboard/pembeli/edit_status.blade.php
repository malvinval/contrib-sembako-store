@extends('dashboard.layout.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>


    @can('admin')
    <form method="post" action="/dashboard/pembeli/{{ $order->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="idOrder" class="form-label">ID Order</label>
            <input class="form-control" type="text" value="{{ old('id', $order->id) }}" aria-label="Disabled input example" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama User</label>
            <input class="form-control" type="text" value="{{ $order->user->name }}" aria-label="Disabled input example" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Transaction ID</label>
            <input class="form-control" type="text" value="{{ old('transaction_id', $order->transaction_id) }}" aria-label="Disabled input example" disabled>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Transaction Status</label>
            <input class="form-control" type="text"  aria-label="Disabled input example" value="{{ old('transaction_status', $order->transaction_status) }}" name="transaction_status">>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    @endcan
  </main>
@endsection
