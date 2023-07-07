@extends('app')

@section('content')
<h1 class="text-center">Laravel Crud page </h1>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h2> Member table
                    <button type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right" >Add Memeber</button>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10  offset-1 mt-5">
                <table class="table table-responsive table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>



                    <tbody id="memberbody">

                    </tbody>
                  </table>

            </div>
        </div>
    </div>


@endsection

@section('script')
<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'x-CSRF-TOKEN': $('meta[name = "csrf-token"]').attr('content')
            }
        });

        showmember();

        $("#addform").on('submit',function(e){
            e.preventDefault();
            // var form = $(this).serialize();
            var url = $(this).attr('action');
            // alert('form submitteed dddjj  ');
            // console.log(url);

            $.ajax({
                url: url,
                type: 'POST',
                data: new FormData(this),
                contentType: false,
             cache: false,
        processData: false,
                success: function(){
                    // console.log("data save");
                    $('#addnew').modal('hide');
                    $('#addform')[0].reset();
                    showmember();
                    // console.log(data);
                }
            });
        });
        $(document).on('click','.edit',function(event){
            event.preventDefault();
            var id = $(this).data('id');
            var firstname = $(this).data('first')
            var lastname = $(this).data('last');
            $('#editmodal').modal('show');
            $('#firstname').val(firstname);
            $('#lastname').val(lastname);
            $('#memid').val(id);
        });
        $('#editform').on('submit', function(e){
                e.preventDefault();
                // var form = $(this).serialize();
                var url = $(this).attr('action');
                alert('edit form');

                $.ajax({
                url: url,
                type: 'POST',
                data: new FormData(this),
                contentType: false,
             cache: false,
        processData: false,
                success: function(){
                    // console.log("data save");
                    $('#editmodal').modal('hide');


                    showmember();
                    // console.log(data);
                }
            });
                // $.post(url,form,function(data){
                //     $('#editmodal').modal('hide');
                //     showMember();
                // })
            });

        // $('#editform').on('submit',function(e){
        //     e.preventDefault();
        //     var form = $(this).serialize();
        //     var url = $(this).attr('action');

        //     $.post(url,form,function(data){

        //         $('#editmodal').modal('hide');
        //         showmember();
        //     })
        // });
        $(document).on('click','.delete',function(event){
            event.preventDefault();
            var id = $(this).data('id');
            $('#deletemodal').modal('show');
            $('#deletemember').val(id);
        });

        $('#deletemember').click(function(){
            var id = $(this).val();
            $.post("{{ URL::to('delete') }}",{id:id},function(){
                $('#deletemodal').modal('hide');
                showmember();
            })
        });

    });
        function showmember(){
            $.get("{{ URL::to('show') }}",function(data){
                $('#memberbody').empty().html(data);

            })
        }
</script>

@endsection
