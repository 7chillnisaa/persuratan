@extends('layouts/app')
@section('content')

@if(session('success'))
<div class="alert alert-success">{{session('success')}}</div>
@endif
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800"></h1>
                   

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Silahkan Isi Data Surat Yang Masuk dan Keluar Di Halaman ini</h6>
                        </div>
                        <div class="card-body">
                            <a class="btn btn-primary mb-3" href="{{route('surat.create')}}">Tambah Data</a>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto Surat</th>
                                            <th>Tujuan Surat</th>
                                            <th>Tanggal Surat</th>
                                            <th>Nomor Surat</th>
                                            <th>Asal Surat</th>
                                            <th>Perihal</th>
                                            <th>Jenis Surat</th>
                                            <th>Aksi</th>
                                           
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php $no = 1 ?>
                                        @foreach($surat as $item)
                                        <tr>
                                            <td>{{$no++}}</td>
                                            <td>
                                                @if($item->foto)
                                                    <img src="{{ asset('foto/'.$item->foto) }}" alt="Foto Surat" width="50">
                                                @else
                                                    Tidak Ada Foto
                                                @endif
                                            <td>{{$item->Tujuan_Surat}}</td>
                                            <td>{{$item->Tanggal_Surat}}</td>
                                            <td>{{$item->Nomor_Surat}}</td>
                                            <td>{{$item->Asal_Surat}}</td>
                                            <td>{{$item->Perihal}}</td>
                                            <td>{{$item->Jenis_Surat}}</td>
                                            <td>
                                            <a class="btn btn-sm btn-primary" href="{{url('surat/'.$item->id.'/edit')}}">Edit</a>
                                            <form action="{{url('surat/'.$item->id)}}" method="POST" style="display: inline-block">  
                                            @csrf
                                            @method('Delete')
                                            <button class="btn btn-sm btn-danger" onclick="return confirm ('Apakah Anda Ingin Menghapus Data?')">Delete</button>                                              
                                            </form>
                                           
                                            </td>
                                            </tr>  
                                            @endforeach
                                                                              
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
   @endsection