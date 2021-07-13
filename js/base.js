import Preload from 'https://unpkg.com/preload-it@latest/dist/preload-it.esm.min.js'

// Preload Control
const preload = Preload()
const preloadProgress = document.querySelector('.preload span')

preload.fetch([
    '../images/bg-banner-3.jpg',
    '../images/duvidas.jpg',
    '../images/bg-banner-2.jpg'
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
}

preload.onfetched = item => {
  console.log(item)
}

preload.onerror = item => {
  console.log(item)
}

