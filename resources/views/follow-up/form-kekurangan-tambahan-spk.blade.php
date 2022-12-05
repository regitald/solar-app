@extends('template')
@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Form SPK Kekurangan/Tambahan</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form SPK Kekurangan/Tambahan</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <form role="form" method="post" action="{{ url('follow-up/form/more') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">SPK Kekurangan/Tambahan</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">Request</label>
                                                <select name="customer_name" class="form-control form-select" data-bs-placeholder="Pilih Request" required>
                                                        <option value="Pemesan">Pemesan</option>
                                                        <option value="QC">QC</option>
                                                    </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label class="form-label">No. SPK</label>
                                                <select name="spk_parent" class="form-control form-select" data-bs-placeholder="Pilih No. SPK - Order" required>
                                                    <option selected></option>
                                                    @foreach($spk as $key)
                                                        <option id="spk_parent" value="{{$key['spk_number']}}" name="spk_parent">{{$key['spk_number']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="qty" class="form-label">Qty</label>
                                                <input type="text" class="form-control" placeholder="Qty" required>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="formFileMultiple" class="form-label">Langkah Kerja</label>
                                                <input type="button " class="btn btn-info"data-bs-toggle="modal" data-bs-target="#scrollingmodal" value="Tambahkan Langkah Kerja" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-footer mt-2">
                                        <button class="btn btn-primary success" type="submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-1 END -->
                </form>

            </div>
            <!-- CONTAINER CLOSED -->

        </div>
    </div>
    <!--app-content closed-->
</div>

<!-- Modal -->
<div class="modal fade" id="scrollingmodal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Langkah Kerja</h5>
                <a class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></a>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="input-group control-group" id="dynamic_field_append">

                    </div>
                </div>

                <div class="form-group">
                    <div class="selectgroup selectgroup-pills">
                    @foreach($work_step as $key)
                    <label class="selectgroup-item">
                        <input type="button" class="btn btn-outline-primary add_field" data-name="{{ $key->name }}"  data-id="{{ $key->id }}" value="{{ $key->name }}">
                    </label>
                    @endforeach
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close" >
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
        //langkah kerja
        $(document).ready(function(){
            var i = 0;
            $('.add_field').click(function(){
                i++;
                var btnname = $(this).data("name");
                var btnid = $(this).data("id");
                $('#dynamic_field_append').append('<div class="input-group control-group" style="padding-top: 5px;" id="row_remove'+i+'"><input type="text" class="form-control" readonly="" value="'+btnid+'" name="work_step[]" style="display:none"><input type="text" class="form-control" readonly="" value="'+btnname+'"><button class="btn btn-danger btn_remove" type="button" id="'+i+'"><i class="fe fe-x"></i></button></div>');
            });
            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row_remove'+button_id+'').remove();
            });
    });
</script>
</script>
<!-- END Modal-->
@endsection
