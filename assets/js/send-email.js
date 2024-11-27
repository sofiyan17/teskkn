document
    .getElementById("contact-form")
    .addEventListener("submit", function (event) {
      event.preventDefault(); // Mencegah pengiriman default formulir
      var form = event.target;
      var formData = new FormData(form);

      fetch(form.action, {
        method: form.method,
        body: formData,
        headers: {
          Accept: "application/json",
        },
      })
        .then(function (response) {
          if (response.ok) {
            document.getElementById("contact-form").reset(); // Mengosongkan formulir setelah berhasil mengirim
            document.getElementById("contact-message").textContent = "Message sent successfully ✅"; // Menampilkan pesan sukses
            document.getElementById("contact-message").style.color = "#069C54";
          } else {
            throw new Error("Ada masalah dalam mengirim email");
          }
        })
        .catch(function (error) {
          console.error("Terjadi kesalahan:", error);
          document.getElementById("contact-message").textContent = "Message not sent (service error) ❌";
          document.getElementById("contact-message").style.color = "red";
        });
    });