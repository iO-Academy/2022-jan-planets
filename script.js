
document.querySelector('#earth').addEventListener('mouseover', (event) => {
    document.querySelector('#Earth').classList.remove('hidden-on-desktop')
    console.log('hi')
})

document.querySelector('#mars').addEventListener('mouseover', (event) => {
    document.querySelector('#Mars').classList.remove('hidden-on-desktop')
    console.log('hi')
})

document.querySelector('#earth').addEventListener('mouseout', (event) => {
    document.querySelector('#Earth').classList.add('hidden-on-desktop')
    console.log('hi')
})

document.querySelector('#mars').addEventListener('mouseout', (event) => {
    document.querySelector('#Mars').classList.add('hidden-on-desktop')
    console.log('hi')
})
