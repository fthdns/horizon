@extends('layouts.checkout')

@section('title', 'Checkout')

@section('content')
<!-- Checkout -->
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0 pl-3 pl-lg-0">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                  <li class="breadcrumb-item" aria-current="page">
                    Travel Package
                  </li>
                  <li class="breadcrumb-item" aria-current="page">
                    Details
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">
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
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <h1>Who is Going?</h1>
            <p class="trip-destination">Trip to {{ $item->travelPackage->title }}, {{ $item->travelPackage->location }}</p>

            <div class="attendee-table">
              <table>
                <thead>
                  <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Nationality</th>
                    <th>Visa</th>
                    <th>Passport</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @forelse ($item->details as $detail)
                     <tr>
                        <td><img src="https://ui-avatars.com/api/?name={{ $detail->username }}" height="60" class="rounded-circle"/></td>
                        <td class="align-middle">{{ $detail->username }}</td>
                        <td class="align-middle">{{ $detail->nationality }}</td>
                        <td class="align-middle">{{ $detail->is_visa ? '30 Days' : 'N/A' }}</td>
                        <td class="align-middle">{{ \Carbon\Carbon::createFromDate($detail->doe_passport) > \Carbon\Carbon::now() ? 'Active' : 'Inactive' }}</td>
                        <td class="align-middle"><a href="{{ route('checkout-remove', $detail->id) }}"><img src="{{ url('frontend/images/ic_remove.jpg') }}" alt="Remove" class="remove-icon" /></a></td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="6" class="text-center">No members added yet.</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>

            <div class="add-member">
              <h2>Add Member</h2>
              <form class="add-member-form d-flex align-items-center gap-2" action="{{ route('checkout-create', $item->id) }}" method="POST">
                @csrf
                <input name = "username" class = "sr-only form-control mr-2" type="text" placeholder="Username" style="width: 150px"/>
                <input name = "nationality" class = "sr-only form-control mr-2" type="text" placeholder="Nationality" style="width: 50px"/>
                <select name="is_visa" class="custom-select mr-2">
                  <option value="" disabled selected>VISA</option>
                  <option value="1">30 Days</option>
                  <option value="0">N/A</option>
                </select>
                <input name = "doe_passport" type="text" placeholder="DOE Passport" class="sr-only form-control datepicker mr-2" />
                <button type="submit" class="btn-add">Add Now</button>
              </form>
              <p class="note">You are only able to invite member that has registered in Horizon.</p>
            </div>
          </div>
          @if (session('success'))
              <div class="alert alert-success mt-2">
                  {{ session('success') }}
              </div>
          @endif
        </div>
        <div class="col-lg-4">
          <div class="card card-details card-right-checkout">
            <h2>Checkout Informations</h2>
            <table class="info-table">
              <tr>
                <td>Members</td>
                <td class="text-right">{{ $item->details->count() }} person</td>
              </tr>
              <tr>
                <td>Additional VISA</td>
                <td class="text-right">${{ $item->additional_visa }}.00</td>
              </tr>
              <tr>
                <td>Trip Price</td>
                <td class="text-right">${{ $item->travelPackage->price }}.00 / person</td>
              </tr>
              <tr>
                <td>Sub Total</td>
                <td class="text-right">${{ $item->transaction_total }}.00</td>
              </tr>
              <tr>
                <td>Total (+Unique Code)</td>
                <td class="text-right total-price"><span class="blue">${{ $item->transaction_total }},</span><span class="orange">{{ mt_rand(0,99) }}</span></td>
              </tr>
            </table>

            <hr />

            <h2>Payment Instructions</h2>
            <p>Please complete the payment before you continue the trip.</p>

            <div class="payment-bank">
              <div class="bank-item">
                <img src="{{ url('frontend/images/ic_card.jpg') }}" alt="Bank" />
                <div>
                  <h2>PT Horizon ID</h2>
                  <p>0881 8829 8800 <br> Bank Central Asia</p>
                </div>
              </div>
              <div class="bank-item">
                <img src="{{ url('frontend/images/ic_card.jpg') }}" alt="Bank" />
                <div>
                  <h2>PT Horizon ID</h2>
                  <p>0896 3682 9311 <br> Bank HSBC</p>
                </div>
              </div>
            </div>

            <a href="{{ route('checkout-success', $item->id) }}" class="btn btn-block btn-payment">I Have Made Payment</a>
            <div class="cancel-booking">
              <a href="{{ route('detail', $item->travelPackage->slug) }}" class="text-muted">Cancel Booking</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.datepicker').datepicker({
          format: 'yyyy-mm-dd',
          uiLibrary: 'bootstrap5',
          icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_date.png') }}" alt="" class="datepickerImg" />'
          }
        });
      });
    </script>
@endpush