function rta() {
    alert('hola');
    user = document.getElementById('mail').value
    pass = document.getElementById('p1').value


    if (user == '' && pass == '') {
        //alert('hola');
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'EMAIL Y CONTRASEÑA OBLIGATORIOS',
        })
        return false;

    } else if (user == '') {
        //alert("EMAIL OBLIGATORIO");
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'EMAIL OBLIGATORIO',
        })
        return false;
    } else if (pass == '') {
        // alert("CONTRASEÑA OBLIGATORIA");
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'CONTRASEÑA OBLIGATORIA',
        })
        return false;
    } else if (pass.length < 8) {
        //alert("LA CONTRASEÑA TIENE QUE TENER 8 CARACTERES");
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'LA CONTRASEÑA TIENE QUE TENER 8 CARACTERES',
        })
        return false;
    }
    if (pass.length > 8) {
        Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'LA CONTRASEÑA TIENE QUE TENER 8 CARACTERES',
            })
            // alert("LA CONTRASEÑA TIENE QUE TENER 8 CARACTERES");
        return false;
    }
    return true
}