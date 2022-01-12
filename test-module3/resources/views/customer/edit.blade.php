@extends('welcome')
@section('content')
    <div class="container mt-5">

        <strong>Cập nhật đại lý phân phối</strong>

        <form class="mt-5" action="{{ route('update') }} " method="post">
            @csrf
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Mã nhân viên</label>
                    <input type="hidden" class="form-control" value="{{ $customer->id }}" name="id" id="inputEmail4" >
                    <input type="text" class="form-control" value="{{ $customer->id }}" disabled id="inputEmail4" >

                    <label for="inputPassword4">Số điện thoại</label>
                    <input type="text" class="form-control" value="{{ $customer->phone }}" name="phone" id="inputPassword4">
                    @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Chọn nhóm nhân viên</label>
                    <select id="inputState" name="role" class="form-control">
                        <option {{$customer->role == "Quản lý hệ thống" ? "selected": ""}} value="Quản lý hệ thống">Quản lý hệ thống</option>
                        <option {{$customer->role == "Quản lý nhân sự" ? "selected": ""}} value="Quản lý nhân sự">Quản lý nhân sự</option>
                        <option {{$customer->role == "Lễ tân" ? "selected": ""}} value="Lễ tân">Lễ tân</option>
                        <option {{$customer->role == "Quản lý phòng" ? "selected": ""}} value="Quản lý phòng">Quản lý phòng</option>
                        <option {{$customer->role == "Quản lý dịch vụ" ? "selected": ""}} value="Quản lý dịch vụ">Quản lý dịch vụ</option>
                    </select>

                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Số CMND</label>
                    <input type="number" class="form-control" value="{{ $customer->idCard }}" name="idCard" id="inputEmail4">
                    @error('idcard')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Họ tên</label>
                    <input type="text" class="form-control" value="{{ $customer->name }}" name="name" id="inputPassword4">
                    @error('name')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="text" class="form-control" value="{{ $customer->email }}" name="email" id="inputEmail4">
                    @error('email')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Địa chỉ</label>
                    <input type="text" class="form-control" value="{{ $customer->address }}" name="address" id="inputEmail4">
                    @error('address')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Ngày sinh</label>
                    <input type="date" name="birthday" class="form-control">
                    @error('birthday')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Giới tính</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input {{$customer->sex == "Nữ" ? "checked": ""}} class="form-check-input" type="radio" name="sex" id="gridRadios2" value="Nữ">
                                <label class="form-check-label" for="gridRadios2">
                                    Nữ
                                </label>
                            </div>
                            <div class="form-check">
                                <input {{$customer->sex == "Nam" ? "checked": ""}} class="form-check-input" type="radio" name="sex" id="gridRadios2" value="Nam">
                                <label class="form-check-label" for="gridRadios2">
                                    Nam
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>

            </div>
            <button type="submit" class="btn btn-warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2"
                     viewBox="0 0 16 16">
                    <path
                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
                </svg>
                Cập nhật
            </button>
        </form>
    </div>
@endsection






