function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}
setInputFilter(document.getElementById("location_1_1_1_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_1_2_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 4 ); });
setInputFilter(document.getElementById("location_1_1_3_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_1_3_B_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 3); });
setInputFilter(document.getElementById("location_1_1_4_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 3); });
setInputFilter(document.getElementById("location_1_1_4_B_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 1); });
setInputFilter(document.getElementById("location_1_1_5_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 3); });
setInputFilter(document.getElementById("location_1_1_6_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_2_1_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 10); });
setInputFilter(document.getElementById("location_1_2_2_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 10); });
setInputFilter(document.getElementById("location_1_2_3_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 1); });
setInputFilter(document.getElementById("location_1_2_3_B_a_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_2_3_B_b_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_2_3_B_c_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_2_3_B_d_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_2_3_B_e_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 2); });
setInputFilter(document.getElementById("location_1_2_4_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 3); });
setInputFilter(document.getElementById("location_1_2_4_B_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 3); });
setInputFilter(document.getElementById("location_1_2_4_C_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 3); });
setInputFilter(document.getElementById("location_1_2_5_A_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 5); });
setInputFilter(document.getElementById("location_1_2_5_B_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 5); });
setInputFilter(document.getElementById("location_1_2_5_C_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 5); });
setInputFilter(document.getElementById("location_1_2_5_D_cm"), function(value) { return /^-?\d*[.]?\d*$/.test(value) && (value === "" || parseInt(value) < 5); });
/*setInputFilter(document.getElementById("intTextBox"), function(value) {
  return /^-?\d*$/.test(value); });
setInputFilter(document.getElementById("uintTextBox"), function(value) {
  return /^\d*$/.test(value); });
setInputFilter(document.getElementById("location_1_1_1_A_cm"), function(value) {
	return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); });
setInputFilter(document.getElementById("floatTextBox"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value); });
setInputFilter(document.getElementById("currencyTextBox"), function(value) {
  return /^-?\d*[.,]?\d{0,2}$/.test(value); });
setInputFilter(document.getElementById("latinTextBox"), function(value) {
  return /^[a-z]*$/i.test(value); });
setInputFilter(document.getElementById("hexTextBox"), function(value) {
  return /^[0-9a-f]*$/i.test(value); });
*/