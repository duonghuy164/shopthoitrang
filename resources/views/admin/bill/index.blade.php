@extends('admin.base')

@section('style')
  <style>
    ul.pagination{
    margin:auto;
    }
    table.table tbody tr td{
      height: 80px;
      line-height: 80px;
      width: auto;
    }
  </style>
@endsection

@section('content')
<div class="row">
  <table class="table">
    <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Note</th>
          <th scope="col">Info Product</th>
          <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
      @foreach($infoPay as $key =>$item)
        <tr id="">
          <td>{{$item['id']}}</td>
          <td>{{$item['fullname']}}</td>
          <td>{{$item['email']}}</td>
          <td>{{$item['phone']}}</td>
          <td>{{$item['address']}}</td>
          <td>{{$item['note']}}</td>
          <td>
            
            @foreach($item['infoPd'] as $k =>$val)
              <p>{{$val['id']}}</p>
              <p>{{$val['name']}}</p>
              <p>{{$val['qty']}}</p>
              <p>{{$val['options']['color']}}</p>
              <p>{{$val['options']['size']}}</p>
              <p>{{$val['options']['sale']}}</p>
            @endforeach
          </td>
          <td>{{$item['status']}}</td>
          <td>
            <button class="btn btn-danger btn-delete" id="">Delete</button>
          </td>

          <td>
            <a href="#" class="btn btn-danger">Edit</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
{{-- <div class="row">
   {{ $link->appends(request()->query())->links() }}
</div> --}}
@endsection

{{-- @section('script')
  <script type="text/javascript">
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $(function(){
      $('.btn-delete').click(function(){
        let self = $(this);

        let idPd = self.attr('id');
        alert(idPd);
        if($.isNumeric(idPd)){
          $.ajax({
            
            url: "{{ route('admin.deleteProduct') }}",
            type:"POST",
            data: {id:idPd},
            beforeSend: function(){

              self.text('loading');
            },
            success: function(result){
              self.text('delete');
              result = $.trim(result);
              if(result==="OK"){
                alert('Delete Success');
                $('#row_'+idPd).hide();
              }
              else{
                alert("delete fail");
              }
              return false;
            }
          })
        }
      });
    });
  </script>
@endsection --}}