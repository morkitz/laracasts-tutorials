
@if (session()->has('flash_message'))
   <div class="Message Message--{{ ucwords(session('level')) }}">
      {{ session('flash_message') }}
   </div>
@endif
