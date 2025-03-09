document.addEventListener("DOMContentLoaded", function () {
    let formToSubmit = null;

    document.querySelectorAll(".delete-form").forEach(form => {
        form.addEventListener("submit", function (event) {
            event.preventDefault();

            formToSubmit = this;

            document.getElementById("confirmMessage").innerText = "Shkolo - Are you sure you want to delete this button?";
            document.getElementById("confirmModal").style.display = "block";
        });
    });

    document.getElementById("confirmYes").addEventListener("click", function () {
        if (formToSubmit) {
            formToSubmit.submit();
        }
        document.getElementById("confirmModal").style.display = "none";
    });

    document.getElementById("confirmNo").addEventListener("click", function () {
        document.getElementById("confirmModal").style.display = "none";
    });
});


// Redirect to Dashboard when clicking the Back button
function goBackToDashboard() {
    window.location.href = "/";
}
