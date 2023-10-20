const form = document.querySelector('form')
const submitBtn = document.querySelector('.submit-button')
const resultDiv = document.querySelector('.result')

const nameInput = document.getElementById('name')
const ageInput = document.getElementById('age')

const results = []

const isValid = (obj) => {
  for (const key in obj) {
    if (!obj[key] || (Array.isArray(obj[key]) && obj[key]?.length === 0)) {
      return false
    }
  }

  return true
}

const handleFillForm = (record) => {
  form.reset()
  nameInput.value = record.name
  ageInput.value = record.age
  document.querySelector(`input[name="gender"][value="${record.gender}"]`).checked = true
  record.hobbies?.forEach((hobby) => {
    document.querySelector(`input[name="hobbies"][value="${hobby}"]`).checked = true
  })
}

const renderList = () => {
  resultDiv.innerHTML = ''
  results.forEach((result) => {
    const button = document.createElement('button')
    button.classList.add('btn', 'btn-primary', 'm-1')
    button.textContent = result.name

    button.addEventListener('click', () => handleFillForm(result))

    resultDiv.appendChild(button)
  })
}

submitBtn.onclick = (e) => {
  e.preventDefault()

  const gender = document.querySelector('input[name="gender"]:checked')?.value
  const hobbies = []
  document.querySelectorAll('input[name="hobbies"]:checked').forEach((checkbox) => {
    hobbies.push(checkbox?.value)
  })

  const record = { name: nameInput.value, age: ageInput.value, gender, hobbies }

  if (!isValid(record)) {
    alert('Vui lòng điền các trường còn thiếu!')
    return
  }

  results.push(record)
  renderList(results)
  form.reset()
}
