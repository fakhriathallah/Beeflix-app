<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
        Swal.fire({
            title: 'Success!',
            text: "{{ $message }}",
            icon: 'success',
            timer: 3000,
            showConfirmButton: false
        }).then(() => {
            window.location.href = "{{ route('clients.index') }}";
        });
    </script>
</body>
</html>
