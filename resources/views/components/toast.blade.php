<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="{{ asset('images/icon.png') }}" class="rounded me-2" alt="logo" width="20px" height="20px">
          <strong class="me-auto">Helldry</strong>
          <small>{{ now()->format('H:i') }}</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ session('success') }}
        </div>
      </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toastLiveExample = document.getElementById('liveToast');
        if (toastLiveExample) {
            toastLiveExample.classList.add('show');
            setTimeout(() => {
                toastLiveExample.classList.remove('show');
            }, 5000); 
        }
    });
</script>