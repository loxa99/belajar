let listDosen = document.getElementsByTagName("ol"); listDosen[0].addEventListener("click",tampilkan); function tampilkan(event){ alert("Cek data dosen"+event.target.innerHTML); }
