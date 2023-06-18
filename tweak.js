console.log("starting tweak")
const product1 = document.getElementById("product1")
const wrapper = document.getElementById("wrapper")
const newBox = document.getElementById("newBox")
const productBox1 = document.getElementById("productBox1")
const productBox2 = document.getElementById("productBox2")

function getDetail(nomor) {
  console.log('produk: ', nomor)
  newBox.style.display = "block"
  wrapper.style.display = "none"

  if (nomor === 1) {
    productBox1.style.display = "flex"
  }
   else if (nomor === 2) {
    productBox2.style.display = "flex"
  }
   else if (nomor === 3) {
    productBox2.style.display = "flex"
  }
   else if (nomor === 4) {
    productBox2.style.display = "flex"
  }
   else if (nomor === 5) {
    productBox2.style.display = "flex"
  }
   else if (nomor === 6) {
    productBox2.style.display = "flex"
  }

}

