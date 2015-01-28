@if(Session::has('message'))
<div id="flash" class="alert {{ Session::get('alert-class', 'alert-info') }} alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <span id="flash_content">{{ Session::get('message') }}</span>
</div>
@endif