<div class="row mt-4">
    <div class="col-md-7">
        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark text-center">
                    <tr>
                        <th class="p-3">Thông tin</th>
                        <th class="p-3">Giá trị</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Template ID</td>
                        <td>{{ $template_first->templateId ?? 'Không có dữ liệu' }}</td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Tên Template</td>
                        <td>{{ $template_first->templateName ?? 'Không có dữ liệu' }}</td>
                    </tr>
                    <tr>
                        {{-- <td class="fw-bold">
                            <a class="toggle-link text-primary fw-bold" data-toggle="modal"
                                data-target="#paramsModal" role="button">
                                <i class="fas fa-list-ul"></i> Danh sách tham số
                            </a>
                        </td>
                        <td><span class="badge bg-info"></span>
                        </td>
                    </tr> --}}
                    <tr>
                        <td class="fw-bold">Giá</td>
                        <td class="text-success fw-bold">
                            {{ number_format($template_first->price ?? 0, 0) ?? 'Không có dữ liệu' }} đ/ZNS
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Trạng thái</td>
                        <td>
                            @switch($template_first->status)
                            @case('PENDING_REVIEW')
                                <span class="badge bg-warning text-dark"><i class="fas fa-clock"></i> Chờ duyệt</span>
                            @break

                            @case('DISABLE')
                                <span class="badge bg-secondary"><i class="fas fa-ban"></i> Vô hiệu hóa</span>
                            @break

                            @case('ENABLE')
                                <span class="badge bg-success"><i class="fas fa-check-circle"></i> Đã kích hoạt</span>
                            @break

                            @case('REJECT')
                                <span class="badge bg-danger"><i class="fas fa-times-circle"></i> Bị từ chối</span>
                            @break

                            @default
                                <span class="badge bg-dark">Không có dữ liệu</span>
                        @endswitch
                        </td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Đường dẫn xem mẫu</td>
                        <td>
                            @if (isset($template_first->previewUrl))
                                <a href="{{ $template_first->previewUrl }}" target="_blank"
                                    rel="noopener noreferrer"
                                    class="text-decoration-none text-primary fw-bold">
                                    <i class="fas fa-external-link-alt"></i> Xem mẫu
                                </a>
                            @else
                                <span class="text-muted">Không có dữ liệu</span>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="col-md-5">
        <div id="content">
            <iframe style="width: 100%; height: 400px;" src="{{ $template_first->previewUrl }}" title="Embedded Website"></iframe>
        </div>
    </div>
</div>
