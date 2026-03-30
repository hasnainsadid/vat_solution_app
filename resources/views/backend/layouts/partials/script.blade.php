{{-- jQuery --}}
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

{{-- Core JS --}}
<script src="{{ asset('backend') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('backend') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/node-waves/node-waves.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/@algolia/autocomplete-js.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/pickr/pickr.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/hammer/hammer.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/i18n/i18n.js"></script>
<script src="{{ asset('backend') }}/vendor/js/menu.js"></script>

<!-- Vendors JS -->
<script src="{{ asset('backend') }}/vendor/libs/swiper/swiper.js"></script>
<script src="{{ asset('backend') }}/vendor/libs/tagify/tagify.js"></script>
<script src="{{ asset('backend') }}/js/forms-tagify.js"></script>

{{-- DataTables Bootstrap 5 --}}
<script src="{{ asset('backend') }}/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

{{-- ✅ DataTables Buttons --}}
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

{{-- Excel / CSV --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

{{-- PDF --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

<!-- Main JS -->
<script src="{{ asset('backend') }}/js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('backend') }}/js/dashboards-analytics.js"></script>

{{-- izitoast --}}
<script src="{{ asset('js/iziToast.js') }}"></script>
@include('vendor.lara-izitoast.toast')

{{-- custom js --}}
<script src="{{ asset('backend') }}/js/custom.js"></script>

{{-- sweet alert --}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

{{-- tagsinput --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.6.0/bootstrap-tagsinput.min.js"></script>

@stack('scripts')