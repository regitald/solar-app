@extends('template')
@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">{{ $title }}</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-secondary img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">7,865</h2>
                                                <p class="text-white mb-0">Total Orders </p>
                                            </div>
                                            <div class="ms-auto"> <i class="fe fe-package text-white fs-40 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-info img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">10,865</h2>
                                                <p class="text-white mb-0">Order diproses </p>
                                            </div>
                                            <div class="ms-auto"> <i class="fe fe-box text-white fs-40 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-primary img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">7,865</h2>
                                                <p class="text-white mb-0">Pending Approved </p>
                                            </div>
                                            <div class="ms-auto"> <i class="fe fe-alert-triangle text-white fs-40 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                                <div class="card bg-success img-card box-primary-shadow">
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div class="text-white">
                                                <h2 class="mb-0 number-font">7,865</h2>
                                                <p class="text-white mb-0">Order Selesai </p>
                                            </div>
                                            <div class="ms-auto"> <i class="fe fe-check-square text-white fs-40 me-2 mt-2"></i> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

                <!-- ROW-2-->
                <div class="row row-sm">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">{{ $sub_title }}</h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-nowrap border-bottom" id="example2">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom-0">NO</th>
                                                <th class="border-bottom-0">NO. SPK</th>
                                                <th class="border-bottom-0">PEMESAN</th>
                                                <th class="border-bottom-0">ORDER</th>
                                                <th class="border-bottom-0">CODE/STYLE</th>
                                                <th class="border-bottom-0">TGL. PO MASUK</th>
                                                <th class="border-bottom-0">TGL. DIKIRIM</th>
                                                <th class="border-bottom-0">QTY</th>
                                                <th class="border-bottom-0">FOLLOW UP</th>
                                                <th class="border-bottom-0">STATUS</th>
                                                <th class="border-bottom-0">PEKERJAAN</th>
                                                <th class="border-bottom-0">ACTIONS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=0 ?>
                                            @foreach($data as $key)
                                            <tr>
                                            <?php $i++ ?>
                                                <td>{{$i}}</td>
                                                <td>{{$key['spk_number']}}</td>
                                                <td>{{$key['customer_name']}}</td>
                                                <td>{{$key['order_name']}}</td>
                                                <td>{{$key['code_style']}}</td>
                                                <td><?php echo date('Y/m/d', strtotime($key['order_date'])) ?></td>
                                                <td><?php echo date('Y/m/d', strtotime($key['shipping_date'])) ?></td>
                                                <td>{{$key['quantity']}}</td>
                                                <td>{{$key['follow_up']}}</td>
                                                <td>
                                                @if($key['status'] == 'pending')
                                                    <span class="badge bg-secondary badge-sm">Pending Approved</span>
                                                @elseif($key['status'] == 'process')
                                                    <span class="badge bg-info badge-sm">Process</span>
                                                @elseif($key['status'] == 'canceled')
                                                    <span class="badge bg-warning badge-sm">Cancel</span>
                                                @elseif($key['status'] == 'hold')
                                                    <span class="badge bg-primary badge-sm">Hold</span>
                                                @elseif($key['status'] == 'approved')
                                                    <span class="badge bg-info badge-sm">Approved</span>
                                                @else
                                                    <span class="badge bg-primary badge-sm">Reject</span>
                                                @endif
                                                </td>
                                                <td>
                                                @if($key['operator_progress'] != null)
                                                    <span class="badge bg-default badge-sm">{{ $key['operator_progress']['work_step']['name'] }}</span>
                                                @else
                                                    <span class="badge bg-default badge-sm">Penjadwalan</span>
                                                @endif
                                                <td>
                                                    <div class="btn-list">
                                                        <button type="button" class="btn btn-icon btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#scrollingmodal{{$key['id']}}"><i class="fe fe-eye"></i></button>
                                                        @if($key['status'] == 'reject')
                                                        <a type="button" class="btn btn-icon btn-sm btn-primary" href="{{ url('follow-up/form/'.$key['id']) }}"><i class="fe fe-edit"></i></a>
                                                        @endif
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

<!-- Modal -->
@foreach($data as $key)
<div class="modal fade" id="scrollingmodal{{$key['id']}}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Instruksi Kerja (Produksi)</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
                <!-- Row -->
                <div class="row mb-3">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>NO. SPK</th>
                                    <th>PEMESAN</th>
                                    <th>NO. PO</th>
                                    <th>ORDER</th>
                                    <th>CODE STYLE</th>
                                    <th>TGL. PO MASUK</th>
                                    <th>TGL. DIKIRIM</th>
                                    <th>QTY</th>
                                    <th>FOLLOW UP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$key['spk_number']}}</td>
                                    <td>{{$key['customer_name']}}</td>
                                    <td>{{$key['spk_number_customer']}}</td>
                                    <td>{{$key['order_name']}}</td>
                                    <td>{{$key['code_style']}}</td>
                                    <td><?php echo date('Y/m/d', strtotime($key['order_date'])) ?></td>
                                    <td><?php echo date('Y/m/d', strtotime($key['shipping_date'])) ?></td>
                                    <td>{{$key['quantity']}}</td>
                                    <td>{{$key['follow_up']}}</td>
                                </tr>
                                <tr>
                                    <td colspan="9">
                                        <table class="table border text-nowrap text-md-nowrap  mb-0">
                                            <thead>
                                                <tr>
                                                    <th>LANGKAH KERJA</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($key['operators'] as $row)
                                                <tr>
                                                    <td>{{ $row['work_step']['name'] }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Row -->
                <!-- Row -->
                <div class="row mb-3">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>JENIS INSTRUKSI KERJA</th>
                                    <th>PAJAK</th>
                                    <th>MASTER SPK</th>
                                    <th>SUB SPK</th>
                                    <th>GROUP</th>
                                    <th>NO. SPK LAYOUT</th>
                                    <th>NO. SPK SAMPLE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$key['spk_type']}}</td>
                                    <td>@if($key['taxes_type'] == 0) Pajak @else Non Pajak @endif</td>
                                    <td>{{$key['spk_parent']}}</td>
                                    <td>{{$key['sub_spk']}}</td>
                                    <td>test</td>
                                    <td>{{$key['spk_number_layout']}}</td>
                                    <td>{{$key['spk_number_sample']}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <div class="modal-footer">
                @if($key['status'] == 'hold') <a type="button" class="btn btn-primary" href="{{ url('follow-up/status/process/'.$key['id']) }}">Unhold</a> @endif
                <a type="button"class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- END MODAL -->
@endsection
