@extends('layouts.checkout')
@section('title','checkout')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item">
                                Details
                            </li>
                            <li class="breadcrumb-item active">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors ->all() as $error)
                    <li>{{ $error }}</li>      
                    @endforeach
                    </ul>
                </div>
                @endif
                        <h1>Who is Going</h1>
                         <p> Trip To : {{ $item->travel_package->title}}, {{ $item->travel_package->location }}</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>username</td>
                                        <td>No Hp</td>
                                        <td>Passport</td>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse ($item->details as $detail)
                                <tr>
                                <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60"  class="rounded-circle"></td>
                                    <td class="align-middle">{{ $detail->username }}</td>
                                    <td class="align-middle">{{ $detail->no_hp }}</td>
                                    <td class="align-middle">{{ $detail->is_passport ? 'Not Indonesia'  : 'Indonesia' }}</td>
                                      </td>
                                    <td class="align-middle">  <a href="{{ route('checkout-remove', $detail->id) }}">X
                                        <img src="{{ url('frontend/images/ic_remove.png') }}" alt="" />
                                        </a>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">
                                        No visitor
                                    </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                        <div class="member mt-3">
                            <h2>Add Member</h2>
                        <form class="form-inline" method="POST" action="{{ route('checkout-create', $item->id) }}">
                            @csrf
                                <label for="username" class="sr-only">Name</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" placeholder="username"
                                    id="username" name="username" required>

                                <label for="is_passport" class="sr-only">Nationality</label>
                                <select name="is_passport" id="is_visa" class="custom-select mb-2 mr-sm-2">
                                    <option value="" selected>Nationality</option>
                                    <option value="0">Indonesia</option>
                                    <option value="1">Not Indonesia</option>
                                </select>
                                
                                <label for="nationality" class="sr-only">Nationality</label>
                                <input type="text" class="form-control mb-2 mr-sm-2" style="width:145px" placeholder="no hp"
                                    id="no_hp" name="no_hp"  required>
                                
                                <button class="btn btn-add-now mb-2 px-4" type="submit">Add Now</button>
                            </form>
                            <h3 class="mt-2 mb-0">
                                Note
                            </h3>
                            <p class="disclaimer mb-0">
                                You're only able to add members that has registered in Nomade Travel.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Informations</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Members</th>
                            <td width="50%" class="text-right">{{ $item->details->count() }} person</td>
                            </tr>
                            <tr>
                                <th width="50%">Addtional Passport</th>
                            <td width="50%" class="text-right">{{ $item->additional_passport }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Trip Price</th>
                                <td width="50%" class="text-right">{{ $item->travel_package->price }}</td>
                            </tr>
                            <tr>
                                <th width="50%">Sub Total </th>
                                <td widh="50%" class="text-right">
                                    {{ $item->transaction_total }}
                                </td>
                            </tr>
                            <tr>
                                <th width="50%"> Total Pay (+Uniqe)</th>
                                <td width="50%" class="text-right text-total"> <span class="text-blue">{{$item->transaction_total + mt_rand(0,99) }}</span>
                               
                            </tr>
                        </table>


                        <hr />
                        <h2>Payment Intructions</h2>
                        <p class="payment-instructions">
                            Please complete the payment before you start the trip.
                        </p>
                        <div class="bank">
                            <div class="bank-item pb-3">
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image">
                                <div class="description">
                                    <h3>PT Nomades</h3>
                                    <p>0881 8829 8800 <br>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                                <img src="{{ url('frontend/images/ic_bank.png') }}" alt="" class="bank-image mt-4">
                                <div class="description mt-4">
                                    <h3>PT Nomades</h3>
                                    <p>0881 8829 8800 <br>
                                        Bank Central Asia
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="join-container">
                        <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-join mt-0 py-2">
                            I Have Made Payment
                        </a>
                    </div>
                    <div class="text-center mt-4">
                    <a href="{{ route('detail', $item->travel_package->slug) }}" class ="text-muted">
                            CANCEL BOOKING
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</main>
@endsection

@push('prependstyle')
<link rel="stylesheet" href="{{ url('frontend/libraries/gijgo-master/dist/combined/css/gijgo.min.css') }}">
@endpush

@push('addonscript')
<script src="{{ url('frontend/libraries/gijgo-master/dist/combined/js/gijgo.min.js') }}"></script>

<script>
      $(document).ready(function () {
    
    $('.datepicker').datepicker({
        format: 'yyyy-mm-dd',
        uiLibrary: 'bootstrap4',
        icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_date.png') }}"/>'
        }
    });
    });
</script>
@endpush
