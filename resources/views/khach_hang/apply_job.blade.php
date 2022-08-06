@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Các bộ phận</h2>
            <div class="panel-group category-products" id="accordian">
                <!--category-productsr-->
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size:160%">
                        <a href="{{ URL::to('/talent') }}" style="">Phòng vận hành</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="{{ URL::to('/talent') }}">IT</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="{{ URL::to('/talent') }}">Marketing</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="{{ URL::to('/talent') }}">Tài chính kế toán</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="{{ URL::to('/talent') }}">Quản lí của hàng (Store Managament) </a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="{{ URL::to('/talent') }}">Shift Leader (Trưởng ca)</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="{{ URL::to('/talent') }}">Store Sales agent (Nhân viên bán hàng) </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <h2>Apply for this Job</h2>
        {{-- <form action="" method="POST" enctype=”multipart/form-data”> --}}

        {{-- <form action="{{ URL::to('/talent') }}" enctype=”multipart/form-data” name=”EmailForm”>
            <div style="margin: 10px auto">
                <label for="fullname">Họ và Tên:</label> <br>
                <input type="text" name="fullname" id="fullname" placeholder="Nguyễn Văn A" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="email">Email:</label> <br>
                <input type="email" name="email" id="email" placeholder="example@gmail.com" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="phone">Phone Number</label> <br>
                <input type="text" name="phone" id="phone" placeholder="0123456789" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="dob">Date of Birth</label> <br>
                <input type="date" name="dob" id="dob" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="hocvan">Trình độ học vấn</label> <br>
                <select name="hocvan" id="hocvan" required>
                    <option value="phothong">Phổ thông</option>
                    <option value="trungcap">Trung cấp</option>
                    <option value="caodang">Cao đẳng </option>
                    <option value="daihoc">Đại học</option>
                    <option value="thacsi">Thạc sĩ</option>
                    <option value="tiensi">Tiến sĩ</option>
                </select>
            </div>
            <div style="margin: 10px auto">
                <label for="dc">Địa chỉ</label> <br>
                <input type="text" name="dc" id="dc" placeholder="Địa chỉ cụ thể" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="cccd">Số chứng minh thư/ Căn cươc công dân</label> <br>
                <input type="text" name="cccd" id="cccd" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="km">Bạn có kinh nghiệm làm công việc tương tự ở đâu chưa???</label> <br>
                <select name="km" id="km" required>
                    <option value="chuatung">Chưa từng</option>
                    <option value="datung">Đã từng</option>
                </select> <br>
            </div>
            <div style="margin: 10px auto">
                <label for="noilam">Khu vực làm việc bạn mong muốn</label> <br>
                <select name="noilam" id="noilam" required>
                    <option value="hcm">Hồ Chí Minh</option>
                    <option value="hn">Hà Nội</option>
                    <option value="dn">Đà Nẵng</option>
                </select> <br>
            </div>

            <div class="" style="margin: 10px auto">
                <button type="submit" name="keywwords" class="btn btn-success"
                    onclick="alert('Cảm ơn bạn đã ứng tuyển vào công ty tôi... !!!! Chúng tôi sẽ phản hồi kết quả ứng tuyển của bạn sớm nhất');">Apply</button>
            </div>


        </form> --}}
        <form role="form" action="{{ URL::to('/ung_tuyen') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div style="margin: 10px auto">
                <label for="Name">Họ và Tên:</label> <br>
                <input type="text" name="Name" id="Name" placeholder="Nguyễn Văn A" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="Email">Email:</label> <br>
                <input type="Email" name="Email" id="Email" placeholder="example@gmail.com" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="PhoneNumber">Phone Number</label> <br>
                <input type="text" name="PhoneNumber" id="PhoneNumber" placeholder="0123456789" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="dob">Date of Birth</label> <br>
                <input type="date" name="dob" id="dob" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="hocvan">Trình độ học vấn</label> <br>
                <select name="hocvan" id="hocvan" required>
                    <option value="phothong">Phổ thông</option>
                    <option value="trungcap">Trung cấp</option>
                    <option value="caodang">Cao đẳng </option>
                    <option value="daihoc">Đại học</option>
                    <option value="thacsi">Thạc sĩ</option>
                    <option value="tiensi">Tiến sĩ</option>
                </select>
            </div>
            <div style="margin: 10px auto">
                <label for="diachi">Địa chỉ</label> <br>
                <input type="text" name="diachi" id="diachi" placeholder="Địa chỉ cụ thể" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="cccd">Số chứng minh thư/ Căn cươc công dân</label> <br>
                <input type="text" name="cccd" id="cccd" required> <br>
            </div>

            <div style="margin: 10px auto">
                <label for="kinhnghiem">Bạn có kinh nghiệm làm công việc tương tự ở đâu chưa???</label> <br>
                <select name="kinhnghiem" id="kinhnghiem" required>
                    <option value="chuatung">Chưa từng</option>
                    <option value="datung">Đã từng</option>
                </select> <br>
            </div>
            <div style="margin: 10px auto">
                <label for="KhuVuc">Khu vực làm việc bạn mong muốn</label> <br>
                <select name="KhuVuc" id="KhuVuc" required>
                    <option value="hcm">Hồ Chí Minh</option>
                    <option value="hn">Hà Nội</option>
                    <option value="dn">Đà Nẵng</option>
                </select> <br>
            </div>

            <div class="" style="margin: 10px auto">
                <button type="submit" name="keywwords" class="btn btn-success"
                    onclick="alert('Cảm ơn bạn đã ứng tuyển vào công ty tôi... !!!! Chúng tôi sẽ phản hồi kết quả ứng tuyển của bạn sớm nhất');">Apply</button>
            </div>
        </form>
    </div>
@endsection
<style>
    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=email],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=date],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>
