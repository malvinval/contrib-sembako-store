@extends('dashboard.layout.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    </div>

    <h2>Welcom Back, nama_pembeli</h2>


    @can('admin')
    <div class="table-responsive small mt-10">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">ID Order</th>
              <th scope="col">Nama Pembeli</th>
              <th scope="col">Status</th>
              <th scope="col">Ubah Status</th>



            </tr>
          </thead>
          <tbody>
              @foreach ($order as $cr )

              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $cr->id }}</td>
                  <td>{{ $cr->user->name }}</td>
                  <td>{{ $cr->transaction_status }}</td>
                  <td><a href="/dashboard/pembeli/{{ $cr->id }}/edit"><i class="bi bi-pencil-square"></i>Ubah</a></td>
              </tr>

              @endforeach
          </tbody>
    </table>
      </div>
    @endcan
  </main>
@endsection


