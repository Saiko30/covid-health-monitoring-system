<script src="sweetalert2-11.1.10/package/dist/sweetalert2.min.js"></script>

<?php
if (isset($_SESSION['status']) && $_SESSION['status_code'] != '') {
?>
    <script>
        Swal.fire({
            icon: "<?php echo $_SESSION['status_code']; ?>",
            title: "<?php echo $_SESSION['status']; ?>",
            button: "Yes",
        });
    </script>

<?php
    unset($_SESSION['status']);
}
?>