@extends('layouts.master.master-admin')
@section('header')
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <!-- begin:: Subheader -->
    <div class="kt-subheader   kt-grid__item" id="kt_subheader">
        <div class="kt-container  kt-container--fluid ">
            <div class="kt-subheader__main">
                <span class="kt-subheader__separator kt-hidden"></span>
                <div class="kt-subheader__breadcrumbs">
                    <a href="/activities" class="kt-subheader__breadcrumbs-home">
                        <i class="flaticon2-shelter"></i></a>
                    <span class="kt-subheader__breadcrumbs-separator"></span>
                  <span>
                    <a href="" class="kt-subheader__breadcrumbs-link kt-subheader__breadcrumbs-link--active">
                        Activity
                    </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!-- end:: Subheader -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
        @include('layouts.partials.flash-message')
        <div class="kt-portlet">
            <div class="kt-portlet__head kt-portlet__head--lg">
                <div class="kt-portlet__head-label">
                              <span class="kt-portlet__head-icon">
                                 <i class="kt-font-brand fa fa-building"></i>
                              </span>
                    <h3 class="kt-portlet__head-title">
                        Activity log
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
                <table name="phase" id="" class="table table-hover"   >
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Child name</th>
                        <th>E-mail</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    <td>{{$activity->user->name}}</td>
                    <td>{{$activity->user->child_name}}</td>
                    <td>{{$activity->user->email}}</td>
                    <td>{{$activity->user->created_at}}</td>

                    </tbody>
                </table>
                <br>
                <div class="table-responsive">
                    @foreach($newData as $data)
                        <h1 style="font-size: 15px">{{$data->phase_name}}</h1>
                    <table name="phase" id="" class="table table-hover"  >
                        <thead>
                        <tr>
                            <th>Question</th>
                            <th></th>
                            <th>Answers</th>
                        </tr>
                        </thead>

                        <tbody>
{{--                        @if(count($data)==0)--}}
{{--                            <tr style="text-align: center">--}}
{{--                                <td colspan="12"> No Record Found</td>--}}
{{--                            </tr>--}}
{{--                        @endif--}}

                            @foreach($data->questions as $question)
                                <tr>
                                <td width="50%">{{$question->question_name}}</td>
                                <td width="20%"></td>
                                    <td width="30%" >
                                    @foreach($question->answer_names as  $answer_name)
                                        {{$answer_name}}
                                        @if( !$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </td>


                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <form method="POST" id="deleteBucket">
        @csrf
        @method('delete')
    </form>
@endsection
@section('bundleFiles')
    <script src="{{asset('app.js')}}"></script>
@endsection
@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#locationTable').DataTable();
        });
        $('.delete').on('click', function () {
            var id = $(this).attr('data-id');
            swal({
                title: 'Delete this Location?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(function (isConfirm) {
                console.log(isConfirm.dismiss);
                if (isConfirm.dismiss !== 'cancel' && isConfirm.dismiss !== 'overlay' && isConfirm){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'DELETE',
                        url :  "{{url('location/')}}"+'/'+id,
                        success : function (data)
                        {
                            sweetAlert("Deleted Successfully");
                            location.reload();
                        }
                    });
                }
            })
        });
    </script>
@stop
