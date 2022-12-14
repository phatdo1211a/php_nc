@extends('layouts.app', [
    'class' => 'sidebar-mini',
    'activePage' => 'chu_de',
    'namePage' => 'Chủ đề câu hỏi',
])

@section('content')
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
           
                <div class="card">
                    <div class="card-body">
                    <div class="col-8">
                        <h4 class="card-title">DANH SÁCH CHỦ ĐỀ CÂU HỎI</h4>
                        <a href="{{ route('Category-Create-get') }}" class="btn btn-fill btn-success">Thêm Chủ Đề</a>
                    </div>
                   
                </div>
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            ID
                                        </th>
                                        <th>
                                            Chủ Đề
                                        </th>
                                         <th>
                                            Trạng Thái
                                        </th>
                                        <th>
                                            Ngày tạo
                                        </th>
                                        </tr>
                                </thead>
                               
                                @foreach($lst as $p)
                                    <div class="namePage">   
                                        @csrf    
                                        </thead>
                                        <tbody>
                                        <tr>
                                        <td>
                                            <p> {{ $p->id}}</p>
                                        </td>
                                        <td>
                                            <p>   {{ $p->name }}</p>
                                        </td>
                                        <td>
                                            <p>{{$p->status==1?"Hoạt Động":"Không Hoạt Động"}}</p>
                                        </td>
                                        <td>
                                            <p>   {{ $p->created_at }}</p>
                                        </td>
                                       </div>
                                       
                                    <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-ellipsis-v"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Sửa</a>  
                                            <a class="dropdown-item" href="#">Xoá</a>             
                                        </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                                @endforeach
                                
                            </table>
                    </div>
                </div>
        </div>
    </div>
@endsection
