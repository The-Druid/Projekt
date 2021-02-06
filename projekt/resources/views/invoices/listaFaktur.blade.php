@extends ('layouts.FakTheme')

@section('fakturyContent')
    <style>
        tr:hover{color:black; background-color:lightcyan}

    </style>
<!-- Portfolio Section-->
<section class="masthead page-section portfolio" id="portfolio">
    <div class="container">

        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista faktur</h2>
        @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>ZAPISANO ZMIANY!</strong> {{session()->get('message')}}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <table class="table table-dark bg-secondary">
            <thead>
            <tr class="text-white bg-dark">
                <th scope="col">#</th>
                <th scope="col">Numer faktury</th>
                <th scope="col">Data</th>
                <th scope="col">Kwota</th>

                <th class="text-center "colspan="2" scope="col">Akcje</th>
            </tr>
            </thead>


            @foreach ($invoices as $invoice)

                @if($invoice->userID==(Auth::id()))
                <tr>
                    <td>{{$invoice->id}}</td>
                    <td>{{$invoice->number}}</td>
                    <td>{{$invoice->date}}</td>
                    <td>{{$invoice->total}}</td>

                    <td class="text-center"> <a href="{{route('invoices.edit', ['id' => $invoice->id]) }}" class="btn btn-default bg-dark text-white" > Edytuj</a></td>
                    <td class="text-center"> <a href="{{route('invoices.delete', ['id' => $invoice->id]) }}" class="btn btn-default bg-dark text-white" > Usuń</a></td>
                </tr>
                @endif
            @endforeach




        </table>

</div>
</section>
@endsection
