form.addEventListener('submit', function (event) {
    event.preventDefault();
    event.stopPropagation();

    let isFormValid = true;

    const fieldsToValidate = form.querySelectorAll('input[required], select[required]');
    fieldsToValidate.forEach(field => {
        field.classList.remove('is-invalid', 'is-valid');
        if (!field.value.trim()) {
            field.classList.add('is-invalid');
            isFormValid = false;
        } else {
            field.classList.add('is-valid');
        }
    });

    const password = document.getElementById('passwordCliente');
    const confirmPassword = document.getElementById('confirmarPassCliente');
    if (password.value && confirmPassword.value && password.value !== confirmPassword.value) {
        confirmPassword.classList.add('is-invalid');
        confirmPassword.classList.remove('is-valid');
        document.getElementById('passwordError').textContent = 'Las contraseñas no coinciden.';
        isFormValid = false;
    }

    if (isFormValid) {
        console.log('Formulario válido. Enviando datos...');
        alert('¡Registro exitoso!'); // Opcional
        form.submit(); // 👈 Esto permite enviar el formulario realmente
    } else {
        console.log('Formulario inválido. Por favor, corrige los errores.');
    }
});
