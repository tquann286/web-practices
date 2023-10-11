const danhSachHocSinh = [
  {
    ten: 'Nguyễn Văn A',
    tuoi: 23,
    diemTrungBinh: 8.5,
  },
  {
    ten: 'Trần Thị B',
    tuoi: 20,
    diemTrungBinh: 9.2,
  },
  {
    ten: 'Lê Văn C',
    tuoi: 19,
    diemTrungBinh: 7.8,
  },
  {
    ten: 'Phạm Thị D',
    tuoi: 18,
    diemTrungBinh: 9.0,
  },
  {
    ten: 'Hoàng Văn E',
    tuoi: 21,
    diemTrungBinh: 8.3,
  },
]

const body = document.querySelector('body')

let result = ''

result = `
  <table border="1">
    <thead>
      <th>Tên</th>
      <th>Tuổi</th>
      <th>Điểm trung bình</th>
    </thead>
    <tbody>
`

let count = 0

// In ra thông tin của từng học sinh trong mảng
for (let i = 0; i < danhSachHocSinh.length; i++) {
  const hocSinh = danhSachHocSinh[i]

  if (hocSinh.tuoi > 20) {
    count++
    result += `<tr>
    <td>${hocSinh.ten}</td>
    <td>${hocSinh.tuoi}</td>
    <td>${hocSinh.diemTrungBinh}</td>
  </tr>`
  }
}

result += `
</tbody>
<tfoot>
  <tr>
  <td>Total</td>
  <td colspan="2">${count}</td>
  </tr>
</tfoot>
</table>`

body.innerHTML = result
