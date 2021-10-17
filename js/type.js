
let select = document.getElementById("productType");


function DVD() {
  return `
      <label for="size">Size (MB)</label>
      <input class="form-control w-100" name="size" id="size" type="text" pattern="^[0-9]*$" required/>
      <p>Please provide size.</p>
      `;
}
function Book() {
  return `
      <label for="weight">Weight (KG)</label>
      <input class="form-control w-100" name="weight" id="weight" type="text" pattern="^[0-9]*$" required/>
      <p>Please provide weight.</p>
      `;
}
function Furniture() {
  return `
      <label for="height">Height (CM)</label>
      <input class="form-control w-100" name="height" id="height" type="text" pattern="^[0-9]*$" required/>
      <label for="width">Width (CM)</label>
      <input class="form-control w-100" name="width" id="width" type="text" pattern="^[0-9]*$" required/>
      <label for="length">Length (CM)</label>
      <input class="form-control w-100" name="length" id="length" type="text" pattern="^[0-9]*$" required/>
      <p>Please provide dimensions in HxWxL format.</p>
      `;
}

function typeData(type) {
  $("#type").html(window[type]());
}

window.addEventListener("DOMContentLoaded", (event) => {
  $("#productType").change(function () {
    var selectedType = $("#productType").val();
    typeData(selectedType);
  });
});
