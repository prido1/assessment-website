<script src="{{asset('adminn/js/jquery.min.js')}}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="{{asset('adminn/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('adminn/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{asset('adminn/js/sparkline.js')}}"></script>
<!--Wave Effects -->
<script src="{{asset('adminn/js/waves.js')}}"></script>
<!--Menu sidebar -->
<script src="{{asset('adminn/js/sidebarmenu.js')}}"></script>
<!--Custom JavaScript -->
<script src="{{asset('adminn/js/custom.min.js')}}"></script>
<script src="{{asset('adminn/js/jquery.steps.min.js')}}"></script>
<script src="{{asset('adminn/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('adminn/js/jquery.minicolors.min.js')}}"></script>
<script src="{{asset('adminn/js/summernote/summernote-bs4.min.js')}}"></script>
<script>
    $(function () {
      $('.editor').summernote()
    })
  </script>

@stack('scripts')

