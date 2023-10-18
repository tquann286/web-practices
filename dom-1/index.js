const boxes = document.getElementsByClassName('box')
const colordlg = document.getElementById('colordlg')
// let activeobj = null;
for (let box of boxes)
  box.addEventListener('click', function (sender) {
    // activeobj = box;
    sender = this
    colordlg.click()
    colordlg.onchange = function () {
      //activeobj.style.backgroundColor = colordlg.value;
      sender.style.backgroundColor = colordlg.value
    }
  })
