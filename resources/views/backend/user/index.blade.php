<div class = "row wrapped boder-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>Quản lí thành viên</h2>
        <ol class="breadcrumb" style="margin-bottom:10px;">
            <li>
                <a href="{{route('dashboard.index')}}">Dashboard</a>
            </li>
            <li class="active">Quản lí bài viết</li>
        </ol>
    </div>
</div>
<div class="ibox float-e-margins">
    <div class="ibox-title">
        <h4>Danh sách thành viên</h4>
        <div class="ibox-tools">
            <a class="collapse-link">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>
    </div>
    <div class="ibox-content">
        <div class="filter-wrapped">
            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                <div class="perpage">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <select name="perpage" class="form-control input-sm perpage filter mr10">
                            @for($i = 20; $i <=50; $i+=10)
                                <option value="{{ $i }}">{{ $i }} bản ghi</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="action">
                    <div class="uk-flex uk-flex-middle">
                        <select name="user_catalogue_id" class="form-control mr10">
                            <option value="0" selected = "selected">Chọn nhóm thành viên</option>
                            <option value="1">Quản trị viên</option>
                        </select>
                        <div class="uk-search uk-flex uk-flex-middle mr10">
                            <div class="input-group">
                                <input type="text" name="keyword" value="" placeholder="Nhập từ khóa tìm kiếm..." class="form-control">
                                <span class="input-group-btn">
                                        <button type="submit" name="search" class="btn btn-primary mb0 btn-sm">Tìm kiếm</button>
                                    </span>
                            </div>
                        </div>
                        <a href="#" class="btn btn-danger"><i class="fa fa-plus"></i>Thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-bordered">
                <thead>
                <tr>
                    <th>
                        <input type="checkbox" value="" class="input-checkbox">
                    </th>
                    <th>Avatar</th>
                    <th>Họ và tên</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ</th>
                    <th>Ngày sinh</th>
                    <th>Email</th>
                    <th>Tình trạng</th>
                    <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                @if(isset($users) && is_object($users))
                    @foreach($users as $user)
                <tr>
                    <td>
                        <input type="checkbox" value="" class="input-checkbox">
                    </td>
                    <td></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->birthday}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <input type="checkbox" class="js-switch" checked />
                    </td>
                    <td>
                        <button class="btn btn-success " type="button"><i class="fa fa-edit"></i></button>
                        <a href="{{ route('user.delete')}}?user_id={{ $user['id'] }}"><button class="btn btn-danger " type="button"><i class="fa fa-trash"></i></button></a>
                    </td>
                </tr>
                </tbody>
                @endforeach
            @endif
        </table>
        {{ $users->links('pagination::bootstrap-4') }}
    </div>

</div>
<script src="backend/js/plugins/switchery/switchery.js"></script>


