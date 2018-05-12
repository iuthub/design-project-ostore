@extends('layouts.admin')

@section('content')


<section id="middlePage" class="bg-white my-5">

    <div class="row">
        <div class="col-sm-12 col-md-5 col-lg-4 col-xl-3 sss-lgray d-flex align-items-center">
            <div class="container d-flex align-items-center">
                <div class="container-fluid">
                    <!-- <h1 class="text-uppercase sss-text-black">Arkyn</h1> -->
                    <h3 class="text-uppercase">Admin Dashboard</h3>
                    <div class="list-group">
                        <a href="index.php"><button type="button" class="btn btn-warning rounded-0 text-uppercase px-4">Show Users<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                        <a href="{{url('admin/edit')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Edit Users<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                        <a href="{{url('admin/minkblanket')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Minkblankets<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                        <a href="{{url('admin/prayermat')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Prayermats<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                        <a href="{{url('admin/flannel')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Flannels<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                        <a href="{{url('admin/carpet')}}"><button type="button" class="btn sss-black sss-text-white rounded-0 text-uppercase px-4">Upload Carpets<i class="fas fa-chevron-circle-right ml-2"></i></button></a>
                        <!--                 <a href="index.php"><button type"button" class="btn btn-warning rounded-0 text-uppercase px-4">Edit Account<i class="fas fa-chevron-circle-right ml-2"></i></button></a> -->
                        <a href="{{url('logout')}}" class="list-group-item list-group-item-action sss-lgray sss-text-black font-weight-bold px-0 border-0 rounded-0">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-7 col-lg-8 col-xl-9 bg-warning">

            <div class="secOrders container d-flex align-items-center">
                <div class="container-fluid">
                    <h1 class="text-uppercase sss-text-black">Users</h1>
                    <table class="table table-striped border-bottom bg-white">
                        <thead>
                        <tr class="sss-gray sss-text-white text-uppercase">
                            <th scope="col" class="border-0">User</th>
                            <th scope="col" class="border-0">Company</th>
                            <th scope="col" class="border-0">Address</th>
                            <th scope="col" class="border-0">Email</th>
                            <th scope="col" class="text-center border-0">Phone</th>
                            <!--                 <th scope="col" class="text-center">Actions</th> -->
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <th scope="row">{{$user->firstName}}<?php echo " "?>{{$user->lastName}}</th>
                            <td>{{$user->companyName}}</td>
                            <td>{{$user->address}}</td>
                            <td>{{$user->email}}</td>
                            <td class="text-center">{{$user->phone}}</td>
                            <!--                 <td class="text-center"><i class="fas fa-eye"></i></td> -->
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>


</section>










@endsection