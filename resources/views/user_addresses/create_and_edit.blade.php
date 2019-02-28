@extends('layouts.app')
@section('title',($address->id ? '修改':'新增').'收货地址')

@section('content')
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="text-center">
                        {{ $address->id ? '修改': '新增' }}收货地址
                    </h2>
                </div>
                <div class="panel-body">
                    <!-- 输出后端报错开始 -->
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <h4>有错误发生：</h4>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                @endif
                <!-- 输出后端报错结束 -->

                    <user-address-create-and-edit inline-template>
                        @if ($address->id)
                            <form role="form" class="form-horizontal"
                                  action="{{ route('user_addresses.update',['user_address'=>$address->id]) }}"
                                  method="post">
                                {{ method_field('PUT') }}
                                @else
                                    <form role="form" class="form-horizontal"
                                          action="{{ route('user_addresses.store') }}" method="post">
                                        @endif
                                        {{ csrf_field() }}
                                        <select-district
                                                :init-value="{{ json_encode([$address->province,$address->city,$address->district]) }}"
                                                @change="onDistrictChanged" inline-template>
                                            <div class="form-group">
                                                <label class="control-label col-sm-2">省市区</label>
                                                <div class="col-sm-3">
                                                    <select v-model="provinceId" class="form-control">
                                                        <option value="">选择省</option>
                                                        <option v-for="(name,id) in provinces" :value="id">@{{ name }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select v-model="cityId" class="form-control">
                                                        <option value="">选择市</option>
                                                        <option v-for="(name,id) in cities" :value="id">@{{ name }}
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <select v-model="districtId" class="form-control">
                                                        <option value="">选择区</option>
                                                        <option v-for="(name,id) in districts" :value="id">@{{ name }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </select-district>
                                        <input type="hidden" name="province" v-model="province">
                                        <input type="hidden" name="city" v-model="city">
                                        <input type="hidden" name="district" v-model="district">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">详细地址</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="address"
                                                       value="{{ old('address', $address->address) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">邮编</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="zip"
                                                       value="{{ old('zip', $address->zip) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">姓名</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="contact_name"
                                                       value="{{ old('contact_name', $address->contact_name) }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-2">电话</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" name="contact_phone"
                                                       value="{{ old('contact_phone', $address->contact_phone) }}">
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-primary">提交</button>
                                        </div>
                                    </form>
                    </user-address-create-and-edit>
                </div>
            </div>
        </div>
    </div>
@stop