<script>
  function toggleNav() {
      document.getElementById('slideIn').classList.toggle('w3-hide');
      // Hide if exists
      if (document.getElementById('logout2')) {
          document.getElementById('logout2').classList.add('w3-hide');
      }
  }
  function toggleLogout() {
      event.preventDefault();
      document.getElementById('logout').classList.toggle('w3-hide');
  }
  function toggleLogout2() {
      event.preventDefault();
      document.getElementById('logout2').classList.toggle('w3-hide');
  }
</script>
