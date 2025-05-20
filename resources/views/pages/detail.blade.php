@extends('layouts.app')

@section('title', 'Detail')

@section('content')
    <!-- Details -->
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
                  <li class="breadcrumb-item active" aria-current="page">
                    Details
                  </li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 pl-lg-0">
              <div class="card card-details">
                <h1>Bali</h1>
                <p>
                  Indonesia
                </p>
                <div class="gallery">
                  <div class="xzoom-container">
                    <img
                      class="xzoom"
                      id="xzoom-default"
                      src="frontend/images/pic_featured1.jpg"
                      xoriginal="frontend/images/pic_featured1.jpg"
                    />
                    <div class="xzoom-thumbs">
                      <a href="frontend/images/pic1.jpg"
                        ><img
                          class="xzoom-gallery"
                          width="119"
                          src="frontend/images/pic1.jpg"
                          xpreview="frontend/images/pic_featured1.jpg"
                      /></a>
                      <a href="frontend/images/pic2.jpg"
                        ><img
                          class="xzoom-gallery"
                          width="119"
                          src="frontend/images/pic2.jpg"
                          xpreview="frontend/images/pic_featured2.jpg"
                      /></a>
                      <a href="frontend/images/pic3.jpg"
                        ><img
                          class="xzoom-gallery"
                          width="119"
                          src="frontend/images/pic3.jpg"
                          xpreview="frontend/images/pic_featured3.jpg"
                      /></a>
                      <a href="frontend/images/pic4.jpg"
                        ><img
                          class="xzoom-gallery"
                          width="119"
                          src="frontend/images/pic4.jpg"
                          xpreview="frontend/images/pic_featured4.jpg"
                      /></a>
                      <a href="frontend/images/pic5.jpg"
                        ><img
                          class="xzoom-gallery"
                          width="128"
                          src="frontend/images/pic5.jpg"
                          xpreview="frontend/images/pic_featured5.jpg"
                      /></a>
                    </div>
                  </div>
                </div>
                <h2>About The Place</h2>
                <p>
                  Bali is a province of Indonesia and the westernmost of the Lesser Sunda Islands. East of Java and west of Lombok, the province includes the island of Bali and a  few smaller offshore islands, notably Nusa Penida, Nusa Lembongan, and Nusa Ceningan to the southeast.
                </p>
                <p>
                  Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan. The Badung Strait separates the island and Bali.
                </p>
                <div class="features row pt-3">
                  <div class="col-md-4">
                    <img
                      src="frontend/images/ic_event.jpg"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Featured Ticket</h3>
                      <p>Tari Kecak</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <img
                      src="frontend/images/ic_lang.jpg"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Language</h3>
                      <p>Bahasa Indonesia</p>
                    </div>
                  </div>
                  <div class="col-md-4 border-start">
                    <img
                      src="frontend/images/ic_food.jpg"
                      alt=""
                      class="features-image"
                    />
                    <div class="description">
                      <h3>Foods</h3>
                      <p >Local Foods</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="card card-details card-right">
                <h2>Members are going</h2>
                <div class="members my-2">
                  <img src="frontend/images/members.jpg" alt="" class="w-75" />
                </div>
                <hr />
                <h2>Trip Informations</h2>
                <table class="trip-informations">
                  <tr>
                    <th width="50%">Date of Departure</th>
                    <td width="50%" class="text-end">16 Sep, 2022</td>
                  </tr>
                  <tr>
                    <th width="50%">Duration</th>
                    <td width="50%" class="text-end">4D 3N</td>
                  </tr>
                  <tr>
                    <th width="50%">Type</th>
                    <td width="50%" class="text-end">Open Trip</td>
                  </tr>
                  <tr>
                    <th width="50%">Price</th>
                    <td width="50%" class="text-end">$80,00 / person</td>
                  </tr>
                </table>
              </div>
              <div class="join-container">
                <a href="{{ route('checkout') }}" class="btn btn-block btn-join-now  py-2"
                  >Join Now</a
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/dist/xzoom.css') }}" />
@endpush

@push('addon-script')
    <script src="{{ url('frontend/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script>
      $(document).ready(function() {
        $('.xzoom, .xzoom-gallery').xzoom({
          zoomWidth: 500,
          title: false,
          tint: '#333',
          Xoffset: 15
        });
      });
    </script>
@endpush