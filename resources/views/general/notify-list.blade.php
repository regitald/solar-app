@extends('template')
@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app ">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Notifications List</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notifications List</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- Row -->
                <!-- Container -->
                <div class="container">
                    <ul class="notification">
                        @foreach($data as $key)
                        <li>
                            <div class="notification-time">
                                <span class="date">{{$key->created_at->format('l')}}</span>
                                <span class="time">{{$key->created_at->format('h:i')}}</span>
                            </div>
                            <div class="notification-icon">
                                <a href="javascript:void(0);"></a>
                            </div>
                            <div class="notification-time-date mb-2 d-block d-md-none">
                                <span class="date">{{$key->created_at->format('l')}}</span>
                                <span class="time ms-2">{{$key->created_at->format('h:i')}}</span>
                            </div>
                            <div class="notification-body">
                                <div class="media mt-0">
                                    @if($key['order_status'] == 'New')
                                    <div class="me-3 notifyimg  bg-secondary brround box-shadow-secondary">
                                        <i class="fe fe-file-plus"></i>
                                    </div>
                                    @elseif($key['order_status'] == 'late')
                                    <div class="me-3 notifyimg  bg-warning brround box-shadow-secondary">
                                        <i class="fe fe-alert-octagon"></i>
                                    </div>
                                    @elseif($key['order_status'] == 'reject')
                                    <div class="me-3 notifyimg  bg-primary brround box-shadow-secondary">
                                        <i class="fe fe-alert-triangle"></i>
                                    </div>
                                    @else
                                    <div class="me-3 notifyimg  bg-info brround box-shadow-secondary">
                                        <i class="fe fe-check-circle"></i>
                                    </div>
                                    @endif
                                    <div class="media-body ms-3 d-flex">
                                        <div class="">
                                            <p class="fs-15 text-dark fw-bold mb-0">{{$key->notification_title}}</p>
                                            <p class="mb-0 fs-13 text-dark">{{$key->notification_desc}}</p>
                                        </div>
                                        <div class="notify-time">
                                            <p class="mb-0 text-muted fs-11">{{$key->created_at->format('h:i')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- End Container -->
                <!-- /Row -->
            </div>
            <!-- CONTAINER CLOSED -->
        </div>
    </div>
    <!--app-content closed-->
</div>
@endsection
