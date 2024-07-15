@extends('layouts.master')

@section('title')
    Danh sách bài viết
@endsection

@section('main-content')
    <h2>Danh sách bài viết</h2>

    <a href="/admin/bai-viet/them-moi" class="btn btn-primary">Tạo bài viết mới</a>

<!-- Full version of jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <table class="table" id="table_danh_muc">
        <thead>
            <tr>
                <th>ID</th>
                <th>Thông tin</th>
                <th>Slug</th>
                {{-- fr yall making a pfp for a fucking post ? that lame tbh. who gonna checkout that img ? --}}
                <th>Người tạo</th>
                <th>Trạng thái bài viết</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>ID bài viết</td>
                <td><div class="d-flex align-items-center">
                    <div class="avatar-sm bg-light rounded p-1 me-2">
                        <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block">
                    </div>
                    <div>
                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Titanium Kim Loại Chuyển Tiếp Quan Trọng trong Công Nghiệp và Y Tế</a></h5>
                        <span class="text-muted">24 Apr 2021</span>
                    </div>
                </div></td>
                <td>Slug URL</td>
                <td>Người tạo </td>
                <td><span class="badge bg-warning">Chuẩn bị đăng</span></td>
                <td>
                    <a class="btn btn-primary" href="/admin/bai-viet/chi-tiet/1">Xem chi tiết</a>
                    <a class="btn btn-danger" href="/admin/bai-viet/xoa/1" onclick="return confirm('Chắc chắn muốn xóa không?')">Xoá</a>
                </td>
            </tr>
            <tr>
                <td>ID bài viết</td>
                <td><div class="d-flex align-items-center">
                    <div class="avatar-sm bg-light rounded p-1 me-2">
                        <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block">
                    </div>
                    <div>
                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Titanium Kim Loại Chuyển Tiếp Quan Trọng trong Công Nghiệp và Y Tế</a></h5>
                        <span class="text-muted">24 Apr 2021</span>
                    </div>
                </div></td>
                <td>Slug URL</td>
                <td>Người tạo </td>
                <td><span class="badge bg-danger">Đã bị xoá</span></td>
                <td>
                    <a class="btn btn-primary" href="/admin/bai-viet/chi-tiet/1">Xem chi tiết</a>
                    <a class="btn btn-danger" href="/admin/bai-viet/xoa/1" onclick="return confirm('Chắc chắn muốn xóa không?')">Xoá</a>
                </td>
            </tr>
            <tr>
                <td>ID bài viết</td>
                <td><div class="d-flex align-items-center">
                    <div class="avatar-sm bg-light rounded p-1 me-2">
                        <img src="assets/images/products/img-1.png" alt="" class="img-fluid d-block">
                    </div>
                    <div>
                        <h5 class="fs-14 my-1"><a href="apps-ecommerce-product-details.html" class="text-reset">Titanium Kim Loại Chuyển Tiếp Quan Trọng trong Công Nghiệp và Y Tế</a></h5>
                        <span class="text-muted">24 Apr 2021</span>
                    </div>
                </div></td>
                <td>Slug URL</td>
                <td>Người tạo </td>
                <td><span class="badge bg-success">Đã đăng</span></td>
                <td>
                    <a class="btn btn-primary" href="/admin/bai-viet/chi-tiet/1">Xem chi tiết</a>
                    <a class="btn btn-danger" href="/admin/bai-viet/xoa/1" onclick="return confirm('Chắc chắn muốn xóa không?')">Xoá</a>
                </td>
            </tr>
            {{-- @foreach ($categories as $category) 
                <tr>
                    <td>{{ $category['id'] }}</td>
                    <td>{{ $category['name'] }}</td>
                    <td>{{ $category['slug'] }}</td>
                    <td><a href='/admin/users/{{ $category['created_by_id'] }}'>{{ $category['created_by_name'] }}</a></td>
                    <td>{{ $category['created_at'] }}</td>
                    <td>{{ $category['updated_at'] }}</td>
                    <td>
                        <a class="btn btn-primary" href="/admin/danh-muc/chi-tiet/{{ $category['id'] }}">Xem chi tiết</a>
                        <a class="btn btn-danger" href="/admin/danh-muc/xoa/{{ $category['id'] }}" onclick="return confirm('Chắc chắn muốn xóa không?')">Xoá</a>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>

    <!-- Pagination controls -->
    {{-- @if ($totalPage > 1)
        <nav aria-label="Page navigation">
            <ul class="pagination">
                @if ($currentPage > 1)
                    <li class="page-item">
                        <a class="page-link" href="/admin/danh-muc/trang/{{ $currentPage - 1 }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @endif

                @for ($i = 1; $i <= $totalPage; $i++)
                    <li class="page-item {{ $i == $currentPage ? 'active' : '' }}">
                        <a class="page-link" href="/admin/danh-muc/trang/{{ $i }}">{{ $i }}</a>
                    </li>
                @endfor

                @if ($currentPage < $totalPage)
                    <li class="page-item">
                        <a class="page-link" href="/admin/danh-muc/trang/{{ $currentPage + 1 }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif --}}
    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection