// Select all delete buttons
const deleteButtons = document.querySelectorAll(".sa-warning");

deleteButtons.forEach(function(button) {
    button.addEventListener("click", function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately

        const form = this.closest(".delete-form"); // Find the closest form related to the clicked button

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
