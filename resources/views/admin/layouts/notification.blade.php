@if ($message = Session::get('success'))
<script type="text/javascript">
	toastr["success"]('{{ $message }}');
</script>
@endif


@if ($message = Session::get('error'))
<script type="text/javascript">
	toastr["danger"]('{{ $message }}');
</script>
@endif


@if ($message = Session::get('warning'))
<script type="text/javascript">
	toastr["warning"]('{{ $message }}');
</script>
@endif


@if ($message = Session::get('info'))
<script type="text/javascript">
	toastr["success"]('{{ $message }}');
</script>
@endif


@if ($errors->any())
<script type="text/javascript">
     //toastr["error"]('Please check the form below for errors');
     @php 
          $arrs = json_decode($errors);
          foreach ($arrs as $arr){ @endphp
               toastr["error"]('{{$arr[0]}}');
          
     @php } @endphp
</script>
@endif
<script type="text/javascript">
	toastr.options = {
                    "closeButton": true,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": false,
                    "positionClass": "toast-top-right",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "500",
                    "hideDuration": "500",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
</script>