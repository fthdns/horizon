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
                <h1>Who is Going?</h1>
                <p class="trip-destination">Trip to Bali, Indonesia</p>
    
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
                      <tr>
                        <td><img src="{{ url('frontend/images/user_pic_1.jpg') }}" alt="Kelvin" /></td>
                        <td>Kelvin Aditya</td>
                        <td>ID</td>
                        <td>N/A</td>
                        <td>Active</td>
                        <td><a href="#"><img src="{{ url('frontend/images/ic_remove.jpg') }}" alt="Remove" class="remove-icon" /></a></td>
                      </tr>
                      <tr>
                        <td><img src="{{ url('frontend/images/user_pic_2.jpg') }}" alt="Agnes" /></td>
                        <td>Agnes Carlson</td>
                        <td>SG</td>
                        <td>30 Days</td>
                        <td>Active</td>
                        <td><a href="#"><img src="{{ url('frontend/images/ic_remove.jpg') }}" alt="Remove" class="remove-icon" /></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
    
                <div class="add-member">
                  <h2>Add Member</h2>
                  <form class="add-member-form">
                    <input for = "inputVisa" class = "sr-only" type="text" placeholder="Username" />
                    <select>
                      <option value="">VISA</option>
                      <option value="30">30 Days</option>
                      <option value="na">N/A</option>
                    </select>
                    <input for = "doePassport" type="text" placeholder="DOE Passport" class="form-control datepicker" />
                    <button type="submit" class="btn-add">Add Now</button>
                  </form>
                  <p class="note">You are only able to invite member that has registered in Horizon.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Checkout Informations</h2>
                <table class="info-table">
                  <tr>
                    <td>Members</td>
                    <td class="text-right">2 person</td>
                  </tr>
                  <tr>
                    <td>Additional VISA</td>
                    <td class="text-right">$190.00</td>
                  </tr>
                  <tr>
                    <td>Trip Price</td>
                    <td class="text-right">$80.00 / person</td>
                  </tr>
                  <tr>
                    <td>Sub Total</td>
                    <td class="text-right">$280.00</td>
                  </tr>
                  <tr>
                    <td>Total (+Unique Code)</td>
                    <td class="text-right total-price"><span class="blue">$279,</span><span class="orange">33</span></td>
                  </tr>
                </table>
    
                <hr />
    
                <h2>Payment Instructions</h2>
                <p class="payment-text">
                  Please complete the payment before you continue the trip
                </p>
    
                <div class="payment-bank">
                  <div class="bank-item">
                    <img src="{{ url('frontend/images/ic_card.jpg') }}" alt="Bank" />
                    <div>
                      <h3>PT Horizon ID</h3>
                      <p>0881 8829 8800 <br> Bank Central Asia</p>
                    </div>
                  </div>
                  <div class="bank-item">
                    <img src="{{ url('frontend/images/ic_card.jpg') }}" alt="Bank" />
                    <div>
                      <h3>PT Horizon ID</h3>
                      <p>0896 3682 9311 <br> Bank HSBC</p>
                    </div>
                  </div>
                </div>
    
                <a href="{{ route('checkout-success') }}" class="btn-payment">I Have Made Payment</a>
                <div class="cancel-booking">
                  <a href="{{ route('detail') }}">Cancel Booking</a>
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
          uiLibrary: 'bootstrap5',
          icons: {
            rightIcon: '<img src="{{ url('frontend/images/ic_date.png') }}" alt="" class="datepickerImg" />'
          }
        });
      });
    </script>
@endpush