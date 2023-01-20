<script src="{{ asset('backend/plugins/toastr/toastr.min.js') }}"></script>

@if($errors->any())
<script type="text/javascript">
@if($errors->any())
    @foreach ($errors->all() as $error)
    toastr.error("{{ $error }}")
    @endforeach
@endif
</script>
@endif
