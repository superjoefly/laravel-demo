@if ($flash = session('message'))
  <div id="flash-message" class="w3-panel w3-pale-green">
    <p>
      {{ $flash }}
    </p>
  </div>
@endif
