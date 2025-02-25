<div class ="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ config('apps.user.title') }}</h2>
        <ol class="breadcrumb" style="margin-bottom: 10px;">
            <li>
                <a href="{{ route('dashboard.index') }}">Dashboard</a>
            </li>
            <li class="active">
                <strong>{{ config('apps.user.title')}}</strong>
            </li>
        </ol>
    </div>
</div>

<div class="row mt20" style="margin-top: 20px;">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5 class="text-uppercase" style="font-weight: normal;">{{config('apps.user.tableHeading')}}</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="filter">
                    <div class="uk-flex uk-flex-middle uk-flex-space-between">
                        <div class="perpage">
                            <div class="uk-flex uk-flex-middle uk-flex-space-between">
                                <select name="perpage" class="form-control input-sm perpage filter mr10" id="">
                                    @for ($i = 20; $i<=200; $i+=20)
                                        <option value="{{$i}}"> {{$i}} bản ghi</option>
                                    @endfor
                                </select>
                                
                            </div>
                        </div>
                        <div class="action">
                            <div class="uk-flex uk-flex-middle ">
                                <select name="user_catalogue_id" class="form-control mr10" id="">
                                    <option value="0" selected="selected"> Chọn Nhóm Thành Viên</option>
                                    <option value="1">Quản trị viên</option>
                                </select>
    
                                <div class="uk-search uk-flex uk-flex-middle mr10">
                                    <div class="input-group">
                                        <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm...">
                                        
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-primary mh0 btn-sm" name="search" value="search" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                                <a href="" class=" btn btn-danger"><i class="fa fa-plus"></i> Thêm </a>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" class="input-checkbox" id="checkAll">
                        </th>
                        <th style="width: 90px;">Ảnh</th>
                        <th>Họ tên:</th>
                        <th>Email:</th>
                        <th>Số điện thoại:</th>
                        <th>Địa chỉ:</th>
                        <th class="text-center">Tình trạng</th>
                        <th class="text-center">Thao tác: </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" class="input-checkbox checkBoxItem">
                        </td>
                        <td>
                            <span class="image img_cover"><img src="https://e7.pngegg.com/pngimages/491/506/png-clipart-h%C5%8Dtar%C5%8D-oreki-hyouka-eru-chitanda-satoshi-fukube-anime-hyouka-face-black-hair-thumbnail.png" alt="" ></span>
                        </td>
                        <td>
                            <div class="user-item name">Trần Tấn Tài</div>
                            
                            
                        </td>
                        <td>
                            <div class="user-item email">trantantai@gmailcom</div>
                        </td>
                        <td>
                            <div class="user-item phone">01234567</div>
                        </td>
                        <td>
                            ddafm sen
                        </td>
                        <td>
                            <input type="checkbox" class="js-switch" checked />
                        </td>
                        <td>
                            <a href="" class="btn btn-success"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>

                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>                                                                                                  
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    });
</script>
