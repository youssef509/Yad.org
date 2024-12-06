$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Initialize the DataTable
    let ajaxUrl = $('.datatable').data('url');
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: ajaxUrl,
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'phone', name: 'phone' },
            { data: 'city', name: 'city' },
            { data: 'client_category', name: 'client_category' },
            { data: 'project_type', name: 'project_type' },
            {
                data: 'created_at',
                name: 'created_at',
                render: function(data) {
                    return data ? data.slice(0, 19) : '';
                }
            },
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function (data, type, row) {
                    return `
                        <a href="/admin/Quote-Requeste/ImplementationofWorks/${row.id}/edit" class="btn btn-success btn-sm">تعديل</a>
                        <form method="POST" action="/admin/Quote-Requeste/ImplementationofWorks/${row.id}/delete" class="delete-form" style="display: inline;">
                            <input type="hidden" name="_token" value="${$('meta[name="csrf-token"]').attr('content')}">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="button" class="btn btn-danger btn-sm sa-warning" data-id="${row.id}">حذف</button>
                        </form>
                    `;
                }
            }
        ],
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excelHtml5',
                text: 'تصدير الي Excel',
                className: 'btn btn-secondary waves-effect waves-light',
                exportOptions: { columns: ':visible' }
            },
            {
                extend: 'print',
                text: 'طباعة',
                className: 'btn btn-primary waves-effect waves-light',
                exportOptions: { columns: ':visible' }
            }
        ],
        columnDefs: [
            { targets: [0, 1, 2], className: 'mdl-data-table__cell--non-numeric' }
        ],
        pageLength: 10
    });

    // Handle delete button click using delegation
    $(document).on('click', '.sa-warning', function(event) {
        event.preventDefault(); // Prevent the default form submission

        const form = $(this).closest('.delete-form'); // Find the closest form related to the clicked button

        // Show SweetAlert confirmation
        Swal.fire({
            title: "هل انت متأكد؟",
            text: "ستقوم بحذف العنصر المحدد",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#1c84ee",
            cancelButtonColor: "#fd625e",
            confirmButtonText: "نعم, احذف"
        }).then(function(result) {
            if (result.isConfirmed) {
                // Submit the form if confirmed
                form.submit();
            }
        });
    });
});
