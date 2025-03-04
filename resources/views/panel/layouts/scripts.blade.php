<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
@if(session('success') || session('error') || session('warning') || session('info'))
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            let message = @json(session('success') ?? session('error') ?? session('warning') ?? session('info'));
            let toastElement = document.getElementById("sessionToast");
            let toastBody = document.getElementById("toastMessage");

            // Determine toast type
            let toastType = "{{ session('success') ? 'success' : (session('error') ? 'danger' : (session('warning') ? 'warning' : 'info')) }}";

            // Apply Bootstrap color classes
            toastElement.classList.remove('text-bg-primary', 'text-bg-danger', 'text-bg-warning', 'text-bg-info');
            toastElement.classList.add(`text-bg-${toastType}`);

            // Set toast message
            toastBody.innerText = message;

            // Show the toast
            let toast = new bootstrap.Toast(toastElement);
            toast.show();
        });
    </script>
@endif


<!-- Custom Scripts -->
<script src="{{ asset('panel/js/scripts.js') }}"></script>

<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('panel/assets/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('panel/assets/demo/chart-bar-demo.js') }}"></script>

<!-- Simple DataTables -->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('panel/js/datatables/datatables-simple-demo.js') }}"></script>

<!-- Litepicker -->
<script src="https://cdn.jsdelivr.net/npm/litepicker/dist/bundle.js" crossorigin="anonymous"></script>
<script src="{{ asset('panel/js/litepicker.js') }}"></script>

<!-- Customizer -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script data-search-pseudo-elements="" defer="" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js" crossorigin="anonymous"></script>

