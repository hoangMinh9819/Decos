@extends('khach_hang.bo_cuc_khach_hang')
@section('noi_dung')
    <div class="col-sm-3">
        <div class="left-sidebar">
            <h2>Các bộ phận</h2>
            <div class="panel-group category-products" id="accordian">
                <!--category-productsr-->
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size:160%">
                        <a href="" style="">Phòng vận hành</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="">IT</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="">Marketing</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="">Tài chính kế toán</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="">Quản lí của hàng (Store Managament) </a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="">Shift Leader (Trưởng ca)</a>
                    </div>
                    <div class="panel-heading" style="font-size:160%">
                        <a href="">Store Sales agent (Nhân viên bán hàng) </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-8 padding-right">
        <div class="features_items">
            <!--features_items-->
            <h2 class="title text-center">Cơ hội nghề nghiệp</h2>
            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">Chuyên Viên đào tạo</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job_m') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>
            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">Thực tập sinh kế toán</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job_m') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>

            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">Nhân viên marketing</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job_m') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>
            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">IT Manager</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job_m') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>
            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">Quản lí cửa hàng (SM)</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job_m') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>
            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">Trưởng ca làm việc (SSL)</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>
            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">Nhân viên bán hàng toàn thời gian</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>
            <div class="col-sm-6" style="margin: 50px auto">
                <h2 class="title">Nhân viên bán hàng bán thời gian</h2>
                <p>Operations:</p>
                <p> DECOS HCM: 83 Dong Khoi St, District 1 </p>
                <p> DECOS HN: 23 Pho Hue St, Hoan Kiem District </p>
                <p> DECOS ĐN: 88 Nguyen Van Linh St, Hai Chau District</p>
                <form action="{{ URL::to('/apply_job') }}" method="get">
                    <button type="submit" class="btn btn-success">Apply Now</button>
                </form>
            </div>



        </div>
        <div class="row w3-res-tb">
            <div class="col-sm-9"></div>
            <div class="col-sm-3">
                <ul class="pagination">
                    <li class="active"><a href="">1</a></li>
                    <li><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">&raquo;</a></li>
                </ul>
            </div>

        </div>
        <!--features_items-->
    </div>
@endsection
