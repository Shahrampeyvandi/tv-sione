@extends('Layout.Front')

@section('content')
<div class="user-profile-change">
    <div class="user-detail-change-box">
        <i class="fa fa-times"></i>
        <form action="#" method="post">
            <div class="input-place">
                <input type="text" id="fName" name="fName" required>
                <label for="fName">نام</label>
            </div>
            <div class="input-place">
                <input type="text" id="lName" name="fName" required>
                <label for="lName">نام خانوادگی</label>
            </div>
      
        </form>
    </div>
 
</div>
<section class="profile-section">
    <h1>
        حساب کاربری
    </h1>
    <div class="plans">
        <div class="container-fluid">
            <div class="row">
                <div class="col-9">
                    <div class="fName_lName">
                        نام و نام خانوادگی:{{$user->name()}}
                    </div>
                </div>
                <div class="col-3">
                   
                </div>

                <div class="col-12">
                    <div class="user-account-phone">
                        شماره تلفن همراه: {{$user->mobile}}
                    </div>
                </div>
                <div class="col-12">
               
                </div>
            </div>
        </div>
    </div>
    <div class="plans">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7">
                    <div class="sharing-status">
                        وضعیت اشتراک:
                        @if (auth()->guard('admin')->check())
                        فعال
                        @else

                        @if ($user->planStatus())
                        <span class="green-color">
                            فعال
                        </span>
                        @else
                        <span class="red-color">
                            غیرفعال
                        </span>
                        @endif
                        @endif
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</section>
@endsection