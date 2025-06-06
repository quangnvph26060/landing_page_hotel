@extends('backend.layouts.master')

@section('content')
    @include('backend.layouts.partials.breadcrumb', [
        'page' => 'Template',
    ])

    <div class="card">
        <div class="card-header row">
            <h3 class="card-title col-md-6">Template</h3>
            <div class="col-md-6">
                <select id="automation_template"  class="form-control">
                    <option value="">Chọn template để gửi tin nhắn </option>
                    @forelse ($template_automation as $template)

                        <option @selected( isset($automation->template_id) ? $template->id == $automation->template_id  : '') data-id='{{ $template->id }}' value="{{ $template->templateId }}">
                            {{ $template->templateName }}</option>
                    @empty
                        {{-- <option value="">Chưa xó template nào cả </option> --}}
                    @endforelse
                </select>
            </div>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <div class="form-group">
                    <div class="input-group">

                        <select id="templateDropdown" class="form-control">
                            {{-- <option value="">Chọn Template</option> --}}
                            @forelse ($templates as $template)
                                <option data-id='{{ $template->id }}' value="{{ $template->templateId }}">
                                    {{ $template->templateName }}</option>
                            @empty
                                <option value="">Chưa có template nào cả </option>
                            @endforelse
                        </select>
                    </div>
                </div>
            </div>
            <div id="detail_template">
                @if ($template_first)
                    @include('backend.marketing.template.detail', ['template_first' => $template_first])
                @else
                    <div class="alert alert-warning mt-3" role="alert">
                        Chưa có template.
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div id="loading-overlay"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.5); z-index:9999;">
        <div style="position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); color:white; font-size:24px;">
            <div class="spinner-border text-light" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>

            <div style="margin-right: 30px !important">Loading...</div>

        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#templateDropdown').change(function() {
                $("#loading-overlay").show();
                $("#detail_template").empty();
                let id = $('#templateDropdown option:selected').data('id');
                let templateId = $('#templateDropdown').val();
                $.ajax({
                    url: "/admin/zaloOa/detail-template",
                    type: "GET",
                    data: {
                        id: id
                    },
                    success: function(res) {
                        $("#loading-overlay").hide(); // Tắt overlay

                        if (res.success) {
                            Toast.fire({
                                icon: "success",
                                title: res.message,
                            });

                            $("#detail_template").html(res.html);
                        }
                    },
                    error: function(xhr) {
                        $("#loading-overlay").hide(); // Tắt overlay

                        Toast.fire({
                            icon: "error",
                            title: xhr.responseJSON?.message || "Đã có lỗi xảy ra!",
                        });
                    }
                });
            })

            $('#automation_template').change(function() {
                $("#loading-overlay").show();

                let id = $('#automation_template option:selected').data('id');
                let templateId = $('#automation_template').val();
                $.ajax({
                    url: "/admin/zaloOa/automation-template",
                    type: "GET",
                    data: {
                        id: id
                    },
                    success: function(res) {
                        $("#loading-overlay").hide(); // Tắt overlay
                        if (res.success) {
                            Toast.fire({
                                icon: "success",
                                title: res.message,
                            });
                        }
                    },
                    error: function(xhr) {
                        $("#loading-overlay").hide(); // Tắt overlay

                        Toast.fire({
                            icon: "error",
                            title: xhr.responseJSON?.message || "Đã có lỗi xảy ra!",
                        });
                    }
                });
            })
        });
    </script>
@endpush

@push('styles')
    <style>
        #loading-overlay {
            display: none;
            align-items: center;
            justify-content: center;

        }
    </style>
@endpush
