@extends('layouts.app')
@section('table-name')
الطلبات
@endsection
@section('content')
<div class="container-fluid" style="margin-left:0">
  <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
      <div class="card-body px-4 py-3">
          <div class="row align-items-center">
              <div class="col-9">
                  <h4 class="fw-semibold mb-8">@yield('table-name')</h4>
                  <nav aria-label="breadcrumb" style="direction:ltr;">
                      <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                              <a class="text-muted text-decoration-none" href="{{ route('dashboard') }}">الرئيسية</a>
                          </li>
                          
                          <li class="breadcrumb-item" aria-current="page">@yield('table-name')</li>
                      </ol>
                  </nav>
              </div>
              <div class="col-3">
                  <div class="text-center mb-n5">
                      <img src="{{ asset('assets/dashboard/images/breadcrumb/ChatBc.png') }}" alt=""
                          class="img-fluid mb-n4" />
                  </div>
              </div>
          </div>
      </div>
  </div>
<div class="card overflow-hidden invoice-application">
  <div class="d-flex align-items-center justify-content-between gap-3 m-3 d-lg-none">
    <button class="btn btn-primary d-flex" type="button" data-bs-toggle="offcanvas"
      data-bs-target="#chat-sidebar" aria-controls="chat-sidebar">
      <i class="ti ti-menu-2 fs-5"></i>
    </button>
    <form class="position-relative w-100">
      <input type="text" class="form-control search-chat py-2 ps-5" id="text-srh"
        placeholder="Search Contact">
      <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
    </form>
  </div>
  <div class="d-flex">
    <div class="w-25 d-none d-lg-block border-end user-chat-box">
      <div class="p-3 border-bottom">
        <form class="position-relative">
          <input type="search" class="form-control search-invoice ps-5" id="text-srh"
            placeholder="Search Invoice" />
          <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
      </div>
      <div class="app-invoice">
        <ul class="overflow-auto invoice-users" style="height: calc(100vh - 262px)" data-simplebar>
        <?php $i=0;?>
          @foreach ($data as $row)
          <?php $i++ ?>
         <li>
          <a href="javascript:void(0)"
            class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light"
            id="invoice-{{ $row->id }}" data-invoice-id="{{ $row->id }}">
            <div
              class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center" style="margin:10px">
              <i class="ti ti-user fs-6"></i>
            </div>
            <div class="ms-3 d-inline-block w-75">
              <h6 class="mb-0 invoice-customer">{{ $row->user->name }}</h6>

              <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">Id: #{{ $i }}</span>
              <span class="fs-3 invoice-date text-nowrap text-body-color d-block">{{ $row->order_date }}</span>
            </div>
          </a>
        </li>
         @endforeach
        
        </ul>
      </div>
    </div>
    <div class="w-75 w-xs-100 chat-container">
      <div class="invoice-inner-part h-100">
        <div class="invoiceing-box">
          <div class="invoice-header d-flex align-items-center border-bottom p-3">
            <h4 class="font-medium text-uppercase mb-0">Invoice</h4>
            <div class="ms-auto">
              <h4 class="invoice-number"></h4>
            </div>
          </div>
          <div class="p-3" id="custom-invoice">
            <?php $i=0;?>
            @foreach ($data as $row)
            <?php $i++ ?>
            <div class="invoice-{{ $row->id }}" id="printableArea">
              <div class="row pt-3">
                <div class="col-md-12">
                  <div class="">
                    <address>
                      
                      <h6>&nbsp;من,</h6>
                      <h6 class="fw-bold">&nbsp;{{ $row->user->name }}</h6>
                      <p class="ms-1">
                       {{ $row->address_1 }}
                      </p>
                      <p class="ms-1">
                        {{ $row->address_2 }}
                       </p>
                    </address>
                  </div>
                  <div class="text-end">
                    <address>
                      <h6>إلى,</h6>
                      <h6 class="fw-bold invoice-customer">
                      {{ auth()->user()->name }}
                      </h6>
                     
                      <p class="mt-4 mb-1">
                        <span>تاريخ الفاتورة  :</span>
                        <i class="ti ti-calendar"></i>
                        {{ $row->order_date }}
                      </p>
                      <p class="mt-4 mb-1">
                        <span>حالة الفاتورة  :</span>
                     
                        {!! $row->status() !!}
                      </p>
                      <p class="mt-4 mb-1">
                        <span> اجمالي التكلفة  :</span>
                        
                        {{ $row->total }}
                      </p>
                      @if(!empty($row->coupon_id))
                      <p class="mt-4 mb-1">
                        <span> الكوبون  :</span>
                       
                        {{ $row->coupon->code}}
                      </p>
                      <p class="mt-4 mb-1">
                        <span> السعر بعد الخصم  :</span>
                       
                        {{ $row->total_after_discount }}
                      </p>
                      @endif
                    </address>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="table-responsive mt-5" style="clear: both">
                    <table class="table table-hover">
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th class="text-center">#</th>
                          <th>المنتج</th>
                          <th class="text-end">الكمية</th>
                          <th class="text-end">السعر</th>
                         
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                      
                        @foreach ($data as $row)
                        <?php $details = App\Models\OrderDetail::where('order_id',$row->id)->get() ?>
                        @endforeach
                        <?php $i =0; ?>
                        @foreach ($details as $d)
                        <?php $i++ ?>
                        <tr>
                          <td class="text-center">{{ $i }}</td>
                          <td>{{ $d->product->name }}</td>
                          <td class="text-end">{{ $d->quantity }}</td>
                          <td class="text-end">{{ $d->price }}</td>
                          
                         
                        </tr>
                        @endforeach
                        
                      
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-md-12">
              
                  <div class="clearfix"></div>
                  <hr />
                  <div class="text-end">
                    <button class="btn btn-danger" type="submit">
                      Proceed to payment
                    </button>
                    <button class="btn btn-primary btn-default print-page" type="button">
                      <span><i class="ti ti-printer fs-5"></i>
                        Print</span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="offcanvas offcanvas-start user-chat-box" tabindex="-1" id="chat-sidebar"
      aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">
          Invoice
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="p-3 border-bottom">
        <form class="position-relative">
          <input type="search" class="form-control search-invoice ps-5" id="text-srh"
            placeholder="Search Invoice">
          <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
        </form>
      </div>
      <div class="app-invoice overflow-auto">
        <ul class="invoice-users">
          <?php $i=0; ?>
         @foreach ($data as $row)
         <?php $i++ ?>
         <li>
          <a href="javascript:void(0)"
            class="p-3 bg-hover-light-black border-bottom d-flex align-items-start invoice-user listing-user bg-light"
            id="invoice-123" data-invoice-id="{{ $i }}">
            <div
              class="btn btn-primary round rounded-circle d-flex align-items-center justify-content-center">
              <i class="ti ti-user fs-6"></i>
            </div>
            <div class="ms-3 d-inline-block w-75">
              <h6 class="mb-0 invoice-customer">{{ $row->user->name }}</h6>

              <span class="fs-3 invoice-id text-truncate text-body-color d-block w-85">Id: #{{ $i }}</span>
              <span class="fs-3 invoice-date text-nowrap text-body-color d-block">{{ $row->created_at->diffForHumans() }}</span>
            </div>
          </a>
        </li>
         @endforeach
        
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
@push('scripts')
<script src="{{ asset('assets/dashboard/libs/fullcalendar/index.global.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/js/apps/invoice.js')}}"></script>
<script src="{{ asset('assets/dashboard/js/apps/jquery.PrintArea.js')}}"></script>
@endpush