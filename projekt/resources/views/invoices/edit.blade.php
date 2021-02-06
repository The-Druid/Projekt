@extends('layouts.FakTheme')

@section('fakturyContent')

<!-- Contact Section-->
<section class="masthead page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytujesz fakture {{ $invoice->id }} </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form action="{{ route('invoices.update', ['id'=>$invoice->id]) }}" method="POST" id="contactForm" name="sentMessage" novalidate="novalidate">
                    {{csrf_field()}}
                    @method('PUT')
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Numer Faktury</label>
                            <input class="form-control" value="{{ $invoice->number }}" id="number" name="number" type="text" placeholder="Numer faktury" required="required" data-validation-required-message="Podaj numer faktury" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Data wystawienia</label>
                            <input value="{{ $invoice->date }}" class="form-control" id="date" type="text" name="date" placeholder="Data wystawienia" required="required" data-validation-required-message="Wprowadź datę" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Kwota</label>
                            <input value="{{ $invoice->total }}"  class="form-control" id="total" type="text" name="total" placeholder="Kwota faktury" required="required" data-validation-required-message="Wprowadź kwotę" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                    <br/>
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Zapisz fakture</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
