@extends('template')
@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Manage Orders</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Manage Orders</li>
                        </ol>
                    </div>

                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                        <div class="panel panel-primary">
                            <div class=" tab-menu-heading">
                                <div class="tabs-menu1">
                                    <!-- Tabs -->
                                    <ul class="nav panel-tabs">
                                        <li><a href="#tab1" class="active" data-bs-toggle="tab">Pending Approved</a></li>
                                        <li><a href="#tab2" data-bs-toggle="tab">Active</a></li>
                                        <li><a href="#tab3" data-bs-toggle="tab">Reject</a></li>
                                        <li><a href="#tab4" data-bs-toggle="tab">Late</a></li>
                                        <li><a href="#tab5" data-bs-toggle="tab">Complete</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab">All</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab1">
                                        <!-- ROW-2-->
                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Pending Approved</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
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
                                                                        @foreach($pending as $key)
                                                                    <?php $i++ ?>
                                                                    <tr>
                                                                        <td>{{$i}}</td>
                                                                        <td>{{$key['spk_number']}}</td>
                                                                        <td>{{$key['customer_name']}}</td>
                                                                        <td>{{$key['order_name']}}</td>
                                                                        <td>{{$key['code_style']}}</td>
                                                                        <td><?php echo date('Y/m/d', strtotime($key['order_date'])) ?></td>
                                                                        <td><?php echo date('Y/m/d', strtotime($key['shipping_date'])) ?></td>
                                                                        <td>{{$key['quantity']}}</td>
                                                                        <td>{{$key['follow_up']}}</td>
                                                                        @if($key['status'] == 'pending')
                                                                        <td>
                                                                            <span class="badge bg-secondary badge-sm">Pending Approved</span>
                                                                        </td>
                                                                        @endif
                                                                        <td><span class="badge bg-secondary badge-sm">Penjadwalan</span></td>
                                                                        <td>
                                                                            <div class="btn-list">
                                                                                <button type="button" class="btn btn-icon btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#scrollingmodal{{$key['id']}}"><i class="fe fe-eye"></i></button>
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
                                    <div class="tab-pane" id="tab2">
                                        <!-- ROW-2-->
                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Active</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable2">
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
                                                                    @foreach($active as $key)
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
                                    <div class="tab-pane" id="tab3">
                                        <!-- ROW-2-->
                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Reject</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable3">
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
                                                                    @foreach($reject as $key)
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
                                    <div class="tab-pane" id="tab4">
                                        <!-- ROW-2-->
                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Late</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable4">
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
                                                                    @foreach($late as $key)
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
                                    <div class="tab-pane" id="tab5">
                                        <!-- ROW-2-->
                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Complete</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable5">
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
                                                                    @foreach($complete as $key)
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
                                                                        @elseif($key['status'] == 'reject')
                                                                            <span class="badge bg-primary badge-sm">Reject</span>
                                                                        @else
                                                                            <span class="badge bg-info badge-sm">Complete</span>
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
                                    <div class="tab-pane" id="tab6">
                                        <!-- ROW-2-->
                                        <div class="row row-sm">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h3 class="card-title">All</h3>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable6">
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
                                                                    @foreach($orders as $key)
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ROW-1 END -->

            </div>
            <!-- CONTAINER CLOSED -->

        </div>
    </div>
    <!--app-content closed-->
</div>
<!-- Modal -->
@foreach($orders as $key)
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
                 <!-- Row -->
                 <div class="row mb-3">
                    <div class="table-responsive">
                        <table class="table border text-nowrap text-md-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th>ATTACHMENT FILE</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($key['files'] as $row)
                                <tr>
                                    <td>{{$row['name']}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <div class="modal-footer">
                @if($key['status'] == 'process') <a type="button" class="btn btn-primary" href="{{ url('follow-up/status/hold/'.$key['id']) }}">Hold</a> @endif
                @if($key['status'] == 'process') <a type="button" class="btn btn-warning" href="{{ url('follow-up/status/canceled/'.$key['id']) }}">Cancel</a> @endif
                @if($key['status'] != 'reject')   <a type="button" class="btn btn-info" href="{{ url('follow-up/re-order/'.$key['id']) }}">Reorder</a> @endif
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- END MODAL -->
@endsection
