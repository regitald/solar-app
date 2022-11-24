
@extends('template')
@section('content')
    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Form Instruksi Kerja</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Form Instruksi Kerja</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 -->
                <div class="row">
                    <div class="col-md-12 col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Instruksi Kerja</h3>
                            </div>
                            <div class="card-body">

                                <form role="form" method="post" action="{{ url('follow-up/form') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="pajak" class="form-label">Jenis Instruksi Kerja</label>
                                                <div class="row g-3">
                                                    <div class="col-auto">
                                                        <label class="custom-control custom-radio mb-0 mt-1">
                                                            <input type="radio" class="custom-control-input spk_type" name="spk_type" value="sample">
                                                            <span class="custom-control-label">Sample</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <label class="custom-control custom-radio mb-0 mt-1">
                                                            <input type="radio" class="custom-control-input spk_type" name="spk_type" value="layout">
                                                            <span class="custom-control-label">Layout</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <label class="custom-control custom-radio mb-0 mt-1">
                                                            <input type="radio" class="custom-control-input spk_type" name="spk_type" value="production">
                                                            <span class="custom-control-label">Produksi</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="pajak" class="form-label">Pajak</label>
                                                <div class="row g-3">
                                                    <div class="col-auto">
                                                        <label class="custom-control custom-radio mb-0 mt-1">
                                                            <input type="radio" class="custom-control-input taxes_type" name="taxes_type" value="true" disabled="disabled">
                                                            <span class="custom-control-label">Pajak</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-auto">
                                                        <label class="custom-control custom-radio mb-0 mt-1">
                                                            <input type="radio" class="custom-control-input taxes_type" name="taxes_type" value="false" disabled="disabled">
                                                            <span class="custom-control-label">Non-Pajak</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="group" class="form-label">Sub SPK</label>
                                                <div class="row g-3">
                                                    <div class="col-auto">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input sub_spk" name="sub_spk" value="1" disabled="disabled">
                                                            <span class="custom-control-label">Sub SPK</span>
                                                        </label>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <select name="spk_parent" class="form-control form-select spk_parent" data-bs-placeholder="Master SPK" disabled="disabled">
                                                        <option selected></option>
                                                        @foreach($spk_parent as $key)
                                                            <option id="spk_parent" value="{{$key['spk_number']}}" name="spk_parent">{{$key['spk_number']}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="nospk" class="form-label">No. SPK / No. Solan</label>
                                                <div class="input-group">
                                                    <input type="text" name="spk_number" class="form-control spk_number" placeholder="No. SPK">
                                                    <button class="btn btn-primary" type="button" id="button-addon2" onclick="return generate(this);">Generate</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="tglmasuk" class="form-label general">Tanggal Po Masuk</label>
                                                <input type="date"  name="order_date" class="form-control general" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="tglkirim" class="form-label">Tanggal Permintaan Kirim</label>
                                                <input name ="shipping_date" type="date" class="form-control general" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="customer_name" class="form-label">Pemesan</label>
                                                <input type="text" class="form-control general" placeholder="Pemesan" disabled="disabled" name="customer_name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="pokonsumen" class="form-label">No. Po Konsumen / No. Instruksi Kerja</label>
                                                <input type="text" name="spk_number_customer" class="form-control general" placeholder="No. Po Konsumen / No. Instruksi Kerja" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="namaorder" class="form-label">Nama Order</label>
                                                <input type="text"  name="order_name" class="form-control general" placeholder="Nama Order" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="codestyle" class="form-label">Code Style</label>
                                                <input type="text" name="code_style" class="form-control general" placeholder="Code Style" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="qty" class="form-label">Qty</label>
                                                <input type="text"  name="quantity" class="form-control general" placeholder="Qty" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="followup" class="form-label">Follow Up</label>
                                                <input type="text" name="follow_up" class="form-control general" placeholder="Follow Up" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="codestyle" class="form-label">No. SPK Layout</label>
                                                <input type="text" name="spk_number_layout" class="form-control general" placeholder="No. SPK Layout" disabled="disabled">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="qty" class="form-label">No. SPK Sample</label>
                                                <input type="text" name="spk_number_sample" class="form-control general" placeholder="No. SPK Sample" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="formFileMultiple" class="form-label">Attachments File</label>
                                                <input class="form-control general" name="files[]" type="file" disabled="disabled" multiple>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="qty" class="form-label">Harga</label>
                                                <input type="text" class="form-control general" name="price" placeholder="No. SPK Sample" disabled="disabled">
                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <label for="formFileMultiple" class="form-label">Langkah Kerja</label>
                                                <!-- <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#scrollingmodal">Tambahkan Langkah Kerja</button> -->
                                                <input type="button " class="btn btn-info"data-bs-toggle="modal" data-bs-target="#scrollingmodal" value="Tambahkan Langkah Kerja" />
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="scrollingmodal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Langkah Kerja</h5>
                                                    <a class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true"></span>
                                                    </a>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
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
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close" >
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- END Modal-->
                                    <div class="form-footer mt-2">
                                        <button class="btn btn-primary success" type="submit">Submit</button>
                                    </div>

                                </form>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    //input type
    $(document).ready(function(){
        $('input[name="spk_type"]').on('change', function(){
        if($(this).val() === 'production') {
            $('.taxes_type').prop('disabled', false);
            $('.spk_parent').prop('disabled', true);
            $('.sub_spk').prop('disabled', true);
            $('.general').prop('disabled', true);
            $('.no_spk').prop('disabled', true);
        }
        else {
            $('.taxes_type').prop('disabled', true);
            $('.spk_parent').prop('disabled', true);
            $('.sub_spk').prop('disabled', true);
            $('.general').prop('disabled', true);
            // document.getElementById("no_spk").style.border = "solid #e62129e6";
        }
        });
    });
    //input pajak
    $(document).ready(function(){
        $('input[name="taxes_type"]').on('change', function(){
            $('.spk_parent').prop('disabled', false);
            $('.sub_spk').prop('disabled', false);
        });
    });
    //spk generators
    function generate( el )
    {
        var value = document.querySelector('input[name="spk_type"]:checked').value;
        $('.spk_number').val("<?php echo $code['generated_spk']; ?>");
        if(value=='production'){
            var taxes_type = document.querySelector('input[name="taxes_type"]:checked').value;
            var sub_spk = $('.sub_spk:checked').val();
            var spk_parent =$(".spk_parent option:selected").text();
            console.log(taxes_type + " & "+ sub_spk +" & "+ spk_parent)
            if(taxes_type=='true' && !sub_spk && spk_parent== ""){
                $('.spk_number').val("<?php echo $code['generated_spk_pajak']; ?>");
            }else if(taxes_type=='false'&& !sub_spk && spk_parent== ""){
                $('.spk_number').val("<?php echo $code['generated_spk_nonpajak']; ?>");
            }else if(taxes_type=='true'&& sub_spk && spk_parent== ""){
                $('.spk_number').val("<?php echo $code['generated_spk_pajak_subspk_null']; ?>");
            }else if(taxes_type=='false'&& sub_spk && spk_parent== ""){
                $('.spk_number').val("<?php echo $code['generated_spk_nonpajak_subspk_null']; ?>");
            }else if(taxes_type=='true'&& sub_spk && spk_parent!= ""){
                $('.spk_number').val("<?php echo $code['generated_spk_pajak_subspk_parent']; ?>");
            }else if(taxes_type=='false'&& sub_spk && spk_parent!= ""){
                $('.spk_number').val("<?php echo $code['generated_spk_nonpajak_subspk_parent']; ?>");
            }

        }
        $('.general').prop('disabled', false);
    }
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
@endsection
