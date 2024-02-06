import Swal from "sweetalert2";

window.showAlert = (type, message) => {
    Swal.fire({
        title: type.charAt(0).toUpperCase() + type.slice(1),
        text: message,
        icon: type, // 'success' or 'error'
        confirmButtonText: "OK",
    });
};
