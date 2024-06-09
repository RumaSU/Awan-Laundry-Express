<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.container {
  display: flex;
  align-items: center;
}

.radio {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.radio input {
  margin-right: 10px;
}

.date {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.date input {
  padding: 5px 10px;
  border: 1px solid #ccc;
  margin-right: 10px;
}

.date i {
  font-size: 18px;
  cursor: pointer;
}
</style>
</head>
<body>

<div class="container">
  <div>
    <div class="radio">
      <input type="radio" name="date-range" id="all-dates" checked>
      <label for="all-dates">Semua Tanggal Transaksi</label>
    </div>
    <div class="radio">
      <input type="radio" name="date-range" id="less-than-30">
      <label for="less-than-30">Kurang Dari 30 Hari</label>
    </div>
    <div class="radio">
      <input type="radio" name="date-range" id="more-than-30">
      <label for="more-than-30">Lebih Dari 30 Hari</label>
    </div>
    <div class="radio">
      <input type="radio" name="date-range" id="custom-dates">
      <label for="custom-dates">Pilih Tanggal Sendiri</label>
    </div>
    <div class="date" id="custom-date-range" style="display:none;">
      <label for="start-date">Mulai dari</label>
      <input type="date" id="start-date" value="">
      <i class="fas fa-calendar-alt"></i>
      <label for="end-date">Sampai</label>
      <input type="date" id="end-date" value="">
      <i class="fas fa-calendar-alt"></i>
    </div>
  </div>
</div>

<script>
const customDates = document.getElementById("custom-date-range");
const customDatesRadio = document.getElementById("custom-dates");

customDatesRadio.addEventListener("change", () => {
  if (customDatesRadio.checked) {
    customDates.style.display = "flex";
  } else {
    customDates.style.display = "none";
  }
});
</script>

</body>
</html>
