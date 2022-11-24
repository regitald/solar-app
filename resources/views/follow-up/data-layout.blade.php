@extends('template')
@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Data Layout</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data Layout</li>
                        </ol>
                    </div>

                </div>
                <!-- PAGE-HEADER END -->


                <!-- ROW-2-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Orders</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="file-datatable" class="table table-bordered text-nowrap key-buttons border-bottom">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">NO. LAYOUT</th>
                                                <th class="border-bottom-0">PEMESAN</th>
                                                <th class="border-bottom-0">ORDER</th>
                                                <th class="border-bottom-0">CODE/STYLE</th>
                                                <th class="border-bottom-0">TGL. PO MASUK</th>
                                                <th class="border-bottom-0">TGL. DIKIRIM</th>
                                                <th class="border-bottom-0">FOLLOW UP</th>
                                                <th class="border-bottom-0">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($data as $key)
                                        <tr>
                                            <td>{{$key['spk_number']}}</td>
                                            <td>{{$key['customer_name']}}</td>
                                            <td>{{$key['order_name']}}</td>
                                            <td>{{$key['code_style']}}</td>
                                            <td><?php echo date('Y/m/d', strtotime($key['order_date'])) ?></td>
                                            <td><?php echo date('Y/m/d', strtotime($key['shipping_date'])) ?></td>
                                            <td>{{$key['quantity']}}</td>
                                            <td>{{$key['follow_up']}}</td>
                                            <td>
                                                <div class="btn-list">
                                                    <button type="button" class="btn btn-icon btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#scrollingmodal"><i class="fe fe-printer"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-2 END -->

            </div>
            <!-- CONTAINER CLOSED -->

        </div>
    </div>
    <!--app-content closed-->
</div>
@endsection
