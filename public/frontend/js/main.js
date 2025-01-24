// Preload app
const preload = document.querySelector('#preload')

window.addEventListener('load', () => {
  setTimeout(() => {
    if (preload) {
      preload.classList.add('disable')
    }
  }, 0)
})


// Animation when scroll 
ScrollReveal({
  distance: '200px',
  duration: 1000,
  delay: 500,
})

// Scroll bottom to top 
ScrollReveal().reveal('.scroll-bottom-to-top1', { delay: 200, origin: 'bottom' })
ScrollReveal().reveal('.scroll-bottom-to-top2', { delay: 300, origin: 'bottom' })
ScrollReveal().reveal('.scroll-bottom-to-top3', { delay: 400, origin: 'bottom' })
ScrollReveal().reveal('.scroll-bottom-to-top4', { delay: 500, origin: 'bottom' })
ScrollReveal().reveal('.scroll-bottom-to-top5', { delay: 600, origin: 'bottom' })
ScrollReveal().reveal('.scroll-bottom-to-top6', { delay: 700, origin: 'bottom' })
ScrollReveal().reveal('.scroll-bottom-to-top7', { delay: 800, origin: 'bottom' })
ScrollReveal().reveal('.scroll-bottom-to-top8', { delay: 900, origin: 'bottom' })

// Scroll left to right
ScrollReveal().reveal('.scroll-left-to-right1', { delay: 200, origin: 'left' })
ScrollReveal().reveal('.scroll-left-to-right2', { delay: 300, origin: 'left' })
ScrollReveal().reveal('.scroll-left-to-right3', { delay: 400, origin: 'left' })
ScrollReveal().reveal('.scroll-left-to-right4', { delay: 500, origin: 'left' })

// Scroll right to left
ScrollReveal().reveal('.scroll-right-to-left1', { delay: 200, origin: 'right' })
ScrollReveal().reveal('.scroll-right-to-left2', { delay: 300, origin: 'right' })
ScrollReveal().reveal('.scroll-right-to-left3', { delay: 400, origin: 'right' })
ScrollReveal().reveal('.scroll-right-to-left4', { delay: 500, origin: 'right' })

// Text slide animation bottom to top 
ScrollReveal().reveal('.text-scroll-bottom-to-top1', { delay: 400, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top2', { delay: 600, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top3', { delay: 800, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top4', { delay: 1000, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top5', { delay: 1200, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top6', { delay: 1400, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top7', { delay: 1600, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top8', { delay: 1800, origin: 'bottom' })
ScrollReveal().reveal('.text-scroll-bottom-to-top9', { delay: 2000, origin: 'bottom' })

