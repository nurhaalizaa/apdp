  function validateForm() {
    var isValid = true;

    var namaPegawai = document.getElementById("namaPegawai").value.trim();
    var jenisKelamin = document.getElementById("jenis_kelamin").value.trim();
    var tanggalLahir = document.getElementById("tanggalLahir").value.trim();
    var jabatan = document.getElementById("jabatan").value.trim();
    var phoneNumber = document.getElementById("phoneNumber").value.trim();
    var email = document.getElementById("email").value.trim();
    var alamat = document.getElementById("alamat").value.trim();
    var foto = document.getElementById("foto").value.trim();

    // Clear previous error messages
    document.getElementById("namaPegawaiError").innerText = "";
    document.getElementById("jenis_kelaminError").innerText = "";
    document.getElementById("tanggalLahirError").innerText = "";
    document.getElementById("jabatanError").innerText = "";
    document.getElementById("phoneNumberError").innerText = "";
    document.getElementById("emailError").innerText = "";
    document.getElementById("alamatError").innerText = "";
    document.getElementById("fotoError").innerText = "";

    if (namaPegawai === "") {
      document.getElementById("namaPegawaiError").innerText = "Nama Pegawai harus diisi.";
      isValid = false;
    }

    if (jenisKelamin === "") {
      document.getElementById("jenis_kelaminError").innerText = "Jenis Kelamin harus dipilih.";
      isValid = false;
    }

    if (tanggalLahir === "") {
      document.getElementById("tanggalLahirError").innerText = "Tanggal Lahir harus diisi.";
      isValid = false;
    }

    if (jabatan === "") {
      document.getElementById("jabatanError").innerText = "Jabatan harus diisi.";
      isValid = false;
    }

    if (phoneNumber === "") {
      document.getElementById("phoneNumberError").innerText = "No Hp harus diisi.";
      isValid = false;
    } else if (!/^\d{10,15}$/.test(phoneNumber)) {
      document.getElementById("phoneNumberError").innerText = "No Hp harus angka terdiri dari 10 hingga 15 digit.";
      isValid = false;
    }

    if (email === "") {
      document.getElementById("emailError").innerText = "Email harus diisi.";
      isValid = false;
    } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      document.getElementById("emailError").innerText = "Format email tidak valid.";
      isValid = false;
    }

    if (alamat === "") {
      document.getElementById("alamatError").innerText = "Alamat harus diisi.";
      isValid = false;
    }

    if (foto === "") {
      document.getElementById("fotoError").innerText = "Foto harus diunggah.";
      isValid = false;
    }
    console.log("Form submitted"); // Anda bisa menambahkan console.log sesuai kebutuhan

// return valid;
    return isValid;
  }