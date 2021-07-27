import Preload from 'https://unpkg.com/preload-it@latest/dist/preload-it.esm.min.js'

// Preload Control
const preload = Preload()
const preloadProgress = document.querySelector('.preload span')
const preloadIcon = document.querySelector('.full-color')

preload.fetch([
    '../images/bg-banner-3.jpg',
    '../images/duvidas.jpg',
    '../images/bg-banner-2.jpg',
    '../images/dispositivo-1.png',
    '../images/dispositivo-2.png',
    '../images/dispositivo-3.png',
    '../images/dispositivo-4.png',
    '../images/dispositivos.jpg',
    '../images/sobre-1.jpg',
    '../images/sobre-2.jpg',
    '../images/sobre-3.jpg',
    '../images/img-video.jpg',
    '../images/logo-internas.png',
    '../images/galeria-1.jpg',
    '../images/galeria-2.jpg',
  ]).then(items => {
  
  gsap.to('.preload', {
    duration: .5,
    autoAlpha: 0,
    ease: 'power3.inOut'
  })

  gsap.to('.preload span', {
    duration: .8,
    autoAlpha: 0,
    skewY: 6,
    y: -20,
    ease: 'power3.inOut'
  })

  gsap.to('body', {
    css: { overflow: 'auto' },
    delay: 2
  })

  // Wow Initialization
  new WOW().init()
})

preload.onprogress = event => {
  preloadProgress.textContent = event.progress + '%'
  preloadIcon.style.height = event.progress + '%'
}

preload.onfetched = item => {
  console.log(item)
}

preload.onerror = item => {
  console.log(item)
}

