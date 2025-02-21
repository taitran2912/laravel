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
    
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" class="input-checkbox" id="checkAll">
                        </th>
                        <th>Ảnh</th>
                        <th>Thông tin thành viên</th>
                        <th>Địa chỉ</th>
                        <th>Tình trạng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" class="input-checkbox checkBoxItem">
                        </td>
                        <td>
                            <span class="image"><img src="https://e7.pngegg.com/pngimages/491/506/png-clipart-h%C5%8Dtar%C5%8D-oreki-hyouka-eru-chitanda-satoshi-fukube-anime-hyouka-face-black-hair-thumbnail.png" alt=""></span>
                        </td>
                        <td>
                            <div class="user-item name">Họ tên: Trần Tấn Tài</div>
                            <div class="user-item email">Email: trantantai@gmailcom</div>
                            <div class="user-item phone">Phone: 01234567</div>
                        </td>
                        <td>
                            <div class="user-item name">Địa chỉ: </div>
                            <div class="user-item email">Phường:</div>
                            <div class="user-item phone">Quận: </div>
                            <div class="user-item phone">Thành phố: </div>

                        </td>
                        <td>
                            <input type="checkbox" class="js-switch" checked />
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
