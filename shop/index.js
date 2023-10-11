const sider = document.querySelector('ul.app-sidebar')
const products = document.querySelector('.products')
const heading = document.querySelector('.app-heading')
heading.addEventListener
let currentTab = ''

const menus = {
  laptop: ['Sony', 'Acer', 'Asus', 'Dell'],
  smartphone: ['Iphone', 'Galaxy S', 'Sony Xperia'],
  tablet: ['Galaxy Tab', 'Ipad', 'Xperia Tab'],
}
const categories = Object.keys(menus)

const setTab = (newTab) => {
  currentTab = newTab
  heading.textContent = newTab
  render()
}

const renderSider = () => {
  let result = ''

  categories.forEach((key) => {
    const isActive = currentTab === key

    /**
     * Cách 1:
     *
     * result += `<li class="tab nav-item nav-link cursor-pointer capitalize ${isActive ? 'text-primary' : 'text-muted'}" onclick="setTab('${key}')">${key}</li>`
     *
     */

    // Cách 2:
    result += `<li class="tab nav-item nav-link cursor-pointer capitalize ${isActive ? 'text-primary' : 'text-muted'}">${key}</li>`
  })

  sider.innerHTML = result

  // Cách 2:
  const navItems = sider.querySelectorAll('.tab')
  navItems.forEach((item, i) => {
    item.addEventListener('click', () => setTab(categories[i]))
  })
}

const renderList = () => {
  let result = ''
  const items = menus[currentTab] || []

  if (items.length > 0) {
    items.forEach((item) => {
      result += `<div class="col-lg-4">
      <div class="card mb-4 shadow-sm">
        <div class="card-body">
          <p class="card-text text-center">${item}</p>
        </div>
      </div>
    </div>`
    })
  } else {
    result = `<p>Chọn sản phẩm muốn xem</p>`
  }

  products.innerHTML = result
}

function render() {
  renderSider()
  renderList()
}

render()
